@extends('layouts.open')

@section('content')

    <!--Header -->
    <div class="container-fluid parallax-window parallax-block" data-parallax="scroll" data-image-src="{{asset("images/header.png")}}">
        <h1 class="parallaxTitle">About Us</h1>
    </div>
    <!-- header finish -->

    <!-- Info to start -->
    <div class="container globalPadding">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>About {{ config('app.name', 'Placeholder') }}</h1>
                <hr>
                <div class="col-md-8 col-md-offset-2">
                    <img src="{{URL::asset('images/placeholderTwo.jpg')}}" alt="Placeholder" class="img-responsive greyImage">
                </div>
            </div>
        </div>
        <!-- End of Info to start -->

        <!-- About Wording -->
        <div class="row">
            <div class="col-md-12 boxPadding">
                <p>Etiam placerat risus pellentesque augue sodales porttitor sit amet id sem. Nulla sit amet tempus ligula.
                    Fusce maximus nunc vel luctus malesuada. Fusce cursus nec nibh in sollicitudin. Nulla massa leo,
                    sollicitudin sed dolor non, bibendum mollis enim. Sed ut metus blandit, interdum elit eu, vulputate
                    purus. Suspendisse ut nisi sit amet erat efficitur semper. Nullam dignissim magna consectetur,
                    malesuada sem porttitor, convallis enim. Aenean vel vulputate mi.</p>
                <p>Aenean nec lectus turpis. Pellentesque commodo, lectus eget mollis volutpat, tortor lorem tincidunt arcu,
                    at mollis est augue eget justo. Aliquam erat volutpat. Phasellus ex tellus, cursus in lorem a, sagittis
                    aliquet odio. Fusce sodales est ante, eu tristique tellus aliquet vitae. Duis arcu quam, dictum luctus
                    lorem quis, viverra vestibulum justo. Donec a porttitor est, nec vestibulum ipsum. Sed sem nisi, faucibus
                    rhoncus feugiat nec, porta sed erat. Suspendisse rutrum cursus odio eget suscipit. Praesent posuere at
                    augue ac porttitor. Cras mattis arcu et erat molestie, dapibus luctus nunc accumsan. Etiam scelerisque
                    enim lacinia elit pretium, tristique aliquam felis consequat. Vestibulum non sem aliquam, volutpat sem
                    vestibulum, tempus libero. Ut nulla dolor, facilisis et euismod id, aliquet nec nibh. Aliquam rhoncus
                    leo ac nunc luctus varius.</p>
                <p>Quisque mollis sagittis metus id mollis. Duis fringilla urna id urna blandit, id mattis felis rutrum.
                    Etiam eu tortor dignissim, consectetur nunc sed, rutrum odio. Pellentesque habitant morbi tristique
                    senectus et netus et malesuada fames ac turpis egestas. Etiam venenatis nisl at condimentum vestibulum.
                    In eleifend imperdiet mattis. Aenean tristique lectus vel mauris auctor, quis dignissim nisi convallis.
                    Nunc tincidunt id leo a blandit. Praesent quis ornare lorem, id lacinia nibh.</p>
                <p>Phasellus maximus nisl nunc. Vestibulum fermentum fermentum sapien. Nunc lobortis augue ac molestie cursus.
                    Nulla ornare massa quis urna pulvinar, et fringilla justo molestie. Sed aliquet massa in tristique accumsan.
                    Pellentesque posuere turpis et ex blandit eleifend. Sed id nibh tortor. Quisque convallis augue hendrerit
                    gravida convallis. Morbi eu eleifend nulla. Nulla sed consectetur nisl. Fusce dictum tempus ex, et tincidunt
                    purus congue imperdiet. Sed purus purus, ultrices vitae est at, dictum convallis odio. Fusce iaculis maximus
                    ipsum vitae ornare. Ut laoreet tincidunt ex, euismod rutrum lectus egestas vitae. Aenean facilisis sit amet
                    quam sodales blandit.</p>
            </div>
        </div>
    </div>
    <!-- About wording End -->
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
