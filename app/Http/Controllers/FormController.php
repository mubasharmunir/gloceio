<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Auth\Events\Validated;

use Illuminate\Support\Facades\DB;
use App\Models\Form;

class FormController extends Controller
{
public function form(){
    return view('frontend.form');
}
public function Store (UserRequest $request){
    $request->validate([
            
        'name'=>'required|string|',
        'email'=>'required|email|string|unique:users',
        'password'=>'required||min:8',
        'phone'=>'required',

    ]);
    

    $save= new Form();

    $save->name=$request->name;
    $save->email=$request->email;
    $save->phone=$request->phone;
    $save->password=$request->password;
    $save->save();
    return redirect()->back()->with('status','Student Added Successfully');


}
}
