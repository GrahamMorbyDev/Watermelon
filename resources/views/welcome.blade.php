@extends('layouts.open')

@section('content')

    <!--Header -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/header.png")}}"
         style="height: 400px; margin-top: -25px;">
        <h1 class="parallaxTitle">Welcome</h1>
    </div>
    <!-- header finish -->

    <!-- Info to start -->
    <div class="container globalPadding">
        <div class="row">
            <!-- Top Strip -->
            <div class="col-lg-12 text-center">
                <hr>
                <div class="col-md-4">
                    <img src="{{URL::asset('images/placeholder.jpg')}}" alt="Placeholder" class="img-responsive greyImage">
                    <h2>About us</h2>
                    <p>Lorem Ipsum has been the industry's standard</p>
                    <a href="#" class="btn btn-success">Read More</a>
                </div>
                <div class="col-md-4">
                    <img src="{{URL::asset('images/placeholder.jpg')}}" alt="Placeholder" class="img-responsive greyImage">
                    <h2>Membership Options</h2>
                    <p>Lorem Ipsum has been the industry's standard</p>
                    <a href="#" class="btn btn-success">Read More</a>
                </div>
                <div class="col-md-4">
                    <img src="{{URL::asset('images/placeholder.jpg')}}" alt="Placeholder" class="img-responsive greyImage">
                    <h2>Store</h2>
                    <p>Lorem Ipsum has been the industry's standard</p>
                    <a href="#" class="btn btn-success">Read More</a>
                </div>
            </div>
            <!-- End of top-strip -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
                    <div class="col-md-8 col-md-offset-2">
                        <img src="{{URL::asset('images/placeholderTwo.jpg')}}" alt="Placeholder" class="img-responsive greyImage">
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <hr>
                <h1>What is Lorem Ipsum?</h1>
            </div>
        </div>
    </div>
    <!-- Info to start finish -->

    <!-- Banners Bottom -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 boxPadding">
                <div class="col-md-6">
                    <img src="{{URL::asset('images/placeholder.jpg')}}" alt="Placeholder" class="img-responsive greyImage">
                </div>
                <div class="col-md-6">
                    <h2>What is Lorem Ipsum?</h2>
                    <p>Aenean nec lectus turpis. Pellentesque commodo, lectus eget mollis volutpat, tortor lorem tincidunt arcu,
                        at mollis est augue eget justo. Aliquam erat volutpat. Phasellus ex tellus, cursus in lorem a, sagittis
                        aliquet odio. Fusce sodales est ante, eu tristique tellus aliquet vitae. Duis arcu quam, dictum luctus
                        lorem quis, viverra vestibulum justo. Donec a porttitor est, nec vestibulum ipsum. Sed sem nisi,
                        faucibus rhoncus feugiat nec, porta sed erat. Suspendisse rutrum cursus odio eget suscipit. Praesent
                        posuere at augue ac porttitor. Cras mattis arcu et erat molestie, dapibus luctus nunc accumsan.
                        Etiam scelerisque enim lacinia elit pretium, tristique aliquam felis consequat. Vestibulum
                        non sem aliquam, volutpat sem vestibulum, tempus libero. Ut nulla dolor, facilisis et euismod id,
                        aliquet nec nibh. Aliquam rhoncus leo ac nunc luctus varius.</p>
                    <a href="#" class="btn btn-success">Something here</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 boxPadding">
                <div class="col-md-6">
                    <h2>What is Lorem Ipsum?</h2>
                    <p>Aenean nec lectus turpis. Pellentesque commodo, lectus eget mollis volutpat, tortor lorem tincidunt arcu,
                        at mollis est augue eget justo. Aliquam erat volutpat. Phasellus ex tellus, cursus in lorem a, sagittis
                        aliquet odio. Fusce sodales est ante, eu tristique tellus aliquet vitae. Duis arcu quam, dictum luctus
                        lorem quis, viverra vestibulum justo. Donec a porttitor est, nec vestibulum ipsum. Sed sem nisi,
                        faucibus rhoncus feugiat nec, porta sed erat. Suspendisse rutrum cursus odio eget suscipit. Praesent
                        posuere at augue ac porttitor. Cras mattis arcu et erat molestie, dapibus luctus nunc accumsan.
                        Etiam scelerisque enim lacinia elit pretium, tristique aliquam felis consequat. Vestibulum
                        non sem aliquam, volutpat sem vestibulum, tempus libero. Ut nulla dolor, facilisis et euismod id,
                        aliquet nec nibh. Aliquam rhoncus leo ac nunc luctus varius.</p>
                    <a href="#" class="btn btn-success">Something here</a>
                </div>
                <div class="col-md-6">
                    <img src="{{URL::asset('images/placeholder.jpg')}}" alt="Placeholder" class="img-responsive greyImage">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 boxPadding">
                <div class="col-md-6">
                    <img src="{{URL::asset('images/placeholder.jpg')}}" alt="Placeholder" class="img-responsive greyImage">
                </div>
                <div class="col-md-6">
                    <h2>What is Lorem Ipsum?</h2>
                    <p>Aenean nec lectus turpis. Pellentesque commodo, lectus eget mollis volutpat, tortor lorem tincidunt arcu,
                        at mollis est augue eget justo. Aliquam erat volutpat. Phasellus ex tellus, cursus in lorem a, sagittis
                        aliquet odio. Fusce sodales est ante, eu tristique tellus aliquet vitae. Duis arcu quam, dictum luctus
                        lorem quis, viverra vestibulum justo. Donec a porttitor est, nec vestibulum ipsum. Sed sem nisi,
                        faucibus rhoncus feugiat nec, porta sed erat. Suspendisse rutrum cursus odio eget suscipit. Praesent
                        posuere at augue ac porttitor. Cras mattis arcu et erat molestie, dapibus luctus nunc accumsan.
                        Etiam scelerisque enim lacinia elit pretium, tristique aliquam felis consequat. Vestibulum
                        non sem aliquam, volutpat sem vestibulum, tempus libero. Ut nulla dolor, facilisis et euismod id,
                        aliquet nec nibh. Aliquam rhoncus leo ac nunc luctus varius.</p>
                    <a href="#" class="btn btn-success">Something here</a>
                </div>
             </div>
        </div>
    </div>
    <!-- Banners Bottom end -->




@endsection
