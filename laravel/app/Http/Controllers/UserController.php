<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserController extends Controller{
    public function register(Request $request)
    {
        $user = new User();
        $user->email = $request['email'];
        $user->firstName = $request['first_name'];
        $user->lastName = $request['last_name'];
        $user->phone = $request['phone'];
        $user->password = password_hash($request['password'], PASSWORD_DEFAULT);
        $user->role = 'user';

        $user->save();

        return view('login');
    }

    public function login(Request $request){
        $email = $request['email'];
        $user = User::where('email', $email)->first();

        if($user){
            $hashedPassword = $user->password;
            if(password_verify($request['password'], $hashedPassword)){
                Session::put('isLoggedIn', true);
                Session::put('loggedInUserId', $user['id']);
                return view('index');
            } else{
                return view('login');
            }
        } else{
            return view('login');
        }
    }

    public function logout(Request $request){
        Session::forget('isLoggedIn');
        return redirect('/');
    }
}
