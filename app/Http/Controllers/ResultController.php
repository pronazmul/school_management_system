<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResultModel;

class ResultController extends Controller
{
    public function insertResult(Request $request){

        $exam_id = $request->input('exam_id');  
        $student_id = $request->input('student_id'); 
        $course_id = $request->input('course_id'); 
        $marks = $request->input('marks');

        $result = ResultModel::insert([
                                    "exam_id"=>$exam_id,
                                    "student_id"=>$student_id,
                                    "course_id"=>$course_id,
                                    "marks"=>$marks                               
                                    ]);
        
        if($result){return "Data Inserted Successfully";}
        else{return "Data Failed To Insert";}
    }

    public function retriveResult(){
        $result = ResultModel::get();
        return $result;
    }

    public function ResultDataForUpdate(Request $request){
        $id = $request->header('id');
        $result = ResultModel::where('id',$id)->get();
        return $result;
    }

    public function updateResult(Request $request){

        $id = $request->input('id');
        
        $exam_id = $request->input('exam_id');  
        $student_id = $request->input('student_id'); 
        $course_id = $request->input('course_id'); 
        $marks = $request->input('marks');      

        $result = ResultModel::where('id', $id) ->update([
                                                        "exam_id"=>$exam_id,
                                                        "student_id"=>$student_id,
                                                        "course_id"=>$course_id,
                                                        "marks"=>$marks                               
                                                        ]);
        
        if($result){return "Data Updated Successfully";}
        else{return "Data Failed To Update";}
    }

    public function deleteResult(Request $request){
        $id = $request->header('id');
        $result = ResultModel::where('id',$id)->delete();

        if($result){return "Data Delete Successfull";}
        else{return "Data Failed To Delete";}
    }

}