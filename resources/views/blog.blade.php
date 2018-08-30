@extends('layouts.open')
@section('title', $blog->title)
@section('description', str_limit($blog->body, 100, ('...')))
@section('content')
    <div class="container">
        <div class="row">
            <?php $auth = \Illuminate\Support\Facades\Auth::user() ?>
            @if(isset($auth) && $auth->isAdmin())
                <button class="btn btn-success" type="button" onclick="window.location='{{ URL::asset("/admin/blog/".$blog->id) }}'" >Edit Blog</button>
            @endif
            <div class="col-lg-12 blogview">
                <h1>{{$blog->title}}</h1>
                <h3>{{$blog->description}}</h3>
                <img src="{{URL::asset("storage/" . $blog->featuredimage)}}" alt="" class="img-responsive">
                <p>{!!$blog->body!!}</p>
                <p>By {{$blog->author}} {{$blog->updated_at}} </p>
            </div>
        </div>
    </div>
@endsection
