<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;
use Hash;
use View;
use Session;
use DB;
use App\Models\User;

class RegisterController extends Controller
{
    public function confirmRegister(Request $request){
        //get the datas from the form
        $email = $request->email;
        $org_name = $request->org_name;
        $password = $request->password;

        $rules=[
            'email' => 'required|email|max:255|string',
            'password' => 'required|min:8|string',
            'org_name' => 'required'
        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
           return response()->json([
                'status' => 204, 'error' => $validator
           ]);
        }else{
            $emailAlreadyExists  = User::where('email',$email)->first();
            if($emailAlreadyExists){
                return response()->json([
                    'status' => 206,
                    'message' => 'Email Already Exist'
                ]);
            }else{

                $user = new User;
                $user->email  = $email;
                $user->organization_name  = $org_name;
                $user->password  = Hash::make($password);
                $user->save();
                return response()->json([
                    'status' => 200,
                    'message' => 'approved'
                ]);
            }
            
        }
    }
}
