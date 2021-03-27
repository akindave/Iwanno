<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function confirmLogin(Request $request){

        if($request->ajax()){
            //get the value of the sent details
            $email = $request->email;
            $password = $request->password;

            $rules = [
                'email' => 'required|email',
                'password' => 'required|min:8'
            ];
        }
    }
}
