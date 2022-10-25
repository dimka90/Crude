<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class WebController extends Controller
{
    //
    
    public function welcome(){
        // dd(session()->get('key','dimka'));
    
        return view('welcome');
    }
    
    public function data(){
        $data=[
            ["id"=>1,"Name"=>"Bankat","Email"=>"Fifthson@gmail.com","Gender"=>"Male"],
            ["id"=>2,"Name"=>"Doe","Email"=>"JoeDoe@gmail.com","Gender"=>"Male"],
            ["id"=>3,"Name"=>"Sarah","Email"=>"Sarah@gmail.com","Gender"=>"Female"],
            ["id"=>4,"Name"=>"Esther","Email"=>"Esther@yandex.com","Gender"=>"Female"],
            ["id"=>5,"Name"=>"Henry","Email"=>"Henry@yahoo.com","Gender"=>"Male"]
        ];

    return view("class",compact('data'));
    }

    public function index(){
        // $students=Student::all();
        //Order Record by using paginate
        $students=Student::orderBy('id','Desc')->paginate(10);



        return view('index',['student'=>$students]);
    }
    public function create(){
        return view('create');

    }

    public function edit($id){
        $student=Student::find($id);

        return view('edit',['student'=>$student]);
        
    }
    public function store(Request $request){
        
        $form_data=$request->validate(
            [
                'image'=>'required|image',
                'firstname'=>'required',
                'lastname'=>'required',
                'email'=>'required|unique:students',
                'phone'=>'required|min:11|numeric',
                'password'=>['required','min:5','max:20','confirmed'],
                'password_confirmation'=>'required',
                
                'address'=>'required'
            ]
        );
        $path=request()->file('image')->store('image');
        // dd($form_data);
        $student=new Student();
        $student->image=$path;
        $student->firstname=$request->firstname;
        $student->lastname=$request->lastname;
        $student->phone=$request->phone;
        $student->email=$request->email;
        $student->password=Hash::make($request->password);
        $student->address=$request->address;
  
        // dd(session()->get('key','dimka'));
        $user=$student->save(); 
    
        session()->flash('success', 'Your account have been  created Successfully '.$student->firstname.' '.$student->lastname);


        return redirect('index');
        
    }
    public function update(Request $request,$id){
        
        $student_info=Student::find($id);
        
        $student_info->firstname=$request->firstname;
        $student_info->lastname=$request->lastname;
        $student_info->phone=$request->phone;
        $student_info->email=$request->email;
        $student_info->address=$request->address;
      
        $student_info->save();
       
        return redirect('index');
        
        
    }



        public function delete($id){

            $delete_student=Student::find($id);

            $delete_student->delete();

            return redirect('index');


        }

        public function userinfo($id){
         
            $student=Student::find($id);
    
            return view('userinfo',['student'=>$student]);
            
        }
        public function login(){
         
         
    
            return view('login');
            
        }
        public function userlogin(Request $request){
         $credentials=$request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:11'

         ]
         );
       if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            $student=Student::orderBy('id','Desc')->paginate(10);
          return redirect('index');
      }
       throw ValidationException::withMessages([
        'email'=>'Invalid Login details'
       ]);
            
        }

        public function logout(){
            Auth::logout();
          request()->session()->invalidate();
            request()->session()->regenerateToken();
            return redirect('/');
        }
        // public function lange(Request $request,$locale) {
        //     //set’s application’s locale
        //     app()->setLocale($locale);
            
        //     //Gets the translated message and displays it
        //     echo trans('lang.msg');
        //  }
      
    
}
