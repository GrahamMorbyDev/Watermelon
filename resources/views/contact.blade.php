@extends('layouts.open')

@section('content')

    <!--Header -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/header.png")}}"
         style="height: 400px; margin-top: -25px;">
        <h1 class="parallaxTitle">Contact Us</h1>
    </div>
    <!-- header finish -->

    <!-- Contact Us Form -->
    <div class="container globalPadding">
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h1 class="text-center">Contact Us</h1>
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="email">Enquiry type</label>
                        <select class="form-control">
                            <option>Website</option>
                            <option>Quote</option>
                            <option>Advertising</option>
                            <option>Working with us</option>
                            <option>Themes</option>
                        </select>                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" rows="9" placeholder="Your message goes here....."></textarea>
                    </div>


                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
                <hr>
            </div>
        </div>
    </div>
    <!-- End of Contact Form -->

@endsection
