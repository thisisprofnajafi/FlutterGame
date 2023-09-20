<?php

namespace App\Http\Controllers;

use App\Mail\UserSendCodeEmail;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Identicon\Identicon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Psy\Readline\Hoa\Exception;

class AuthController extends Controller
{
    public function setName(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $user = Auth::user();
        $user->name = $request->name;

        $identicon = new Identicon();
        $em = explode('@',$user->email);
        $base64Image = $identicon->getImageDataUri($request->name.$em[0]);
        $base64Image = preg_replace('/^data:image\/\w+;base64,/', '', $base64Image);
        $imageData = base64_decode($base64Image);
        $fileName = 'avatar_' . uniqid() . '.png';
        $directory = public_path('/users/avatars');
        file_put_contents($directory . '/' . $fileName, $imageData);
        $user->avatar = $fileName;
        $user->save();
        return response()->json([
            "message" => "name is set",
            "status" => true
        ], 201);
    }

    public function getInfo(): \Illuminate\Http\JsonResponse
    {
        $user = Auth::user();

        if ($user) {
            if ($user->name != null && $user->name != '')
                $hasName = true;
            else
                $hasName = false;

            return response()->json([
                'hasName' => $hasName,
                'status' => true
            ], 200);
        }
        return response()->json([
            'status' => false
        ], 401);
    }

    public function login(Request $request)
    {
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
            Mail::to($user->email)->send(new UserSendCodeEmail($code, $user->email));
            return response()->json([
                "message" => "code sent",
                "status" => true
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                "message" => $e->getMessage(),
                "email" => $user->email,
                "status" => false
            ], 500);
        }
    }

    public function checkCode(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'code' => 'required',
            'email' => 'required'
        ]);

        $user = User::query()->where('email', $request->email)->first();

        if ($user && Hash::check($request->code, $user->code) && $user->code_expire >= Carbon::now()) {
            Auth::login($user);
            $token = $user->createToken('api-token')->plainTextToken;
            if ($user->name != null && $user->name != '')
                $hasName = true;
            else
                $hasName = false;
            return response()->json([
                "message" => "Logged In",
                "token" => $token,
                "hasName" => $hasName,
                "status" => true
            ], 201);
        } else {
            return response()->json([
                "message" => "Unauthorized",
                "status" => false
            ], 401);
        }
    }
}
