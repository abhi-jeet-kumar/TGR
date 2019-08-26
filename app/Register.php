<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Register extends Model
{
    protected $fillable=[
        'name','email','mob_num','password','password_confirmation',
    ];
  
}