@extends('layouts/members')
@section('content')
    <h1>Videos</h1>
    @foreach($videos as $video)
    <h1>{{$video->title}}</h1>
    <img src="{{URL::asset("storage/" . $video->featuredimage)}}" alt="">
    <video width="320" height="240" controls>
        <source src="{{URL::asset("storage/" . $video->filename)}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    @endforeach
@stop