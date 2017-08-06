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
                <h1>What we do</h1>
                <p>We have served the web industry for years and noticed a few things! Firstly there are so many tools available its hard
                to understand which one will work for your business and your app. Second, how hard can it be to get a simple solution that does'nt
                hurt your head or your wallet and thirdly why can't they all be simple.</p>
                <p>So we decided to build one! A simple app that works for hosting content! For getting all your hard work on a platform where your premium customers
                can enjoy it.</p>
                <hr>
            </div>
            <div class="col-lg-12">
                <h3>Image and Video's</h3>
                <p>Watermelon hosts Video's and Image's with ease! A simple to use upload system and management tools to have all your content in
                    one simple place. Video's output to 1080p and Watermelon can deal with MP4 files all the way up to 1gb.</p>
                <h3>Ecommerce</h3>
                <p>Coming Very Soon</p>
                <h3>DMCA Piracy</h3>
                <p>Coming Very Soon</p>
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
