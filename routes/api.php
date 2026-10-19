<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

##get all students
Route::get('/students', [StudentController::class , 'index']);


##get all teachers
Route::get('/teachers' , [TeacherController::class , 'index']);


##get all specific teacher's courses
Route::get('/teacher/courses' , [TeacherController::class , 'getTeacherCourses']);

##get all students in a specific course
Route::get('course/students' , [CourseController::class , 'getCourseStudents']);

##create course and attach teacher to course at same time
Route::post('course', [CourseController::class , 'store']);

##sync students to course
Route::post('student/assignCourses' , [StudentController::class , 'assignCourse']);

