<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function page()
    {
        return view('login');
    }
    public function connection(){
        if ($_POST){
            $uname = $_POST['name'];
            $upass = $_POST['pass'];
            
            
        }else{

        }
    }
}