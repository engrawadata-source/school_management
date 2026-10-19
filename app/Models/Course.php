<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title', 'teacher_id', 'description'];



    public function teacher(){
        return $this->belongsTo(Teacher::class , 'teacher_id');

    }

    public function students(){
        return $this->belongsToMany(Student::class , 'course_student');
        
    }
}
