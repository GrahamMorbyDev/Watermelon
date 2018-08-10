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
                <h1>Subscribe to a plan</h1>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="XS4RA4Z5ZD98Q">
                    <input type="hidden" name="on0" value="">
                    <div class="col-md-6 col-md-offset-3">
                        <select name="os0" class="form-control">
                            <option value="One Month">One Month : £29.99 GBP - monthly</option>
                            <option value="Twelve Month">Twelve Month : £299.99 GBP - yearly</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-md-offset-3">
                        <input type="hidden" name="currency_code" value="GBP">
                        {{--<input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">--}}
                        <br>
                        <button type="submit" name="submit" class="btn btn-success center-block">Subscribe</button>
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                </div>
                </form>
                <hr>
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
@endsection