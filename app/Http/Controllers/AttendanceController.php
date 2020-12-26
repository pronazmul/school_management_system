<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttendanceModel;

class AttendanceController extends Controller
{
    public function insertAttendance(Request $request){

        $date = $request->input('date');  
        $class_id = $request->input('class_id');  
        $course_id = $request->input('course_id');  
        $student_id = $request->input('student_id');  
        $teacher_id = $request->input('teacher_id'); 
        $status = $request->input('status'); 

        $result = AttendanceModel::insert([
                                        "date"=>$date,
                                        "class_id"=> $class_id,
                                        "course_id"=>$course_id,                                    
                                        "student_id"=>$student_id,                                   
                                        "teacher_id"=>$teacher_id ,                                  
                                        "status"=>$status                                   
                                        ]);
        
        if($result){return "Data Inserted Successfully";}
        else{return "Data Failed To Insert";}
    }

    public function retriveAttendance(){
        $result = AttendanceModel::get();
        return $result;
    }

    public function AttendanceDataForUpdate(Request $request){
        $id = $request->header('id');
        $result = AttendanceModel::where('id',$id)->get();
        return $result;
    }

    public function updateAttendance(Request $request){

        $id = $request->input('id');
        
        $date = $request->input('date');  
        $class_id = $request->input('class_id');  
        $course_id = $request->input('course_id');  
        $student_id = $request->input('student_id');  
        $teacher_id = $request->input('teacher_id'); 
        $status = $request->input('status');      

        $result = AttendanceModel::where('id', $id) ->update([
                                                                "date"=>$date,
                                                                "class_id"=> $class_id,
                                                                "course_id"=>$course_id,                                    
                                                                "student_id"=>$student_id,                                   
                                                                "teacher_id"=>$teacher_id ,                                  
                                                                "status"=>$status                                   
                                                                ]);
        
        if($result){return "Data Updated Successfully";}
        else{return "Data Failed To Update";}
    }

    public function deleteAttendance(Request $request){
        $id = $request->header('id');
        $result = AttendanceModel::where('id',$id)->delete();

        if($result){return "Data Delete Successfull";}
        else{return "Data Failed To Delete";}
    }

}
