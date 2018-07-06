@extends('layouts.open')

@section('content')

    <!--Header -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/enter.jpg")}}"
         style="height: 600px; margin-top: -25px;">
    </div>
    <!-- header finish -->

    <!-- Info to start -->
    <div class="container globalPadding">
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <div class="col-md-8">
                    <h1>Welcome to TabooMindi.xxx</h1>
                    <p>Welcome to Taboo Mindi, the home of the hottest Mom on the planet.
                        Join Mindi as she tries to get through her daily life trying hard not
                        to make the mistakes a stepmom shouldn't. But when your Mindi its a
                        very tough ask, she has to make sure her young stepfamily do as they
                        say and she will make sure by using any means necessary. </p>
                    <p>Taboo Mindi is a place to live out your Mommy fantasies.
                        Join as she teaches you and many others how to be a big boy!
                        And no mommy is as hot as Mindi. She will have you coming
                        back for more time and time again!</p>
                    <p>You will have access to an array of content from short videos to
                        full-length video clips all showcasing how Mindi struggles
                        daily being Stepmom! You will also get various still images
                        from various video shoots. Full photo sets that you can enjoy
                        time and time again.</p>
                    <p>All content and mentions of Mother, Step Mother, Mom, Mommy and Son,
                        Daughter or any any other family member relationship are acted out
                        in pure fantasy. At no time are two blood-related members of a family
                        having any sexual interactions or intercourse. Thus, these are pure,
                        tongue in cheek adventuristic fantasy scenarios, without exception fully
                        consensual, contextual.</p>
                    <a href="#" class="btn btn-success center-block">Join Today</a>
                </div>
                <div class="col-md-4">
                    <img src="{{URL::asset('images/home3.jpg')}}" alt="Welcome to Taboo Mindi" class="img-responsive">
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
                    <img class="img-responsive" src='{{URL::asset('images/aboutc.jpg')}}'/>
                </a>
                <h2>About</h2>
            </div>
            <div class="col-md-3 text-center">
                <a href="{{URL::asset('register')}}">
                    <img class="img-responsive" src='{{URL::asset('images/memc.jpg')}}'/>
                </a>
                <h2>Membership</h2>
            </div>
            <div class="col-md-3 text-center">
                <a href="{{URL::asset('faq')}}">
                    <img class="img-responsive" src='{{URL::asset('images/faqc.jpg')}}'/>
                </a>
                <h2>FAQ</h2>
            </div>
            <div class="col-md-3 text-center">
                <a href="https://www.clips4sale.com/studio/80433/mindi-mink-s-playhouse" target="_blank">
                    <img class="img-responsive" src='{{URL::asset('images/c4sc.jpg')}}'/>
                </a>
                <h2>Clips 4 Sale</h2>
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
                    <a href="https://www.clips4sale.com/studio/80433/mindi-mink-s-playhouse"
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