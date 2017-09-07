@extends('layouts.open')

@section('content')

    <!--Header -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/header.jpeg")}}"
         style="height: 400px; margin-top: -25px;">
    </div>
    <!-- header finish -->

    <!-- Contact Us Form -->
    <div class="container globalPadding">
        <div class="row">
            <div class="col-lg-12">
                <img src="images/logo.png" alt="Watermelon">
                <hr>
                <h1>Contact Us</h1>
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
            </div>
        </div>
    </div>
    <!-- End of Contact Form -->

    <!-- Simple Pricing -->
    <div class="container">
        <div class="row">
            <hr>
            <div class="col-sm-12 text-center">
                <h1>Simple Pricing</h1>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="table-columns">
                        <ul class="price">
                            <li class="header">Basic</li>
                            <li class="grey">$ 99.99 / Month</li>
                            <li>40GB Storage</li>
                            <li>up to 40 Videos and Image sets</li>
                            <li>FREE Domains</li>
                            <li>1TB Transfer</li>
                            <li>1000 Media Plays</li>
                            <li>$299 Set Up Fee</li>
                            <li class="grey"><a href="#" class="btn btn-success">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="table-columns">
                        <ul class="price">
                            <li class="header bg-green">Pipped</li>
                            <li class="grey">$ 199.99 / Month</li>
                            <li>80GB Storage</li>
                            <li>Upto 60 Videos and Image sets</li>
                            <li>FREE Domains</li>
                            <li>5TB Transfer</li>
                            <li>5000 Media Plays</li>
                            <li>$249 Set up fee</li>
                            <li class="grey"><a href="#" class="btn btn-success">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="table-columns">
                        <ul class="price">
                            <li class="header">Seedless</li>
                            <li class="grey">$ 299.99 / Month</li>
                            <li>160GB Storage</li>
                            <li>Upto 100 Videos and Image sets</li>
                            <li>FREE Domains</li>
                            <li>6TB Transfer</li>
                            <li>6000 Media Plays</li>
                            <li>$199 Set up fee</li>
                            <li class="grey"><a href="#" class="btn btn-success">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Simple Pricing end -->

    <!-- Buy Package -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <div class="col-lg-6">
                    <h1>So you know your way around code?</h1>
                    <p>You have your own domain? your own server? Why not just buy our package to use for yourself.
                        Fully white labelled and for you to use and customize in your own unique way.</p>
                </div>
                <div class="col-lg-6 text-center">
                    <a href="#" class="btn btn-success" style="margin-top: 90px;"><span class="fa fa-phone-square"> </span> Contact us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Buy Package end -->
@endsection