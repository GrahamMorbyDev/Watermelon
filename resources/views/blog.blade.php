@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1>{{$blog->title}}</h1>
            <h3>{{$blog->description}}</h3>
            <img src="{{URL::asset("storage/" . $blog->featuredimage)}}" alt="" class="img-responsive">
            <p>{!!html_entity_decode($blog->body)!!}</p>
            <p>By {{$blog->author}} {{$blog->updated_at}} </p>
        </div>
    </div>
@endsection