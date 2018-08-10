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
            <div class="col-lg-12">
                <hr>
                <img src="{{URL::asset('images/logosea.png')}}" alt="NFL Trading Cards" class="center-block">
                    <p>Welcome to NFL Trading Cards, Thanks for stopping by and we hope the site gives you everything
                        you are looking for. So let me introduce us and our service. First and foremost we are Football
                        fans, we are from the UK and we love everything Football. Second, to that, we are also
                        collectors. We love the trading cards and have been collecting for many years.  </p>
                    <p>So why did we start this little site!? Well, we know how hard it is to get some of what we have
                        for sale in the UK and other places around the globe. See the NFL is a global reach sport and we
                        feel it should be easier to get such things as trading cards and hobby items and that's
                        why we decided to give the UK and European fans a little taste of it.</p>
                    <p>That doesn't mean that we don't cater for the US either! I mean seriously we would be crazy
                        not to! All our boxes are posted out of the USA and we have access to all the latest cards
                        and also the old but good stuff.</p>
                    <p>So if your a fan of the game and trading cards then you have come to the right place!
                        Any questions please contact us.</p>
                    <a href="#" class="btn btn-success center-block">Subscribe Today</a>
            </div>
        </div>
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
    <!-- Info to start finish -->

    <!-- Middle Parallax -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/midnfl.jpg")}}"
         style="height: 600px; margin-top: 20px;">
    </div>
    <!-- Middle End -->

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

    <!-- access links -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                {{--<hr>
                <form class="w3-container w3-display-middle w3-card-4 " method="POST" id="payment-form"  action="{{URL::asset('paypal')}}">
                    {{ csrf_field() }}
                    <h2 class="w3-text-blue">Payment Form</h2>
                    <p>Demo PayPal form - Integrating paypal in laravel</p>
                    <p>
                        <label class="w3-text-blue"><b>Enter Amount</b></label>
                        <input class="w3-input w3-border" name="amount" type="text"></p>
                    <button class="w3-btn w3-blue">Pay with PayPal</button></p>
                </form>--}}
            </div>
        </div>
        <div class="row">
            <hr>
            <div class="col-md-12">
                <img class="img-responsive center-block" src='{{URL::asset('images/homeBottom.jpg')}}'/>
            </div>
        </div>
    </div>
    <!-- End of access links -->




@endsection