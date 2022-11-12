<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{
    
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];
    use HasFactory;
    protected $table = 'user_course';
	public $timestamps = false;
}
