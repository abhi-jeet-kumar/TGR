@extends('layouts.thegoodroad')
@section('content')
<div id="header">
    <div class="container-fluid px-0 mx-0">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6">
                <div class="div px-3 mx-3 py-5 my-5" style="">
                    <div style="height: 50px; background-color: #73d0d7; border-radius: 35px 35px 0 0">
                        <h4 class="text-center py-3" style="font-size: 18px; color: white;">LOGIN</h4>
                    </div>
                    <div class="" style="height: auto; background-color: white; border-radius: 0 0 35px 35px">
                        <form class="px-4 mx-4 py-4" action="{{route('log')}}" method="post">
                        @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{old('email')}}"/>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" />
                            </div>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12">
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="checkBox1" />
                                        <label class="form-check-label" for="checkBox1">Remember Me</label>
                                    </div>
                                    <div class="row justify-content-start  py-2 my-2">
                                        <div class="col-12">
                                            <a href="{{route('password.request')}}">Forgot Password? Reset here!</a>

                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </div>
                            <div class="row justify-content-start  py-2 my-2">
                                <div class="col-12">
                                    <a href="{{route('reg')}}">New User? Register here!</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection