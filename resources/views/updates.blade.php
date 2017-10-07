@extends('layouts.open')

@section('content')
    <!--Header -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/enter.jpg")}}"
         style="height: 400px; margin-top: -25px;">
    </div>
    <!-- header finish -->
    <div class="container globalPadding">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Updates</h1>
                <hr>
                <h2>Look at our latest updates to our ever growing membership library</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h1>Videos</h1>
                @foreach($videos as $video)
                    <div class="col-md-4 text-center">
                        <h3>{{$video->title}}</h3>
                        <img src="{{URL::asset("storage/" . $video->featuredimage)}}" alt="" class="img-responsive">
                        <hr>
                        <a href="{{URL::asset('/subscribe')}}" class="btn btn-success center-block">Join Today</a>
                        <br>
                    </div>
                @endforeach
            </div>
            {{$videos->links()}}
        </div>
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h1>Images</h1>
                @foreach($images as $image)
                    <div class="col-md-4 text-center">
                        <h2>{{$image->setname}}</h2>
                        <img src="{{URL::asset("storage/" . $image->name)}}" alt="" class="img-responsive">
                        <hr>
                        <div class="btn-group">
                            <a href="{{URL::asset('/subscribe')}}" class="btn btn-success center-block"
                               style="width: 100%">Join Today</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop