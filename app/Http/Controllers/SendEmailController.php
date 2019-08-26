<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class SendEmailController extends Controller
{
    public function send(){
        Mail::send(['text'=>'existinguser'],['name'=>'noreply'],function($msg){
            $msg->to('nancychhatwal97@gmail.com','To Nancy')->subject('Reset Password');
            $msg->from('nancychhatwal97@gmail.com','Nancy');
        });
    }
}
