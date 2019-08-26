@extends('layouts.thegoodroad')
@section('content')
<div id="header">
    <div class="container-fluid px-0 mx-0">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6">
                <div class="div px-3 mx-3 py-5 my-5">
                    <div style="height: 50px; background-color: #73d0d7; border-radius: 35px 35px 0 0">
                        <h4 class="text-center py-3" style="font-size: 18px; color: white;">REGISTER</h4>
                    </div>
                    <div style="height: auto; background-color: white; border-radius: 0 0 35px 35px">
                        <form class="px-4 mx-4 py-4" action="{{route('reg')}}" method="post">
                        @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Name</label>
                                <input type="text" class="form-control" id="newusername" aria-describedby="newusername" placeholder="Enter your name"  name="name" value="{{old('name')}}" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{old('email')}}"/>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Mobile number</label>
                                <input type="text" class="form-control" id="newUserMobile" aria-describedby="newusermobile" placeholder="Enter your ten digit mobile number" name="mob_num" value="{{old('mob_num')}}" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Enter Password</label>
                                <input type="password" class="form-control" id="newUserPassword" placeholder="Password" name="password" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmNewUserPassword" placeholder="Password" name="password_confirmation" />
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="checkBox2" />
                                <label class="form-check-label" for="checkBox2"> I Accept The T & C, Including The Privacy Policy</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                            <div class="row justify-content-start  py-2 my-2">
                                <div class="col-12">
                                    <a href="{{route('log')}}">Exsisting User? Log in here!</a>
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