@extends('layouts.open')

@section('content')
    <!--Header -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/header.jpg")}}"
         style="height: 700px; margin-top: -25px;">
    </div>
    <!-- header finish -->
<div class="container">
    <div class="row">
        <div class="col-md-12 globalPadding">
            <div class="col-md-8 col-md-offset-2">
                <img src="{{URL::asset('images/comingsoon.jpg')}}" alt="Coming Soon" class="img-responsive">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <a href="{{URL::asset('blog')}}" class="btn btn-success center-block">Until then read our blog</a>
        </div>
    </div>
</div>
@endsection