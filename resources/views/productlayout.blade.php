 @extends('layouts.thegoodroad')
@section('content')

@foreach($data as $prod)
<form name="addtocartform" id="addtocartform" action="{{route('addtocart')}}" method="post">
{{csrf_field()}}
<input type="hidden" name="id" value="{{$prod->id}}">

<input type="hidden" name="Product_Name" value="{{$prod->Product_Name}}">

<input type="hidden" name="Brand" value="{{$prod->Brand}}">

<input type="hidden" name="Price" value="{{$prod->Price}}">

<input type="hidden" name="Category" value="{{$prod->Category}}">

<input type="hidden" name="Description" value="{{$prod->Description}}">

<input type="hidden" name="Note" value="{{$prod->Note}}">

<input type="hidden" name="Material" value="{{$prod->Material}}">

<div class="container pt-5 mt-5">
    <div class="row jsutify-content-center">
        <div class="col-12">
            <p class="text-center main-text">{{$prod->Product_Name}}</p>
        </div>
    </div>
    <div class="row jsutify-content-center">
        <div class="col-12">
            <p class="text-center sub-text">{{$prod->Brand}}</p>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-sm-12 col-md-6">
            <img class="product-description-image" src="{{asset('files/image/pastelvibrancenotebook.jpg')}}" alt="">
        </div>
        <div class="about-product col-sm-12 col-md-6">
            <ul>
                <li>
                    <p class="product-price" >₹<span class="price">{{$prod->Price}}</span>.00</p>
                </li>
                <li name="Product_Name">
                    <p class="description">{{$prod->Description}}.</p>
                </li>
                <li>
                    <p class="specification"><b>Specifications</b> -{{$prod->Note}}</p>
                </li>
                <li>
                    <p class="note"><b>Note</b>-0</p>
                </li>
                <li>
                    <div class="row justify-content-around">
                        <div class="col-6">
                            <h4 class="mb-5" style="border-bottom:1px solid black; width: 120%">Choose Quantity</h4>
                        </div>
                        <div class="col-6">
                            <div class="plusminus horiz">
                                <button class="minus">-</button>
                                <input class="productQty" type="number" name="productQty" />
                                <button class="plus">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-1"><a href="#"><ion-icon name="heart-empty"></ion-icon></a></div>
                        <div class="col-1"><a href="{{route('addtocart')}}"><button type="submit"><ion-icon name="cart"></ion-icon></button></a></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endforeach
@endsection 

