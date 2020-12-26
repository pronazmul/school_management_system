<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Student Route 
Route::post('/insertStudent', 'App\Http\Controllers\StudentController@insertStudent');
Route::get('/retriveStudent', 'App\Http\Controllers\StudentController@retriveStudent');
Route::get('/studentDataForUpdate', 'App\Http\Controllers\StudentController@studentDataForUpdate');
Route::put('/updateStudent', 'App\Http\Controllers\StudentController@updateStudent');
Route::delete('/deleteStudent', 'App\Http\Controllers\StudentController@deleteStudent');


//Parent Route 
Route::post('/insertParent', 'App\Http\Controllers\ParentController@insertParent');
Route::get('/retriveParent', 'App\Http\Controllers\ParentController@retriveParent');
Route::get('/parentDataForUpdate', 'App\Http\Controllers\ParentController@parentDataForUpdate');
Route::put('/updateParent', 'App\Http\Controllers\ParentController@updateParent');
Route::delete('/deleteParent', 'App\Http\Controllers\ParentController@deleteParent');

//Parent Route 
Route::post('/insertTeacher', 'App\Http\Controllers\TeacherController@insertTeacher');
Route::get('/retriveTeacher', 'App\Http\Controllers\TeacherController@retriveTeacher');
Route::get('/teacherDataForUpdate', 'App\Http\Controllers\TeacherController@TeacherDataForUpdate');
Route::put('/updateTeacher', 'App\Http\Controllers\TeacherController@updateTeacher');
Route::delete('/deleteTeacher', 'App\Http\Controllers\TeacherController@deleteTeacher');

//Course Route 
Route::post('/insertCourse', 'App\Http\Controllers\CourseController@insertCourse');
Route::get('/retriveCourse', 'App\Http\Controllers\CourseController@retriveCourse');
Route::get('/courseDataForUpdate', 'App\Http\Controllers\CourseController@CourseDataForUpdate');
Route::put('/updateCourse', 'App\Http\Controllers\CourseController@updateCourse');
Route::delete('/deleteCourse', 'App\Http\Controllers\CourseController@deleteCourse');

