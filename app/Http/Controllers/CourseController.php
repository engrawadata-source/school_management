<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetCourseStudentsRequest;
use App\Http\Requests\StoreCoursesRequest;
use App\Models\Course;
use App\Models\Teacher;

//use Illuminate\Http\Request;

class CourseController extends Controller
{

## get all students in specific course
public function getCourseStudents(GetCourseStudentsRequest $request){
    $course=Course::query()->findOrFail($request->validated('course_id'));
    $students= $course->students;
    return response()->json($students);
}

##attach teacher to courses
public function store(StoreCoursesRequest $request){
    $teacher=Teacher::query()->findOrFail($request->teacher_id);
    $courses=$teacher->courses()->createMany($request->validated('courses'));
    return response()->json($courses);

}
}

