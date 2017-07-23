@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @foreach($blogs as $blog)
                <div class="col-md-3 text-center">
                    <h1>{{$blog->title}}</h1>
                    <img src="{{URL::asset("storage/" . $blog->featuredimage)}}" alt="" class="img-responsive">
                    <p>{!!html_entity_decode($blog->description)!!}</p>
                    <hr>
                    <div class="btn-group">
                        <a href="{{URL::asset('blog/' . $blog->id)}}" class="btn btn-success">Watch Now</a>
                        <a href="#" class="btn btn-warning">Download</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{$blogs->links()}}
@endsection
