@extends('layouts.open')

@section('content')

    <!--Header -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/enter.jpg")}}"
         style="height: 400px; margin-top: -25px;">
    </div>
    <!-- header finish -->

    <!-- Info to start -->
    <div class="container globalPadding">
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <div class="col-md-6">
                <h1>Greetings!</h1>
                <p>Greetings bondage enthusiasts and other fetish aficionados! Here at Superbound we seek to
                    provide you with a unique kinky viewing experience. At Superbound you will find a
                    multitude of beautiful women in various forms of bondage for your entertainment.
                    Superbound's unique style incorporates many elements of genre fiction and comic books
                    as well as other scifi, horror and fantasy elements and blends them with damsel in
                    distress bondage with a decidedly more physical emphasis! Within the Superbound
                    universe exists a dystopian world where the bad guys win (or at least get the upper
                    hand and play out their twisted thrills!) and subject gorgeous ladies to restrictive
                    bondage while fondling their luscious bodies and more! All in good fun, these fantasies
                    will transport you to a world of base carnal desires as various mighty superheroines,
                    intrepid reporters, brave sleuths and other gorgeous babes are captured, bound, gagged
                    and toyed with by supervillains, crooks, slavers and other evil characters! So leave reality
                    behind and enter the twisted bondage realm of Superbound!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Info to start finish -->

    <!-- Middle Parallax -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/about.jpg")}}"
         style="height: 400px; margin-top: 20px;">
    </div>
    <!-- Middle End -->

    <!-- Nice Links -->
    <div class="container">
        <div class="row">
        <hr>
        <div class="col-md-3 text-center">
            <a href="{{URL::asset('about')}}">
                <img class="img-responsive" src='{{URL::asset('images/aboutBW.jpg')}}'
                     onmouseover="this.src='{{URL::asset('images/aboutc.jpg')}}';",
                     onmouseout="this.src='{{URL::asset('images/aboutBW.jpg')}}';" />
            </a>
            </a>
        </div>
        <div class="col-md-3 text-center">
            <a href="{{URL::asset('register')}}">
                <img class="img-responsive" src='{{URL::asset('images/memBW.jpg')}}'
                     onmouseover="this.src='{{URL::asset('images/memC.jpg')}}';"
                     onmouseout="this.src='{{URL::asset('images/memBW.jpg')}}';" />
            </a>
        </div>
        <div class="col-md-3 text-center">
            <a href="{{URL::asset('faq')}}">
                <img class="img-responsive" src='{{URL::asset('images/faqBW.jpg')}}'
                     onmouseover="this.src='{{URL::asset('images/faqC.jpg')}}';"
                     onmouseout="this.src='{{URL::asset('images/faqBW.jpg')}}';" />
            </a>
            </a>
        </div>
        <div class="col-md-3 text-center">
            <a href="https://www.clips4sale.com/studio/8178/superbound/Cat4-BONDAGE#startingpoint" target="_blank">
                <img class="img-responsive" src='{{URL::asset('images/c4sBW.jpg')}}'
                     onmouseover="this.src='{{URL::asset('images/c4sC.jpg')}}';"
                     onmouseout="this.src='{{URL::asset('images/c4sBW.jpg')}}';" />
            </a>
            </a>
        </div>
        <hr>
    </div>
    </div>
    <!-- End of Nice Links -->

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