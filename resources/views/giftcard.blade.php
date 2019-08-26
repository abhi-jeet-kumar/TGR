@extends('layouts.thegoodroad')
@section('content')
<div class="row corporatetop">
    <div class="col"><img src="{{asset('Files/Image/giftcard.jpg')}}" alt="" /></div>
</div>

<div class="container my-5 py-5">
    <div class="row justify-content-center align-items-start">
        <div class="col-sm-12 col-md-6 col-lg-4" style="border: 3px solid #64ebea">
            <p class="d-1 text-center" style="border-bottom: 3px solid #64ebea">HOW TO REDEEM</p>
            <p class="text-center">Redeeming a Gift Card or voucher is really simple.</p>
            <p class="text-center"><b>Just follow these steps:</b></p>
            <p class="text-center"><b>Step 1:</b> Select the products you would like to purchase.</p>
            <p class="text-center"><b>Step 2:</b> Add it to your shopping cart.</p>
            <p class="text-center"><b>Step 3:</b> When you are done shopping, continue to checkout</p>
            <p class="text-center"><b>Step 4:</b> Enter your Gift Card code number in the Gift Card section of checkout. Your total will be recalculated.</p>
            <p class="text-center"><b>Step 5:</b> If there is any remaining balance to be paid, enter your payment details and proceed with the remainder of checkout.</p>
            <p class="text-center"><b>You can either send the email Gift Card to the recipient directly</b></p>
            <p class="text-center">
                <b>
                    or
                    <br />
                    You can get email Gift Card on your personal email and then print it and gift it yourself to whoever you want to.
                </b>
            </p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-8">
            <span class="mx-2">
                <p style="border-bottom: 3px solid #64ebea">Send A gift Card</p>
                <div class="input-group flex-nowrap">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">Enter Amount*</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Amount in INR" aria-label="Amount" aria-describedby="addon-wrapping" />
                </div>
            </span>
            <span class="mx-2">
                <p style="border-bottom: 3px solid #64ebea">Add Your Message</p>
                <div class="input-group flex-nowrap py-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">To*</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Reciever's Name" aria-label="name" aria-describedby="addon-wrapping" />
                </div>
                <div class="input-group-prepend py-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">From*</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Your Name" aria-label="name" aria-describedby="addon-wrapping" />
                </div>
            </span>
            <span class="mx-2">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Leave A Message</span>
                    </div>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
            </span>

            <span class="mx-2">
                <p style="border-bottom: 3px solid #64ebea">Enter Delivery Details</p>
                <div class="input-group flex-nowrap py-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">Your Email*</span>
                    </div>
                    <input type="text" class="form-control" placeholder="" aria-label="email" aria-describedby="addon-wrapping" />
                </div>
                <div class="input-group flex-nowrap py-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">Recipient's Email*</span>
                    </div>
                    <input type="text" class="form-control" placeholder="" aria-label="email" aria-describedby="addon-wrapping" />
                </div>
            </span>

            <span class="mx-1"> <input type="checkbox" /> Recipient and Sender are Same </span>
            <br />
            <span class="my-4">
                <button type="button" class="btn btn-success">Success</button>
            </span>
        </div>
    </div>
</div>
@endsection