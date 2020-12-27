<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamModel;

class ExamController extends Controller
{
    public function insertExam(Request $request){

        $exam_name = $request->input('exam_name');  
        $exam_type = $request->input('exam_type'); 
        $exam_date = $request->input('exam_date'); 
        $student_id = $request->input('student_id'); 
        $teacher_id = $request->input('teacher_id'); 
        $course_id = $request->input('course_id');

        $result = ExamModel::insert([
                                    "exam_name"=>$exam_name,
                                    "exam_type"=>$exam_type,
                                    "exam_date"=>$exam_date,
                                    "student_id"=>$student_id,
                                    "teacher_id"=>$teacher_id,
                                    "course_id"=> $course_id                               
                                    ]);
        
        if($result){return "Data Inserted Successfully";}
        else{return "Data Failed To Insert";}
    }

    public function retriveExam(){
        $result = ExamModel::get();
        return $result;
    }

    public function ExamDataForUpdate(Request $request){
        $id = $request->header('id');
        $result = ExamModel::where('id',$id)->get();
        return $result;
    }

    public function updateExam(Request $request){

        $id = $request->input('id');
        
        $exam_name = $request->input('exam_name');  
        $exam_type = $request->input('exam_type'); 
        $exam_date = $request->input('exam_date'); 
        $student_id = $request->input('student_id'); 
        $teacher_id = $request->input('teacher_id'); 
        $course_id = $request->input('course_id');      

        $result = ExamModel::where('id', $id) ->update([
                                                        "exam_name"=>$exam_name,
                                                        "exam_type"=>$exam_type,
                                                        "exam_date"=>$exam_date,
                                                        "student_id"=>$student_id,
                                                        "teacher_id"=>$teacher_id,
                                                        "course_id"=> $course_id                               
                                                        ]);
        
        if($result){return "Data Updated Successfully";}
        else{return "Data Failed To Update";}
    }

    public function deleteExam(Request $request){
        $id = $request->header('id');
        $result = ExamModel::where('id',$id)->delete();

        if($result){return "Data Delete Successfull";}
        else{return "Data Failed To Delete";}
    }

}
