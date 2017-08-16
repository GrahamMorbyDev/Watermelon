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
                    <div class="btn-group">
                        <a href="{{URL::asset('members/video/' . $video->id)}}" class="btn btn-success">Watch Now</a>
                        <a href="#" class="btn btn-warning">Download</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{$videos->links()}};

@stop