<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Course;

use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;

class UserCourseController extends Controller
{
     public function data_show(){
        $users=Course::with(['user'])->get();

        // $users = Course::all()->load('user');
        dd($users );


        return view('frontend.usercourse_list' ,compact('users'));
    }


    public function getStudentCourses(){
        $studentCourses = User::with(['subject'])->get();
        dd($studentCourses );
        // return view('frontend.usercourse_list' ,compact('users'));
    }
}
