@extends('layouts/open')
@section('content')

    <div class="container">
        <div class="col-lg-12">
            <h1>Videos</h1>
            @foreach($videos as $video)
                <div class="col-md-3 text-center">
                    <h2>{{$video->title}}</h2>
                    <img src="{{URL::asset("storage/" . $video->featuredimage)}}" alt="" class="img-responsive">
                    <p>{!!html_entity_decode($video->description)!!}</p>
                    <hr>
                    <a href="{{URL::asset('members/video/' . $video->id)}}" class="btn btn-success center-block">Watch
                        Now</a>
                    <br>
                    <form action="{{URL::asset('members/video/download')}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="title" id="title" value="{{$video->filename}}">
                        <button type="submit" class="btn btn-warning center-block">Download</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
    {{$videos->links()}};

@stop