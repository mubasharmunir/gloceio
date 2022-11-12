<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function User(){
        return view('frontend.user');
    }
    public function Store (UserRequest $request){
        $request->validate([    
            'name'=>'required|string|',
            'email'=>'required|email|string|unique:users',
            'password'=>'required||min:8',
            'phone'=>'required',
        ]);

       

        $save= new User();
        $save->name=$request->name;
        $save->email=$request->email;
        $save->phone=$request->phone;
        $save->password=$request->password;
        $save->save();
        return response()->json(['code'=>"200",'message'=>"Student Added Successfully"]);
       
    }
}
