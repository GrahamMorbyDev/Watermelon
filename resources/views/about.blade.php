@extends('layouts.open')

@section('content')

    <!--Header -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/header.jpeg")}}"
         style="height: 400px; margin-top: -25px;">
    </div>
    <!-- header finish -->

    <!-- Info to start -->
    <div class="container globalPadding">
        <div class="row">
            <div class="col-lg-12 text-center">
                <img src="images/logo.png" alt="Watermelon">
                <hr>
                <h1>About Us</h1>
                <p>Like Mr King said way back in 1963 we had a dream, a wonderful dream to create a simple solution to deliver content
                    to users on a platform that's easy to use and wonderful to navigate. To be able to give high definition video and flawless images
                    the right treatment and have subscribers world wide enjoy the the premium only you can offer.</p>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{URL::asset('images/graham.png')}}" alt="" class="img-responsive center-block">
                    </div>
                    <div class="col-lg-6">
                        <img src="{{URL::asset('images/scott.png')}}" alt="" class="img-responsive center-block">
                    </div>
                </div>
                <hr>
                <p>We are wonderful developers who want to change the world with our Watermelon app. We have an extensive knowledge of front and back
                    end development along with server administration.</p>
            </div>
        </div>
    </div>
    <!-- Info to start finish -->

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