<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function welcome(){
        echo "User Controller Welcome Method";
    }
    public function  form(){
        return view('index');
    }
    public function UserData($user){
        echo "User Data".$user;
    }
}
