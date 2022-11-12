<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'user';
	public $timestamps = true;
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function course()
    {
        return $this->belongsToMany(courses::class, 'user_course ');
    }

}
