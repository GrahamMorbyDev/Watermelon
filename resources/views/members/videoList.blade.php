@extends('layouts/members')
@section('content')

    <div class="container">
        <div class="col-lg-12">
            <h1>Videos</h1>
            @foreach($videos as $video)
                <div class="col-md-3">
                <h1>{{$video->title}}</h1>
                    <p>{{$video->description}}</p>
                <img src="{{URL::asset("storage/" . $video->featuredimage)}}" alt="" class="img-responsive">
                <video width="320" height="240" controls>
                    <source src="{{URL::asset("storage/" . $video->filename)}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            @endforeach
        </div>
    </div>

@stop