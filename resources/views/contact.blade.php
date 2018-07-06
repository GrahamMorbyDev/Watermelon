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
                <img src="images/about.jpg" alt="Mindi Mink Links" class="img-responsive">
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
                <p>TabooMindi.xxx is a membership site that caters to the Stepmom/Son(Other
                    family stepfamily member) Taboo fantasy. The site will be updated on a
                    fortnightly basis and will be a mixture of still images and videos for
                    you, the member to enjoy. So hit the link below to gain access to this
                    premium exclusive content and enjoy seeing mommy.
                </p>
            </div>
        </div>
        <div class="row">
            <hr>
            <div class="col-md-12">
                <div class="col-md-6 text-center">
                    <a href="{{URL::asset('register')}}">
                        <img class="img-responsive" src='{{URL::asset('images/membershipC.jpg')}}'/>
                    </a>
                    <h2>Membership</h2>
                </div>
                <div class="col-md-6 text-center">
                    <a href="https://mypornboutique.com/mindi-mink.html"
                       target="_blank">
                        <img class="img-responsive" src='{{URL::asset('images/shopC.jpg')}}'/>
                    </a>
                    <h2>Shop</h2>
                </div>
            </div>
        </div>

    </div>
    <!-- End of access links -->
@endsection