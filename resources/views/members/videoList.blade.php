@extends('layouts/open')
@section('content')

    <div class="container">
        <div class="col-lg-12">
            <h1>Videos</h1>
            @foreach($videos as $video)
                <div class="col-md-4 text-center" style="min-height: 525px;">
                    <h3>{{$video->title}}</h3>
                    <img src="{{URL::asset("storage/" . $video->featuredimage)}}" alt="" class="img-responsive">
                    <hr>
                    <a href="{{URL::asset('members/video/' . $video->id)}}" class="btn btn-success center-block">Watch Now</a>
                    <br>
                    <form action="{{URL::asset('members/video/download')}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="filename" id="filename" value="{{$video->filename}}">
                        <input type="hidden" name="title" id="title" value="{{$video->title}}">
                        <button type="submit" class="btn btn-warning center-block" style="width: 100%">Download</button>
                    </form>
                </div>
            @endforeach
        </div>
        <div class="col-md-12 text-center">
            {{$videos->links()}}
        </div>
    </div>



@stop