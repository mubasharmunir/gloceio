<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function add_customer(){
        $mobile= new Mobile();
       
        $mobile->company='Nokia';


        $customer= new Customer();
        $customer->name='mubashar';
        $customer->email='mubashar@gmail.com';
        $customer->save();
        $customer->mobile()->save($mobile);

        // $user_photos = new User();
        // $user_photos->user_id = $customer->id;
        // $user_photos->photo_id = $photo->id;
        // $user_photos->save();


    }
}
