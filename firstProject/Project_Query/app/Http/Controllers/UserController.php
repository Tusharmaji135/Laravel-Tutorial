<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class UserController extends Controller
{
    //All Users
    public function showUsers(){

        $users = FacadesDB::table('users')->paginate(6);
        // return $users;
        // dd($users); //debug
        return view('allusers',['data' => $users]);
    }

    //single user
    public function showUser($id){
        $user = FacadesDB::table('users')->where('id',$id)->first();
        return view('singleuser',['data' => $user]);
    }

    //add user
    public function addUser(Request $req){
        $user = FacadesDB::table('users')->insert(
            [
                'name' => $req->username,
                'email' => $req->useremail,
                'age' => $req->userage,
                'city' => $req->usercity,
            ]
        );
        if($user){
            return redirect('/users');
        }else{
            return "Failed to add user";
        }
    }
    //update page
    public function updatepage(String $id){
        // $user = FacadesDB::table('users')->where('id',$id)->first();
        $user = FacadesDB::table('users')->find($id);
        return view('updateuser',['data' => $user]);
    }

    //update user
    public function updateUser(Request $req, $id){
        $user = FacadesDB::table('users')->where('id',$id)->update([
                'name' => $req->username,
                'email' => $req->useremail,
                'age' => $req->userage,
                'city' => $req->usercity,
        ]);
        
        if($user){
            return redirect('/users');
        } else{
            return "Failed to update user";
        }
    }

    //delete user
    public function deleteUser($id){
        $user = FacadesDB::table('users')->where('id',$id)->delete();
        if($user){
            return redirect('/users');
        }
    }
}
