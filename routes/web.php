<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CustomerController;
use  App\Http\Controllers\AuthController;
use  App\Http\Controllers\ProductController;
use  App\Http\Controllers\UserCourseController;
use App\Mail\UserMail;
use Illuminate\Support\Facades\Mail;


use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/user', [UserController::class, 'User']);
Route::post('/user', [UserController::class, 'Store'])->name('user');
Route::get('/course',[CourseController::class,'User']);
Route::post('/course',[CourseController::class,'Store'])->name('course');
Route::get('/user_course',[CourseController::class,'UserCourse'])->name('user_course');
Route::post('/courses',[CourseController::class,'Save_course'])->name('post_course');
Route::get('/product',[ProductController::class,'index']);
Route::get('/data_show',[UserCourseController::class,"data_show"])->name('data_show');
Route::get('/get_student_courses',[UserCourseController::class,"getStudentCourses"])->name('getStudentCourses');
// Route::get('/product',[ProductController::class,'dispaly_store'])->name('products');

Route::get('send-mail', function () { 
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
    \Mail::to('Mubasar@gmail.com')->send(new \App\Mail\UserMail($details));
    dd("Email is Sent.");
});

Route::get('email-test', function(){
  
    $details['email'] = 'your_email@gmail.com';
  
    dispatch(new App\Jobs\SendEmailJob($details));
  
    dd('done');
});



// Route::get('/send-mail', function () {
//     Mail::to('newuser@example.com')->send(new UserMail());
//     return 'A message has been sent to Mailtrap!';
  
// });


