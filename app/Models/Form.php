<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'forms';
	public $timestamps = true;
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];
}
