<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;
use View;
use Validator;
use Hash;
use App\Models\User;
use App\Models\Content;

class GuestController extends Controller
{
    //
    public function Homepage(Request $request){
            return view('Homepage');
    }

    public function Search(Request $request){
        $code = $request->code;
        if($request->ajax()){
            $validator = $request->validate([
                'code' => 'required|min:5'
            ]);
            if(!$validator){
                return response()->json(['status'=>204,'result'=>'failed']);
            }else{
                $content = Content::where('code',$code)->first();
                $user = User::where('id',$content->org_id)->first();
                if($content){
                    return response()->json(['status'=>200,'result'=> $content,'user'=>$user]);
                }else{
                    return response()->json(['status'=>200,'result'=> 'no user']);

                }
            }

        }

            
    }
}
