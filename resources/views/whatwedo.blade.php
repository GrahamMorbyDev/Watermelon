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
            <div class="col-lg-12 text-center">
                <hr>
                <img src="images/customs.jpg" alt="Superbound Customs">
                <hr>
                <h1>Customs</h1>
                <p>Superbound thrives on fan custom requests! If you have ever dreamed of getting a video made to your
                    specifications involving beautiful women in bondage, then you've come to the right place. Custom
                    video requests are welcome and are always a priority and done as quickly as possible. You are only
                    charged for the cost of the model's time (and potentially other incremental costs)! Many of the
                    models featured are available as well as legions of new models of all types, shapes and sizes!</p>

                    <p>If you are interested in a custom video, please direct your inquiries to: johnny.d.fetish@gmail.com.</p>
                <hr>
            </div>
        </div>
    </div>
    <!-- Info to start finish -->

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
                    <a href="{{URL::asset('#')}}">
                        <img class="img-responsive" src='{{URL::asset('images/membershipBW.jpg')}}'
                             onmouseover="this.src='{{URL::asset('images/membershipC.jpg')}}';"
                             onmouseout="this.src='{{URL::asset('images/membershipBW.jpg')}}';" />
                    </a>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="{{URL::asset('#')}}">
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