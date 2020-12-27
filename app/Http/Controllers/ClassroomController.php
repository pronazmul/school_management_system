<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassroomModel;

class ClassroomController extends Controller
{
    public function insertClass(Request $request){

        $course_id = $request->input('course_id');  
        $teacher_id = $request->input('teacher_id');  
        $section = $request->input('section');  
        $status = $request->input('status');  

        $result = ClassroomModel::insert([
                                        "course_id"=>$course_id,
                                        "teacher_id"=> $teacher_id,
                                        "section"=>$section,                                    
                                        "status"=>$status                                   
                                        ]);
        
        if($result){return "Data Inserted Successfully";}
        else{return "Data Failed To Insert";}
    }

    public function retriveClass(){
        $result = ClassroomModel::get();
        return $result;
    }

    public function ClassDataForUpdate(Request $request){
        $id = $request->header('id');
        $result = ClassroomModel::where('id',$id)->get();
        return $result;
    }

    public function updateClass(Request $request){

        $id = $request->input('id');

        $course_id = $request->input('course_id');  
        $teacher_id = $request->input('teacher_id');  
        $section = $request->input('section');  
        $status = $request->input('status');     

        $result = ClassroomModel::where('id', $id) ->update([
                                                            "course_id"=>$course_id,
                                                            "teacher_id"=> $teacher_id,
                                                            "section"=>$section,                                    
                                                            "status"=>$status                                   
                                                            ]);
        
        if($result){return "Data Updated Successfully";}
        else{return "Data Failed To Update";}
    }

    public function deleteClass(Request $request){
        $id = $request->header('id');
        $result = ClassroomModel::where('id',$id)->delete();

        if($result){return "Data Delete Successfull";}
        else{return "Data Failed To Delete";}
    }

}