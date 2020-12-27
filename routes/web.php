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

//Class Room Route 
Route::post('/insertClass', 'App\Http\Controllers\ClassroomController@insertClass');
Route::get('/retriveClass', 'App\Http\Controllers\ClassroomController@retriveClass');
Route::get('/classDataForUpdate', 'App\Http\Controllers\ClassroomController@ClassDataForUpdate');
Route::put('/updateClass', 'App\Http\Controllers\ClassroomController@updateClass');
Route::delete('/deleteClass', 'App\Http\Controllers\ClassroomController@deleteClass');

//Attendance Route 
Route::post('/insertAttendance', 'App\Http\Controllers\AttendanceController@insertAttendance');
Route::get('/retriveAttendance', 'App\Http\Controllers\AttendanceController@retriveAttendance');
Route::get('/attendanceDataForUpdate', 'App\Http\Controllers\AttendanceController@AttendanceDataForUpdate');
Route::put('/updateAttendance', 'App\Http\Controllers\AttendanceController@updateAttendance');
Route::delete('/deleteAttendance', 'App\Http\Controllers\AttendanceController@deleteAttendance');

//Grade Route 
Route::post('/insertGrade', 'App\Http\Controllers\GradeController@insertGrade');
Route::get('/retriveGrade', 'App\Http\Controllers\GradeController@retriveGrade');
Route::get('/gradeDataForUpdate', 'App\Http\Controllers\GradeController@GradeDataForUpdate');
Route::put('/updateGrade', 'App\Http\Controllers\GradeController@updateGrade');
Route::delete('/deleteGrade', 'App\Http\Controllers\GradeController@deleteGrade');

//Exam Route 
Route::post('/insertExam', 'App\Http\Controllers\ExamController@insertExam');
Route::get('/retriveExam', 'App\Http\Controllers\ExamController@retriveExam');
Route::get('/examDataForUpdate', 'App\Http\Controllers\ExamController@ExamDataForUpdate');
Route::put('/updateExam', 'App\Http\Controllers\ExamController@updateExam');
Route::delete('/deleteExam', 'App\Http\Controllers\ExamController@deleteExam');

//Result Route 
Route::post('/insertResult', 'App\Http\Controllers\ResultController@insertResult');
Route::get('/retriveResult', 'App\Http\Controllers\ResultController@retriveResult');
Route::get('/resultDataForUpdate', 'App\Http\Controllers\ResultController@ResultDataForUpdate');
Route::put('/updateResult', 'App\Http\Controllers\ResultController@updateResult');
Route::delete('/deleteResult', 'App\Http\Controllers\ResultController@deleteResult');
