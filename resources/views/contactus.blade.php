@extends('layouts.thegoodroad')
@section('content')
<div class="container-fluid mx-0 px-0">
    <div class="row">
        <div class="col-12">
            <img class="contactusimg" src="{{asset('Files/Image/contactus.jpg')}}" alt="" />
        </div>
    </div>
</div>

<div class="container my-4 py-4">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <p class="my-3 text-center"><b>Query Form</b></p>
            <form>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Name" />
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Email" />
                    </div>
                </div>
                <div class="form-row my-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Subject" />
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Phone Number" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Enter your message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </form>
            <div class="row justify-content-center align-items-center">
                <div class="col">
                    <button type="button" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <p class="text-center"><b>Send us a message :)</b></p>
            <p class="text-center"><b>Contact: </b>+91-11-4755-7362</p>
            <p class="text-center"><b>Working Hours: </b>Monday to Friday | 11:00am to 6:00pm</p>
            <p class="text-center"><b>Customer Care Inquiry :</b>hello@thegoodroad.in</p>
            <p class="text-center"><b>Brand Collaboration : </b>collaborate@thegoodroad.in</p>
            <br />
            <br />
            <p class="text-center"><b></b>Interested in working with our team to design a custom gifting suite?</p>
            <p class="text-center">Contact us at <b>bulkorder@thegoodroad.in</b> to get started.</p>
        </div>
    </div>
</div>

@endsection