<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{ 
    protected $table = 'cources';
	public $timestamps = true;
    use HasFactory;
    protected $fillable = [
      
    ];
    public function user()
    {
        return $this->belongsToMany(User::class, 'user_course');
    }
    
}
