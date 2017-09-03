@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Page headers</h1>
        <div class="col-md-3 thumbnail text-center">
            <h3>Page: Home</h3>
            <img src="{{URL::asset('images/header.jpeg')}}" alt="header" class="img-responsive">
            <hr>
            <a href="#" class="btn btn-success center-block">Select new header</a>
        </div>
        <div class="col-md-3 thumbnail text-center">
            <h3>Page: About</h3>
            <img src="{{URL::asset('images/header.jpeg')}}" alt="header" class="img-responsive">
            <hr>
            <a href="#" class="btn btn-success center-block">Select new header</a>
        </div>
        <div class="col-md-3 thumbnail text-center">
            <h3>Page: Contact</h3>
            <img src="{{URL::asset('images/header.jpeg')}}" alt="header" class="img-responsive">
            <hr>
            <a href="#" class="btn btn-success center-block">Select new header</a>
        </div>
        <div class="col-md-3 thumbnail text-center">
            <h3>Page: Home</h3>
            <img src="{{URL::asset('images/header.jpeg')}}" alt="header" class="img-responsive">
            <hr>
            <a href="#" class="btn btn-success center-block">Select new header</a>
        </div>
    </div>
</div>
@stop