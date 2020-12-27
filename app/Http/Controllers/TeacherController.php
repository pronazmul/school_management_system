<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeacherModel;

class TeacherController extends Controller
{
    public function insertTeacher(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $date_of_birth = $request->input('date_of_birth');
        $religion = $request->input('religion');
        $mobile = $request->input('mobile');   
        $date_of_join = $request->input('date_of_join');   
        $status = $request->input('status');   
        $last_login_date = $request->input('last_login_date');   
        $last_login_ip = $request->input('last_login_ip');   
        $photo = $request->input('photo');   
        $national_id = $request->input('national_id');   
        $blood_group = $request->input('blood_group');    
        $login_id = $request->input('login_id');   
        $login_password = $request->input('login_password');   

        $result = TeacherModel::insert([
                                        "name"=>$name,
                                        "email"=> $email,
                                        "date_of_birth"=>$date_of_birth,
                                        "religion"=>$religion,
                                        "mobile"=>$mobile,
                                        "date_of_join"=>$date_of_join,
                                        "status"=>$status,
                                        "last_login_date"=>$last_login_date,
                                        "last_login_ip"=>$last_login_ip,
                                        "photo"=>$photo,
                                        "national_id"=>$national_id,                                        
                                        "blood_group"=>$blood_group,                                       
                                        "login_id"=>$login_id,                                        
                                        "login_password"=>$login_password                                     
                                        ]);
        
        if($result){return "Data Inserted Successfully";}
        else{return "Data Failed To Insert";}
    }

    public function retriveTeacher(){
        $result = TeacherModel::get();
        return $result;
    }

    public function TeacherDataForUpdate(Request $request){
        $id = $request->header('id');
        $result = TeacherModel::where('id',$id)->get();
        return $result;
    }

    public function updateTeacher(Request $request){

        $id = $request->input('id');

        $name = $request->input('name');
        $email = $request->input('email');
        $date_of_birth = $request->input('date_of_birth');
        $religion = $request->input('religion');
        $mobile = $request->input('mobile');   
        $date_of_join = $request->input('date_of_join');   
        $status = $request->input('status');   
        $last_login_date = $request->input('last_login_date');   
        $last_login_ip = $request->input('last_login_ip');   
        $photo = $request->input('photo');   
        $national_id = $request->input('national_id');   
        $blood_group = $request->input('blood_group');   
        $login_id = $request->input('login_id');   
        $login_password = $request->input('login_password');   

        $result = TeacherModel::where('id', $id) ->update([
                                                        "name"=>$name,
                                                        "email"=> $email,
                                                        "date_of_birth"=>$date_of_birth,
                                                        "religion"=>$religion,
                                                        "mobile"=>$mobile,
                                                        "date_of_join"=>$date_of_join,
                                                        "status"=>$status,
                                                        "last_login_date"=>$last_login_date,
                                                        "last_login_ip"=>$last_login_ip,
                                                        "photo"=>$photo,
                                                        "national_id"=>$national_id,                                        
                                                        "blood_group"=>$blood_group,                                        
                                                        "login_id"=>$login_id,                                        
                                                        "login_password"=>$login_password                                     
                                                        ]);
        
        if($result){return "Data Updated Successfully";}
        else{return "Data Failed To Update";}
    }

    public function deleteTeacher(Request $request){
        $id = $request->header('id');
        $result = TeacherModel::where('id',$id)->delete();

        if($result){return "Data Delete Successfull";}
        else{return "Data Failed To Delete";}
    }

}
