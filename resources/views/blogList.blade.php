@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @foreach($blogs as $blog)
                    <div class="col-md-3 text-center">
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
