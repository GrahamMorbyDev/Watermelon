@extends('layouts.open')
@section('title', 'About - Retro Gamer Crate')
@section('description', 'Welcome to the Retro Zone. A place where you can enjoy all things retro gaming. We are gamers
                            who love the old stuff and collect and write about the classics and the modern era')
@section('content')

    <!-- Info to start -->
    <div class="container globalPadding">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="col-md-8 col-lg-offset-2">
                    <img src="{{URL::asset('images/about.png')}}" alt="Welcome to the Retro News" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
    <!-- header finish -->
    <!-- Info to start -->
    <div class="container globalPadding">


            <div class="row">
                <div class="col-md-12">
                    <h2>About Retro Gamer Crate</h2>
                        <p>Welcome to the Retro Zone. A place where you can enjoy all things retro gaming. We are gamers
                            who love the old stuff and collect and write about the classics and the modern era. Gaming
                            has come a long way since the grand days of the 1980's when the first home console was
                            introduced.</p>
                        <p>We are here to offer a different view and some great products and news. Our store is coming soon and
                        will specialize in NTSC gaming for the UK. We have access to stock from America and will make
                            sure we have some cool items. Along with the store we will also run a monthly subscription service where you
                        can get a box of Retro Games delivered to your door every month.  </p>
                        <p>So sit back and relax and enjoy our little site.</p>

               </div>
            </div>

    </div>
    <!-- Info to start finish -->

    <!-- access links -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6 col-lg-offset-3">
                    <img src="{{URL::asset('images/crate.jpg')}}" alt="Retro Gaming Crate" class="img-responsive">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="row">
                    <div class="col-md-12 text-center" style="margin-bottom: 50px">

                        <hr>
                        <h1>The Next box ships in:</h1>
                        <h1 class="timer" id="demo"></h1>
                        <script>
                            // Set the date we're counting down to
                            var countDownDate = new Date("Jan 1, 2019 00:00:00").getTime();

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


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Latest Video</h1>
                <div class="col-md-6 col-md-offset-3">
                    <iframe width="100%" height="350" src="https://www.youtube.com/embed/KbxHNw5BBnc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection