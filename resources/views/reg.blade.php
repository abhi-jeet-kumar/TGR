<html>
<head>

<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<!--<h1>LOGIN</h1>
<form action="{{route('reg')}}" method="POST">
@csrf
Name: <input type="text" name="name" value="{{old('name')}}"><br/>
Email: <input type="email" name="email" value="{{old('email')}}"><br/>
Mobile: <input type="text" name="mobile" value="{{old('mobile')}}"><br/>
Password: <input type="password" name="password"><br/>
Confirm Password: <input type="password" name="password_confirmation"><br/>
<input type="Submit">
</form>-->
@extends('layouts.thegoodroad')
@section('content')
<div id="header" >
        <div class="container-fluid px-0 mx-0">
            <div class="row justify-content-around">
                <div class="col-sm-12 col-md-6">
                    <div class="div px-3 mx-3 py-5 my-5" style="">
                        <div style="height: 50px; background-color: aqua; border-radius: 35px 35px 0 0">
                            <h4 class="text-center py-3" style="font-size: 18px; color: white;">LOGIN</h4>
                        </div>
                        <div class="" style="height: auto; background-color: white; border-radius: 0 0 35px 35px">
                            <form class="px-4 mx-4 py-4" action="{{route('log')}}" method="POST" name="form1">
                            @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                                </div>
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-12">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>                    
                </div> 
                <div class="col-sm-12 col-md-6">
                    <div class="div px-3 mx-3 py-5 my-5" style="">
                        <div style="height: 50px; background-color: aqua; border-radius: 35px 35px 0 0">
                            <h4 class="text-center py-3" style="font-size: 18px; color: white;">REGISTER</h4>
                        </div>
                        <div style="height: auto; background-color: white; border-radius: 0 0 35px 35px">
                            <form class="px-4 mx-4 py-4" action="{{route('reg')}}" method="POST" name="form2">
                             @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Your Name</label>
                                    <input type="text" class="form-control" name="name" id="newusername" aria-describedby="newusername" placeholder="Enter your name" value="{{old('name')}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{old('name')}}">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Your Mobile number</label>
                                    <input type="text" class="form-control" name="mobile" id="newUserMobile" aria-describedby="newusermobile" placeholder="Enter your ten digit mobile number" value="{{old('name')}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Enter Password</label>
                                    <input type="password" class="form-control" name="password" id="newUserPassword" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" id="confirmNewUserPassword" placeholder="Password">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1"> I Accept The T & C, Including The Privacy Policy</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Register</button>
                                
                            </form>
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>

