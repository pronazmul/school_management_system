<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GradeModel;

class GradeController extends Controller
{
    public function insertGrade(Request $request){

        $name = $request->input('name');  
        $description = $request->input('description'); 

        $result = GradeModel::insert([
                                        "name"=>$name,
                                        "description"=> $description                                
                                        ]);
        
        if($result){return "Data Inserted Successfully";}
        else{return "Data Failed To Insert";}
    }

    public function retriveGrade(){
        $result = GradeModel::get();
        return $result;
    }

    public function GradeDataForUpdate(Request $request){
        $id = $request->header('id');
        $result = GradeModel::where('id',$id)->get();
        return $result;
    }

    public function updateGrade(Request $request){

        $id = $request->input('id');
        
        $name = $request->input('name');  
        $description = $request->input('description');       

        $result = GradeModel::where('id', $id) ->update([
                                                        "name"=>$name,
                                                        "description"=> $description                                
                                                        ]);
        
        if($result){return "Data Updated Successfully";}
        else{return "Data Failed To Update";}
    }

    public function deleteGrade(Request $request){
        $id = $request->header('id');
        $result = GradeModel::where('id',$id)->delete();

        if($result){return "Data Delete Successfull";}
        else{return "Data Failed To Delete";}
    }

}
