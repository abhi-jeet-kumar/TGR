<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Login;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
//use Auth;
use App\Register;
use Session;
use Illuminate\Support\Facades\Auth;
use App\User;



class RegisterAuthController extends Controller
{
    //
    public function showRegister(){
        return view('newuser');
    }
    
    // public function registration(Request $request){
    //     $data=$request->all();
    //     $this->validation($request);
    //     $request['email']=$data['email'];
    //     $request['password']=bcrypt($data['password']);
    //     $request['password_confirmation']=bcrypt($data['password_confirmation']);
    //     $data=User::create($request->all());
    //     return redirect('/');
    //     //return $request->all();
    // }


    public function registration(Request $request){
    if($request->isMethod('post'))
       {
        $data = $request->all();
        // echo "<pre>";print_r($data);die;
        $usercount =User::where('email',$data['email'])->count();
        if($usercount>0)
        {
            return redirect()->back()->with('msg','Email already exists');

        }
        else{
            $user = new User;
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->mob_num = $data['mob_num'];
            $user->password = bcrypt($data['password']);
            $user->password_confirmation=bcrypt($data['password_confirmation']);
            $user->save();
            return redirect('/');
            //Send Register email
             
            
          
            

        }
       } 
      }

    public function showLogin(){
        return view('existinguser');
    }
    
    public function login(Request $request){
         $this->validate($request,[
       
           'email'=>'required|email|max:255',
           'password'=>'required',
         ]);

        // $data=DB::table('registers')->select('email','password')->get();
        
             if(Auth::attempt(['email'=>DB::table('registers')->select('email')->get(),'password'=>DB::table('registers')->select('password')->get()])){

                // Session::put('frontSession',$data['email']);
                // return redirect('/')->with('msg','You have successfully logged in');
                
                return redirect('/');
             }
             else{
                 return "SOMETHING WENT WRONG";
             }

//return $data->password;
         
         }

    public function validation($request){
        $this->validate($request,[
       
            'name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'mobile'=>'required|digits:10',
            'password'=>'required|confirmed',
           

        ]);
    }



}




