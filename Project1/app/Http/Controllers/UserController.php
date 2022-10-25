<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(){
        return view('user.register');

    }
    public function create(Request $request){
        $user_data=$request->validate([
            'username'=>'required',
            'email'=>'required|email:unique',
            'password'=>'required|confirmed|min:4|max:5'
        ]);
   
        $user=Student::create([
            'username'=>request
            ''
        ]);


    }
    //
    //
}
