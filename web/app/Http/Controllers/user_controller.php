<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class user_controller extends Controller
{
    public static function registerUser(Request $request)
    {

        $validator = Validator::make($request->all(), ["password" => "min:10|required",
            "first_name" => "required",
            "last_name" => "required",
            "date_of_birth" => "required"]);

        $emailValidator = Validator::make($request->all(), [
            "email" => "required|unique:users"
          ]);

        if ($validator->fails()) {
            return redirect()->route("homepage")->with("error", "Make sure you enter data for every field and the passwords are at least 10 characters.");
        }elseif($emailValidator->fails()){
            return redirect()->route("homepage")->with("error", "Email already in use");
        }elseif($request->password !== $request->confirm_password){
            return redirect()->route("homepage")->with("error", "Passwords don't match");
        }else {

            if(User::insert(["first_name" => $request->first_name,
                "last_name" => $request->last_name,
                "date_of_birth" => $request->date_of_birth,
                "email" => $request->email, "password" => Hash::make($request->password),
                    "created_at" => now(),
                    "updated_at" => now()])){

                return redirect()->route("homepage")->with("success", "Account Successfully Registered");
            }else{
                return redirect()->route("homepage")->with("error", "Error creating your account");
            }
        }

    }

    public static function login(Request $request){
        $results = User::select("*")->where("email", $request->email)->first();

        if(!empty($results)){
            if(Hash::check($request->password, $results->password)){
                Auth::loginUsingId($results->id, true);
                return redirect()->route('dashboard');
            }else{
                return redirect()->route('homepage')->with("error", "Password is wrong");
            }
        }else{
            return redirect()->route('homepage')->with("error", "Email doesn't exist");
        }

    }

}
