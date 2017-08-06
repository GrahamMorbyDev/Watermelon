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
                <img src="images/logo.png" alt="Watermelon" class="img-responsive">
                <hr>
                <h1>So you need a Membership service?</h1>

                <p>Are you a producer of content? a provider of a service? or your just looking to give premium services
                    to a wide audience. But you have no real developer experience! Then welcome my friends to
                    Watermelon</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
                <div class="col-md-3 notice dark text-center">
                    <h1 class="fa fa-user-circle-o"></h1>
                    <p>We make users</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
                             aria-valuenow="70"
                             aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 notice light text-center">
                    <h1 class="fa fa-play-circle-o"></h1>
                    <p>Upload full HD videos</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                             aria-valuenow="70"
                             aria-valuemin="0" aria-valuemax="200" style="width:100%">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 notice dark text-center">
                    <h1 class="fa fa-picture-o "></h1>
                    <p>Zip style image sets</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
                             aria-valuenow="70"
                             aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 notice light text-center">
                    <h1 class="fa fa-newspaper-o "></h1>
                    <p>Fully working Blog</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                             aria-valuenow="70"
                             aria-valuemin="0" aria-valuemax="200" style="width:100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Info to start finish -->

    <!-- Middle Parallax -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/middle.jpeg")}}"
         style="height: 400px; margin-top: 20px;">
    </div>
    <!-- Middle End -->

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

    <!-- Simple statement -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <hr>
                <h1>You need it to be easy!</h1>
                <div class="col-md-6 text-left">
                    <p>With our easy to use interface and knowledge of knowing exactly what you need, we have built an
                        app
                        that give you the ability to just worry about your content and users!</p>
                    <img src="images/adminpanel.png" alt="Watermelon Admin Panel" class="img-responsive">
                </div>
                <div class="col-md-6 text-left">
                    <p>Uploading content should be a walk in the park? It should just happen and you should be more
                        worried about creating it, rather than fighting to put it up on your site.</p>
                    <img src="images/videoupload.png" alt="Watermelon Admin Panel" class="img-responsive">
                </div>
            </div>
        </div>
        <!-- Simple end -->
@endsection
