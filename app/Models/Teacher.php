<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    use HasFactory ;

     protected $fillable = ['user_id' , 'specialization'];


     public function user(){
        return $this->belongsTo(User::class ,'user_id');
     }


     public function courses(){
        return $this->hasMany(Course::class , 'teacher_id');

     }
     }
