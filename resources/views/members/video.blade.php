@extends('layouts/open')
@section('content')

    <div class="container">
        <div class="col-lg-12">
            <h1>{{$video->title}}</h1>
            <video controls poster="{{URL::asset("storage/" . $video->featuredimage)}}">
                <source src="{{URL::asset("storage/" . $video->filename)}}" type="video/mp4">

                Your browser does not support the video tag.
            </video>
        </div>
    </div>

@stop