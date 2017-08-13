@extends('layouts.open')

@section('content')
    <!--Header -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/header.png")}}"
         style="height: 400px; margin-top: -25px;">
        <h1 class="parallaxTitle">Blog</h1>
    </div>
    <!-- header finish -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @foreach($blogs as $blog)
                    <div class="col-md-4 text-center">
                        <h1>{{$blog->title}}</h1>
                        <img src="{{URL::asset("storage/" . $blog->featuredimage)}}" alt="" class="img-responsive">
                        <p>{{$blog->description}}</p>
                        <hr>
                        <div class="btn-group">
                            <a href="{{URL::asset('blog/' . $blog->id)}}" class="btn btn-success">View</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{$blogs->links()}}
@endsection