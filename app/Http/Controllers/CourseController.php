<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseModel;

class CourseController extends Controller
{
    public function insertCourse(Request $request){

        $name = $request->input('name');  
        $description = $request->input('description');  
        $grade_id = $request->input('grade_id');  

        $result = CourseModel::insert([
                                        "name"=>$name,
                                        "description"=> $description,
                                        "grade_id"=>$grade_id                                    
                                        ]);
        
        if($result){return "Data Inserted Successfully";}
        else{return "Data Failed To Insert";}
    }

    public function retriveCourse(){
        $result = CourseModel::get();
        return $result;
    }

    public function CourseDataForUpdate(Request $request){
        $id = $request->header('id');
        $result = CourseModel::where('id',$id)->get();
        return $result;
    }

    public function updateCourse(Request $request){

        $id = $request->input('id');

        $name = $request->input('name');  
        $description = $request->input('description');  
        $grade_id = $request->input('grade_id');     

        $result = CourseModel::where('id', $id) ->update([
                                                        "name"=>$name,
                                                        "description"=> $description,
                                                        "grade_id"=>$grade_id                                    
                                                        ]);
        
        if($result){return "Data Updated Successfully";}
        else{return "Data Failed To Update";}
    }

    public function deleteCourse(Request $request){
        $id = $request->header('id');
        $result = CourseModel::where('id',$id)->delete();

        if($result){return "Data Delete Successfull";}
        else{return "Data Failed To Delete";}
    }

}