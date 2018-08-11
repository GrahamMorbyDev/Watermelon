@extends('layouts.open')

@section('content')
    <!--Header -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/nflheader.jpg")}}"
         style="height: 700px; margin-top: -25px;">
    </div>
    <!-- header finish -->

    <!-- Info to start -->
    <div class="container globalPadding">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>NFL Trading card Blog</h1>
            </div>
        </div>
    </div>
    <!-- header finish -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 boxPadding">
                <hr>
                @foreach($blogs as $blog)
                    <div class="col-md-4 text-center" style="min-height: 450px;">
                        <h1>{{$blog->title}}</h1>
                        <img src="{{URL::asset("storage/" . $blog->featuredimage)}}" alt="" class="img-responsive">
                        <br>
                        <p>{{$blog->description}}</p>
                        <div class="btn-group">
                            <a href="{{URL::asset('blog/' . $blog->id)}}" class="btn btn-success btn-lg center-block">View</a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$blogs->links()}}
        </div>
    </div>

@endsection