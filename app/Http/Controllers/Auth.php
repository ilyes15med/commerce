<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Auth extends Controller
{
    //admin
    public function login(Request $req){

       $email=$req->email;
       $password=$req->password;
     //admin
       $adminmail=DB::table('admin')->where('email',$email)->first();
       //client
       $client=DB::table('clients')->where('email',$email)->first();
       if($adminmail && Hash::check($password,$adminmail->password)){
       
        $req->session()->put('email_admin',$email);
          //return view('admin.addProduct');
          return redirect('/admin/products');
          
       }else if($client && Hash::check($password,$client->password)){
        $req->session()->put('email_client',$email);
        //return view('admin.addProduct');
        return redirect('/products/c');
        
        }else{
            return back()->with('error_login', 'Email ou mot de passe incorrect');
        }
    
    }
    public function logout(Request $req){
        $req->session()->flush();
        return redirect('/');


    }

    //client
    //signin
    public function client(Request $req){
        $firstname=$req->firstName;
        $familyname=$req->FamilyName;
        $email_cli=$req->email;
        $password_cli=$req->password;

        DB::table('clients')->insert([

            'First_name'=>$firstname,
            'Family_name'=>$familyname,
            'email'=>$email_cli,
            'password'=>bcrypt($password_cli)

        ]);

        return redirect('/Se-connecter')->with('add_client', 'Successful registration');



    }
    
   
}
