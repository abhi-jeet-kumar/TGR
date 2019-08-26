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
                            <form class="px-4 mx-4 py-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                            <form class="px-4 mx-4 py-4" action="{{route('reg')}}" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Your Name</label>
                                    <input type="text" class="form-control" id="newusername" aria-describedby="newusername" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Your Mobile number</label>
                                    <input type="text" class="form-control" id="newUserMobile" aria-describedby="newusermobile" placeholder="Enter your ten digit mobile number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Enter Password</label>
                                    <input type="password" class="form-control" id="newUserPassword" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmNewUserPassword" placeholder="Password">
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