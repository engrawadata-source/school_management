<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetTeacherCoursesRequest;
use App\Models\Teacher;
//use Illuminate\Http\Request;

//use Illuminate\Http\Request;

class TeacherController extends Controller
{
    ##get all teachers
    public function index(){
        return Teacher::query()->get();
    }


    ##get teacher's courses
    public function getTeacherCourses(GetTeacherCoursesRequest $request){
        $teacher= Teacher::query()->findOrFail($request->validated('teacher_id')) ;
        $courses= $teacher->courses;

        return response()->json($courses);


    }

}
