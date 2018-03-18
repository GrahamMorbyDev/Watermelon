@extends('layouts.open')

@section('content')

    <!--Header -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/enter.jpg")}}"
         style="height: 400px; margin-top: -25px;">
    </div>
    <!-- header finish -->

    <!-- Contact Us Form -->
    <div class="container globalPadding">
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <img src="images/slider2.JPG" class="center-block" alt="Watermelon">
                <hr>
                <h1>Contact Us</h1>
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form method="post" action="{{URL::asset('contact-us')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" rows="9" name="message" placeholder="Your message goes here....."></textarea>
                    </div>


                    <button type="submit" class="btn btn-warning">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End of Contact Form -->

    <!-- access links -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <hr>
                <h1>Membership Access & and other purchasing options</h1>
                <p>Superbound.com is a membership site that updates twice a week with brand new videos as well as a
                    multitude of still images. As time passes more and more videos and images will accumulate with
                    videos generally being retired after 3 months (but still available at Superbound CS4).
                    Membership does have its privileges!
                </p>
            </div>
        </div>
        <div class="row">
            <hr>
            <div class="col-md-12">
                <div class="col-md-6">
                    <a href="{{URL::asset('register')}}">
                        <img class="img-responsive" src='{{URL::asset('images/membershipBW.jpg')}}'
                             onmouseover="this.src='{{URL::asset('images/membershipC.jpg')}}';"
                             onmouseout="this.src='{{URL::asset('images/membershipBW.jpg')}}';" />
                    </a>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="https://www.clips4sale.com/studio/8178/superbound/Cat4-BONDAGE#startingpoint" target="_blank">
                        <img class="img-responsive" src='{{URL::asset('images/shopBW.jpg')}}'
                             onmouseover="this.src='{{URL::asset('images/shopC.jpg')}}';"
                             onmouseout="this.src='{{URL::asset('images/shopBW.jpg')}}';" />
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- End of access links -->
@endsection