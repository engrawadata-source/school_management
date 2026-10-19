<?php

namespace App\Http\Controllers;

use App\Http\Requests\SuncStudentsCoursesRequest;
use App\Models\Student;
//use Illuminate\Http\Request;

class StudentController extends Controller
{

##get all students
    public function index(){
        return Student::query()->get();

    }

    ##sync student in courses
public function assignCourse(SuncStudentsCoursesRequest $request){
    $student=Student::query()->findOrFail($request->validated('student_id'));
    $student->courses()->syncWithoutDetaching($request->validated('course_ids'));
    return response()->json($student->courses()->get());


}
}
