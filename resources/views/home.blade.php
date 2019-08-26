@extends('layouts.thegoodroad')
@section('content')
    <!-- carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('Files/image/carousel (1).jpg')}}" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="{{asset('Files/image/carousel (2).jpg')}}" class="d-block w-100" alt="..." />
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- video -->
    <div class="row justify-content-center">
        <div class="col-sm-6 py-4 my-4">
            <video class="videoimg" controls="" poster="{{asset('Files/image/videothumbnail.jpg')}}">
                <source src="{{asset('Files/video/tgrVideo.mp4')}}" type="video/mp4" />
            </video>
        </div>
    </div>

    <!-- services -->
    <div class="services-layout">
        <div class="row pt-4 mt-4 px-0 mx-0">
            <div class="col-sm-6 col-md-3">
                <div class="container-fluid px-0 mx-0">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image services" src="{{asset('Files/image/TGRcorporate.jpg')}}" />
                        <div class="content-details fadeIn-left">
                            <h3 class="text-center">Corporate</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="container-fluid px-0 mx-0">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image services" src="{{asset('Files/image/TGRwedding.jpg')}}"/>
                        <div class="content-details fadeIn-left">
                            <h3>Wedding</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="container-fluid px-0 mx-0">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image services" src="{{asset('Files/image/TGRgift.jpg')}}" />
                        <div class="content-details fadeIn-left">
                            <h3>All Other Occasions</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="container-fluid px-0 mx-0">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image services" src="{{asset('Files/image/TGRcard.jpg')}}" />
                        <div class="content-details fadeIn-left">
                            <h3>Gift Cards</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- why the good road -->
    <div class="row">
        <div class="col-12 pt-3 mt-3 my-3 py-3">
            <h3 class="text-center">Why The Good Road</h3>
        </div>
    </div>
    <div class="row justify-content-center align-items-center my-3 py-3">
        <div class=" col-sm-12 col-md-3 mr-3 pr-3 my-3 py-3">
            <img class="wtgr" src="{{asset('Files/image/whythegoodroad (1).jpg')}}" alt="" />
        </div>
        <div class="col-sm-12 col-md-6 pl-5 ml-5">
            <div class="row justify-content-right">
                <div class="col">
                    <img class="serial" src="{{asset('Files/image/serial (1).png')}}" alt="" />
                </div>
            </div>
            <div class="row justify-content-right">
                <div class="col">
                    <h3>One-stop Solution for all Your Gifting Needs</h3>
                    <p>The Good Road is a boutique gifting studio that specialises in curated and custom gift boxes that tell a story through carefully selected products and wrapping details.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center align-items-center my-3 py-3">
        <div class="col-sm-12 col-md-3 mr-3 pr-3 order-last order">
            <img class="wtgr" src="{{asset('Files/image/whythegoodroad (2).jpg')}}" alt="" />
        </div>
        <div class="col-sm-12 col-md-5 pl-5 ml-5 order-fisrt">
            <div class="row justify-content-right">
                <div class="col">
                    <img class="serial" src="{{asset('Files/image/serial (2).png')}}" alt="" />
                </div>
            </div>
            <div class="row justify-content-right">
                <div class="col">
                    <h3>One space, Infinite brands</h3>
                    <p>Our shopping experience allows customers to be privy to a selection of top brands, keeping in mind the trends and the taste simultaneously.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center align-items-center my-3 py-3">
        <div class="col-sm-12 col-md-3 mr-3 pr-3">
            <img class="wtgr" src="{{asset('Files/image/whythegoodroad (3).jpg')}}" alt="" />
        </div>
        <div class="col-sm-12 col-md-5 pl-5 ml-5">
            <div class="row justify-content-right">
                <div class="col">
                    <img class="serial" src="{{asset('Files/image/serial (3).png')}}" alt="" />
                </div>
            </div>
            <div class="row justify-content-right">
                <div class="col">
                    <h3>Personalised Delivery</h3>
                    <p>
                        Every box includes our signature handwritten card. We hand-pack your gifts, hand-write your messages, and dispatch it to the recipient. Gifts are sent pan India and will
                        arrive in 5-6 days.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- featured prodcuts section -->
    <div class="pt-3 mt-3">
        <h3 class="text-center">FEATURED PRODUCTS</h3>
        <P class="text-center">Featured collection curated by our experts</P>
    </div>

    <!-- products layout -->
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-3">
            <img class="productimage" src="{{asset('Files/image/cuttingchaiglass.jpg')}}" alt="" />
            <h5 class="producttitle text-center">Terracotta Cutting Chai Glass</h5>
            <p class="text-center">₹<span class="price">400.00</span></p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <img class="productimage" src="{{asset('Files/image/hibiscusgreentea.jpg')}}" alt="" />
            <h5 class="producttitle text-center">Hibiscus Green Tea</h5>
            <p class="text-center">₹<span class="price">399.00</span></p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
           <a href="{{route('product_page')}}"> <img class="productimage" src="{{asset('Files/image/pastelvibrancenotebook.jpg')}}" alt="" /></a>
            <h5 class="producttitle text-center">Pastel Vibrance NOtebook</h5>
            <p class="text-center">₹<span class="price">250.00</span></p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <img class="productimage" src="{{asset('Files/image/preshavescrub.jpg')}}" alt="" />
            <h5 class="producttitle text-center">Pre Shave Scrub</h5>
            <p class="text-center">₹<span class="price">245.00</span></p>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-sm-12 col-md-6 col-lg-3">
            <img class="productimage" src="{{asset('Files/image/girlbossnotebook.jpg')}}" alt="" />
            <h5 class="producttitle text-center">Girl Boss Binded Notebook</h5>
            <p class="text-center">₹<span class="price">250.00</span></p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <img class="productimage" src="{{asset('Files/image/choclatebar.jpg')}}" alt="" />
            <h5 class="producttitle text-center">Himalyan Fruit and Nut Choclate Bar</h5>
            <p class="text-center">₹<span class="price">335.00</span></p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <img class="productimage" src="{{asset('Files/image/aftershavebalm.jpg')}}" alt="" />
            <h5 class="producttitle text-center">Oudh Wood Hydrating Gel <br />After shave Bar</h5>
            <p class="text-center">₹<span class="price">250.00</span></p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <img class="productimage" src="{{asset('Files/image/tweeterglass.jpg')}}" alt="" />
            <h5 class="producttitle text-center">Tweeter Glasses</h5>
            <p class="text-center">₹<span class="price">545.00</span></p>
        </div>
    </div>

    <!-- pre-created boxes -->
    <div class="container-fluid px-0 mx-0" style="margin-right: 15px; margin-left: 15px;">
        <div class="row justify-content-center py-3 my-3">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <h2 class="text-center">Popular boxes</h2>
            </div>
        </div>

        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <img class="premadebox productimage" src="{{asset('Files/image/workholicBox.jpg')}}" alt="" />
                <h5 class="premadeboxtitle text-center">Workaholic</h5>
                <p class="text-center">₹<span class="price">2599.00</span></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <img class="premadebox productimage" src="{{asset('Files/image/birthdayguyBox.jpg')}}" alt="" />
                <h5 class="premadeboxtitle text-center">Birthday Guy</h5>
                <p class="text-center">₹<span class="price">2999.00</span></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <img class="premadebox productimage" src="{{asset('Files/image/bridetobeBox.jpg')}}" alt="" />
                <h5 class="producttitle text-center">Bride-To-Be</h5>
                <p class="text-center">₹<span class="price">2999.00</span></p>
            </div>
        </div>
    </div>
@endsection