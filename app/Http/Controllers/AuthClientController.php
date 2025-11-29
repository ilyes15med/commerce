<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthClientController extends Controller
{
    //
    public function client(){
        $email="c13@gmail.com";
        session()->put('user_email',$email);
          return view('client.client');

    }
    public function deconnect(){
     
        session_unset();
        session_destroy();
        return view('welcome');
         

    }
    

}
