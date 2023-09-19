<?php

namespace App\Http\Controllers;

use App\Mail\UserSendCodeEmail;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Psy\Readline\Hoa\Exception;

class AuthController extends Controller
{
    public function getCode(Request $request){

    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required'
        ]);

        $user = User::query()->where('email', $request->email)->first();

        if (!$user) {
            $user = new User();
            $user->email = $request->email;
            $user->save();
            $role = new Role();
            $role->role = 'player';
            $user->role()->save($role);
        }

        $code = rand(100000, 999999);
        $user->code = Hash::make($code);
        $user->code_expire = Carbon::now()->addMinutes(10);
        $user->save();
        try {
            Mail::to($user->email)->send(new UserSendCodeEmail($code,$user->email));
            return response()->json([
                "message"=> "code sent",
                "status"=>true
            ],201);
        }catch (Exception $e){
            return response()->json([
                "message"=> $e->getMessage(),
                "email"=>$user->email,
                "status"=>false
            ],500);
        }
    }

    public function checkCode(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'code'=>'required',
            'email'=>'required'
        ]);

        $user = User::query()->where('email',$request->email)->first();

        if ($user && Hash::check($request->code,$user->code) && $user->code_expire >= Carbon::now()){
            Auth::login($user);
            $token = $user->createToken('api-token')->plainTextToken;
            return response()->json([
                "message"=>"Logged In",
                "token"=>$token,
                "statue"=>true
            ],201);
        }else{
            return response()->json([
                "message"=>"Unauthorized",
                "statue"=>false
            ],401);
        }
    }
}
