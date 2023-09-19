<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Identicon\Identicon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected $users = array(
        ['abol', 'thisisprofnajafi@gmail.com', '123456'],
        ['danial', 'danial@gmail.com', '123456'],
        ['danial', 'danialsko@gmail.com', '123456']
    );

    public function getLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::query()->where('email', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                if ($user->role->role = 'admin') {
                    Auth::login($user);
                    return redirect(route('dashboard'));
                }
            }
        }
        return back();
    }

    public function setups()
    {
        foreach ($this->users as $user) {
            $identicon = new Identicon();
            $em = explode('@',$user[1]);
            $base64Image = $identicon->getImageDataUri($user[0].$em[0]);
            $base64Image = preg_replace('/^data:image\/\w+;base64,/', '', $base64Image);
            $imageData = base64_decode($base64Image);
            $fileName = 'avatar_' . uniqid() . '.png';
            $directory = public_path('/users/avatars');
            file_put_contents($directory . '/' . $fileName, $imageData);
            $u = new User();
            $u->name = $user[0];
            $u->email = $user[1];
            $u->password = Hash::make($user[2]);
            $u->avatar = $fileName;
            $u->save();

            $role = new Role();
            $role->role = 'admin';
            $u->role()->save($role);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect(route('dashboard'));
    }
}
