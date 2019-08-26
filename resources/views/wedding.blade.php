@extends('layouts.thegoodroad')
@section('content')
<div class="row corporatetop">
        <div class="col"><img src="{{asset('Files/Image/wedding1.png')}}" alt="" /></div>
    </div>

    <div class="container-fluid my-5 py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <p class="text-center corporatetext">
                    Featured collections created and curated by our editors This is our specialty - we love weddings! From congratulating a new bride-to-be, to bridesmaid proposals, groomsman
                    boxes, thank you gifts for the guests, invitation gifts and wedding welcome gifting suites, we’ll work with one-on-one with you to design thoughtful gifts with a personalized
                    touch. With hundreds of personalized items made by us and partnerships with more than 50 vendors, we offer the largest selection of products to ensure your gifts are truly
                    meaningful.
                </p>
            </div>
        </div>
    </div>
    <div class="conatiner mx-4">
        <div class="row justify-content-around align-items-center">
            <div class="col-sm-12 col-md-4">
                <div class="overlay">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image services" src="{{asset('Files/Image/wedding2.jpg')}}" />
                        <div class="content-details fadeIn-left">
                            <h3 class="text-center">GROOMSMAN BOX</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="overlay">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image services" src="{{asset('Files/Image/wedding3.jpg')}}" />
                        <div class="content-details fadeIn-left">
                            <h3 class="text-center">Bride-To-Be</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="overlay">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image services" src="{{asset('Files/Image/wedding4.jpg')}}" />
                        <div class="content-details fadeIn-left">
                            <h3 class="text-center">Couple gift</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-around align-items-center py-5 my-5">
            <div class="col-sm-12 col-md-4">
                <div class="overlay">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image services" src="{{asset('Files/Image/wedding5.jpg')}}" />
                        <div class="content-details fadeIn-left">
                            <h3 class="text-center">Thankyou Gifts For Guests</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="overlay">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image services" src="{{asset('Files/Image/wedding6.jpg')}}" />
                        <div class="content-details fadeIn-left">
                            <h3 class="text-center">Bridesmaid Proposal</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection