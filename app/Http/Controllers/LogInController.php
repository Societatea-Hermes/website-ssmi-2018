<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LogInRequest;
use App\User;
use DB;

class LogInController extends Controller
{
	public function login(LogInRequest $request,User $user)
	{

        $request->validate([
            "username" => "required",
            "password" => "required"

        ]);

      	$user->username = $request->input("username", "oana");
        $user->password = $request->password;

        if(User::where('username',$user->username)->exists() &&
        	User::where('password',$user->password)->exists())
        	{

        		return view("postLogin")->with("username", $user->username)->with("password", $user->password);
        	}
       
        return view('invalidCredentials');	

	}
}