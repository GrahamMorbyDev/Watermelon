@extends('layouts.open')

@section('content')
    <!--Header -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/nflheader.jpg")}}"
         style="height: 700px; margin-top: -25px;">
    </div>
    <!-- header finish -->

    <!-- Info to start -->
    <div class="container globalPadding">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Learn More</h1>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <img src="{{URL::asset('images/score18.jpeg')}}" alt="Score 2018 Panini Cards" class="img-responsive">
                    </div>
                    <div class="col-md-8">
                        <h2>How it works</h2>
                        <p>So you collect and like to open blind packs and blind bags. Well imagine for a price of 29.99
                            per month with shipping included you can get 8-9 packs of various booster card packs from
                            various series plus some card collecting needs. You can get Folders, Card Holders, Cases
                            and other such things that sometimes as collectors we don't really think we need until we
                            actually need it. </p>
                        <p>We use Ultra Pro for all our card protection needs and feel they are a cut above the rest
                            and will offer you plenty to protect your collection. We hold Cards by the Major Companies
                            and will also from time to time add in bundles of trade cards and special one-off cards we
                            find when opening for our YouTube channel.</p>
                        <p>So all you need to do to get involved is subscribe and sit back and wait for your box to
                            arrive. We post on the first of each month and all cards are sent out of the USA. You can
                            then grab your cards and unwrap and enjoy. We also sell single packs and other such items
                            in our store. So you have a choice either ask us to ship all at once or have your store
                            orders come out to you straight away.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Info to start finish -->

    <!-- access links -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="row">
                    <div class="col-md-12 text-center" style="margin-bottom: 50px">
                        <hr>
                        <h1>The Next box ships in:</h1>
                        <h1 class="timer" id="demo"></h1>
                        <script>
                            // Set the date we're counting down to
                            var countDownDate = new Date("Sep 1, 2018 15:37:25").getTime();

                            // Update the count down every 1 second
                            var x = setInterval(function() {

                                // Get todays date and time
                                var now = new Date().getTime();

                                // Find the distance between now and the count down date
                                var distance = countDownDate - now;

                                // Time calculations for days, hours, minutes and seconds
                                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                // Display the result in the element with id="demo"
                                document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                                    + minutes + "m " + seconds + "s ";

                                // If the count down is finished, write some text
                                if (distance < 0) {
                                    clearInterval(x);
                                    document.getElementById("demo").innerHTML = "EXPIRED";
                                }
                            }, 1000);
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of access links -->

    <!-- Nice Links -->
    <div class="container">
        <div class="row">
            <hr>
            <div class="col-md-4 text-center flavour">
                <i class="fa fa-check"></i>
                <h1>Pick</h1>
                <p>Grab your box!</p>
            </div>
            <div class="col-md-4 text-center flavour">
                <i class="fa fa-paypal"></i>
                <h1>Pay</h1>
                <p>Secure check out with Paypal to pay for your crate!</p>
            </div>
            <div class="col-md-4 text-center flavour">
                <i class="fa fa-dropbox"></i>
                <h1>Open</h1>
                <p>Bring the hobby to your doorstep and enjoy! </p>
            </div>
        </div>
        <hr>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="col-md-8 col-md-offset-2">
                <a href="#" class="btn btn-success center-block">Subscribe Today</a>
            </div>
        </div>
    </div>
    </div>
    <!-- End of Nice Links -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Latest Video</h1>
                <div class="col-md-6 col-md-offset-3">
                    <iframe width="100%" height="350" src="https://www.youtube.com/embed/qPlm1-ZAhPU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection