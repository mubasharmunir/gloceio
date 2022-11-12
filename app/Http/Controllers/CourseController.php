<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\CourseRequest;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use App\Models\UserCourse;

class CourseController extends Controller
{
    public function User(){
     return view('frontend.course');
    }
    public function Store(CourseRequest $request){
        $save= new Course();
        $save->course_name=$request->course_name;
        $save->course_id=$request->course_id;
        $save->credit_hours=$request->credit_hours;
        $save->description=$request->description;
        $save->save();
        return redirect()->back()->with('status','Course Added Successfully');
    }
    public function Save_course(Request $request){
        // $users = json_decode($request);
    
        $save= new UserCourse();
        $save->user_id=$request->user;
        $save->course_id=$request->course_name;
        $save->save();
        // return response()->json($users);

        // return redirect()->back()->with('status','Course Added Successfully');
    }
    public function UserCourse(){
        $items = Course::all(['id', 'course_name']);
        $users = User::all(['id','name']);
        // return responce()->json(['code'=>200 ,'message'=>'data is succesfully add']);
        return view('frontend.user_course', compact('items','users'));
    }
    public function data_show(){
        $user=User::with(['user_course'])->get();
        
        dd($user);
    }

    }
    
    

