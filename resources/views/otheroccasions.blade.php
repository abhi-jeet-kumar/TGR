@extends('layouts.thegoodroad')
@section('content')
<div class="row corporatetop">
    <div class="col"><img src="{{asset('Files/Image/otheroccasion1.jpg')}}" alt="" /></div>
</div>

<div class="container-fluid my-5 py-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            <p class="text-center corporatetext">
                Gifts are a great way to express your love and devotion to someone.
                <br />
                <br />
                After all nothing can make an everlasting impression as impactful as a gift box can.
                <br />
                <br />
                This is because a first impression is indeed a last impression.
                <br />
                <br />
                They say good things come in small packages.
                <br />
                <br />
                At The Good Road, we believe great things come in custom packages, whether they’re small, large, or anything in between.
                <br />
                <br />
                So be it <b>Birthday Party</b>, <b>Gifts</b> or <b>Guest Presents</b> or <b>Baby Shower</b>; we have you covered.
            </p>
        </div>
    </div>
</div>

<div class="conatiner mx-4 mb-5 pb-5">
    <div class="row justify-content-around align-items-center">
        <div class="col-sm-12 col-md-3">
            <div class="overlay">
                <div class="content">
                    <div class="content-overlay"></div>
                    <img class="content-image services" src="{{asset('Files/Image/otheroccasion2.jpg')}}" />
                    <div class="content-details fadeIn-left">
                        <h3 class="text-center">GROOMSMAN BOX</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="overlay">
                <div class="content">
                    <div class="content-overlay"></div>
                    <img class="content-image services" src="{{asset('Files/Image/otheroccasion3.jpg')}}" />
                    <div class="content-details fadeIn-left">
                        <h3 class="text-center">Bride-To-Be</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="overlay">
                <div class="content">
                    <div class="content-overlay"></div>
                    <img class="content-image services" src="{{asset('Files/Image/otheroccasion4.jpg')}}" />
                    <div class="content-details fadeIn-left">
                        <h3 class="text-center">Couple gift</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="overlay">
                <div class="content">
                    <div class="content-overlay"></div>
                    <img class="content-image services" src="{{asset('Files/Image/otheroccasion5.jpg')}}" />
                    <div class="content-details fadeIn-left">
                        <h3 class="text-center">Couple gift</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection