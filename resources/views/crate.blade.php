@extends('layouts.open')
@section('title', 'The Crate - Retro Gamer Crate')
@section('description', 'Ever wanted a box full of Retro Games delivered to your door on a monthly basis? Just a blind box to
                    add to your collection so you can build out the fun? Now you can with the Retro Gamer Crate.')
@section('content')

    <!-- Info to start -->
    <div class="container globalPadding">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="col-md-8 col-lg-offset-2">
                    <img src="{{URL::asset('images/cratetitle.png')}}" alt="Welcome to the Retro News" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
    <!-- header finish -->
    <!-- Info to start -->
    <div class="container globalPadding">


        <div class="row">
            <div class="col-md-12">
                <h2>The Retro Gamer Crate</h2>
                <p>Ever wanted a box full of Retro Games delivered to your door on a monthly basis? Just a blind box to
                    add to your collection so you can build out the fun? Now you can with the Retro Gamer Crate. We have
                    an abundance of Retro Carts and Boxed games from all over the world that can be yours if you join up to
                    this service.</p>
                <p>We test and clean everygame that comes through our door which allows you to get the best version
                or cart to pop in your machine and if you need a machine, we have them too. Also you will get some snacks to pig out
                on as you place and some cool gaming items to make this box a must for any retro gaming fan. We love NTSC carts
                and will also have converters should you require one. </p>
                <p>Launching in January 2019 | Orders start December 2018</p>

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

        {{--Games row--}}
        <div class="row">
            <div class="col-md-12">
                <h1>Game Database</h1>
            </div>
        </div>
        <div class="row globalPadding">
            <div class="col-md-12">
                @foreach ($game as $games)
                    <div class="col-md-2 text-center gameView">
                        @if(isset($games->cover))
                            <img src="{{$games->cover->url}}" alt="{{ $games->name}}" class="img-responsive center-block" width="100%">
                        @endif
                        <p>{{ $games->name}}</p>
                        <form action="{{URL::asset('get/single/game')}}" method="post">
                            {!! csrf_field() !!}
                            <input type="hidden" id="id" name="id" value="{{$games->id}}">
                            <button class="btn btn-default" type="submit">View More</button>
                        </form>
                    </div>
                @endforeach

            </div>
        </div>
        {{--End of game row--}}

        {{--Search box --}}
        <div class="row searchbox globalPadding">
            <div class="col-md-12">
                <form action="{{URL::asset('search/game')}}" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <input type="text" class="form-control" id="game" name="game" placeholder="Search Our Database">
                    </div>
                    <button class="btn btn-default center-block" type="submit">Search</button>
                </form>
            </div>
        </div>
        {{--End of search box --}}
    </div>
    <!-- End of access links -->

@endsection