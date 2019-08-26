@extends('layouts.thegoodroad')
@section('content')
<div id="header">
    <div class="container-fluid px-0 mx-0">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6">
                <div class="div px-3 mx-3 py-5 my-5" style="">
                    <div style="height: 50px; background-color: #73d0d7; border-radius: 35px 35px 0 0">
                        <h4 class="text-center py-3" style="font-size: 18px; color: white;">Forgot Password</h4>
                    </div>
                    <div style="height: auto; background-color: white; border-radius: 0 0 35px 35px">
                        <form class="px-4 mx-4 py-4" action="{{route('password.email')}}" method="post">
                        @if(session('status'))
                        <div class="alert alert-danger">{{session('status')}}</div>@endif
                            <div class="form-group">
                                <label class="d-block text-center py-2 my-2" for="exampleInputEmail1">
                                    <h2 class="">Please enter Your email</h2>
                                </label>
                                <input class="d-block" style="width:100%; height:45px; border-radius:15px; outline:0"
                                    type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="email" />

                                    
                            </div>
                            <a href="#"><button style="outline:0" type="submit" class="btn btn-primary">Send link</button></a>
                            <a class="d-block py-3" href="/existinguser">Already a user? Login here!</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection