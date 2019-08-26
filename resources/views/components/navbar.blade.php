<!-- navbar -->
<div class="container-fluid px-0 mx-0">
        <!-- main logo bar -->
        <nav class="navbar navbar-expand-lg navbar-light justify-content-center p-0 m-0">
            <div class="row justify-content-around align-items-center">
                <div class="col-sm-12">
                    <a class="navbar-brand" href="/"><img class="logo" src="{{ asset('Files/image/TGRmainlogo.png') }}"
alt=""/></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
</div>
</div>
</nav>

<div class="row justify-content-around pl-5 ml-5">
    <div class="col-md-auto">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse py-0 my-0" id="navbarSupportedContent">
                <nav class="shift">
                    <ul class="navbar-nav mr-auto text">
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About Us</a>
                        </li>

                        <!-- dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                Shop
                            </a>
                            <nav class="shift">
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="prepacked.html">Pre Packed Boxes</a>
                                    <a class="dropdown-item" href="/custombox">Make your own Box</a>
                                </div>
                            </nav>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="monthlybox.html" aria-disabled="true">Monthly Box</a>
                        </li>

                        <!-- dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <nav class="shift">
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/corporate">Corporate</a>
                                    <a class="dropdown-item" href="/wedding">Wedding</a>
                                    <a class="dropdown-item" href="/otheroccasions">All Other Occasions</a>
                                    <a class="dropdown-item" href="/giftcard">Gift Card</a>
                                </div>
                            </nav>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contactus" aria-disabled="true">Contact Us</a>
                        </li>
                    </ul>
                </nav>
                <div class="extrabuttons col-auto pt-2 mt-2 pr-0 mr-0">
                    <nav>
                        <div class="navbar-nav">
                            <nav class="shift">
                                <ul class="navbar-nav mr-auto text">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="{{route('log')}}" id="navbarDropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false">
                                            <ion-icon name="person"></ion-icon>
                                        </a>
                                        <nav class="shift">
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="/index">Profile</a>
                                                <a class="dropdown-item" href="#">MY orders</a>
                                                <a class="dropdown-item" href="#">Change password</a>
                                                <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                                            </div>
                                        </nav>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/wishlist">
                                            <ion-icon name="heart-empty"></ion-icon>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('cart')}}">
                                            <ion-icon name="cart"></ion-icon>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </nav>
                </div>
            </div>
        </nav>
    </div>
</div>
</div>



