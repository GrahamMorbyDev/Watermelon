@extends('layouts.open')

@section('content')

    <!--Header -->
    <div class="container-fluid parallax-window parallax-block" data-parallax="scroll" data-image-src="{{asset("images/header.png")}}">
        <h1 class="parallaxTitle">Customs</h1>
    </div>
    <!-- header finish -->

    <!-- Wording for page -->
    <div class="container globalPadding text-center">
        <div class="row">
            <div class="col-md-12">
                <h1>Customs</h1>
                <hr>
                <h2>Etiam placerat risus pellentesque augue sodales porttitor sit amet id sem. Nulla sit
                    amet tempus ligula. Fusce maximus nunc vel luctus malesuada. Fusce cursus nec nibh
                    in sollicitudin.</h2>
                <div class="col-md-8 col-md-offset-2">
                    <img src="{{URL::asset('images/placeholderTwo.jpg')}}" alt="Placeholder" class="img-responsive greyImage">
                </div>
            </div>
        </div>
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
                </div>
        </div>
    </div>
    <!-- wording finish -->

@endsection
