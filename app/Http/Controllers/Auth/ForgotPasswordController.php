<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\User;
use Reminder;
use Mail;
//use Sentinel;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
   
    //  public function showLinkRequestForm()
    // {
    //     $this->data['title'] = trans('backpack::base.reset_password'); // set the page title
    //     return view('backpack::auth.passwords.email', $this->data);
    // }

    // public function forgotpwd(){
    //     return view('forgotpass');
    // }

    // public function postForgotPassword(Request $request){

    //     //return $request->email;
    //     if($request->isMethod('post')){
    //         $data=$request->all();
    //         $userCount=User::where('email',$data['email'])->count();

    //         if($userCount==0)

    //              return redirect()->back()->with([
    //             'message'=>'YOU COULD NOT HAVE BEEN IDENTIFIED AS AN EXISTING USER'
    //         ]);
            
        
    //     $userDetails=User::where('email',$data['email'])->first();
    //     $random_password=str_random(8);
    //     $new_password=bcrypt($random_password);
    //     User::where('email',$data['email']->update(['password'=>$new_password]));

    //     $email=$data['email'];
    //     $messageData=['email'=>$email,'password'=>$random_password];
    //     Mail::send('existinguser',$messageData,function($message)use($email){

    //         $message->to($email)->subject('New Password');

    //     });
    //     return redirect()->back()->with('msg','Reset Password Code has been sent to your email');
       

    // }

    //        return view('forgotpass');
    // }

    // private function sendEmail($user,$code){

    //     Mail::send('forgotpass',[
    //         'user'=>$user,
    //         'code'=>$code
    //     ],function($message) use($user){

    //         $message->to($user->email);
    //         $message->subject("Hello $user->name, reset your password.");
    //         return "YOUR PASSWORD RESET CODE HAS BEEN SENT TO THE PROVIDED EMAIL ADDRESS.";
    //     });
    // }

}
