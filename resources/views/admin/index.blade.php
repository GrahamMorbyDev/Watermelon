@extends('layouts/admin')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1>Admin</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-4 text-center">
                <img src="{{URL::asset('images/Video-icon.png')}}" class="img-responsive center-block">
                <h1>Videos</h1>
                <div class="btn-group">
                    <a href="{{URL::asset('/admin/uploadvideo') }}"  class="btn btn-success">Upload</a>
                    <a href="#" class="btn btn-success">Edit</a>
                    <a href="#" class="btn btn-success">View All</a>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <img src="{{URL::asset('images/Video-icon.png')}}" class="img-responsive center-block">
                <h1>Photos</h1>
                <div class="btn-group">
                    <a href="{{URL::asset('/admin/uploadvideo') }}"  class="btn btn-success">Upload</a>
                    <a href="#" class="btn btn-success">Edit</a>
                    <a href="#" class="btn btn-success">View All</a>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <img src="{{URL::asset('images/Video-icon.png')}}" class="img-responsive center-block">
                <h1>Blog</h1>
                <div class="btn-group">
                    <a href="{{URL::asset('/admin/uploadvideo') }}"  class="btn btn-success">Upload</a>
                    <a href="#" class="btn btn-success">Edit</a>
                    <a href="#" class="btn btn-success">View All</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <ul>
                <li><a href="{{URL::asset('/admin/uploadvideo') }}">Upload Video</a></li>
                <li>All videos</li>
                <hr>
                <li>Upload Photos</li>
                <li>All photos</li>
                <hr>
                <li>Add Blog Post</li>
                <li>All Blog posts</li>
                <hr>
                <li><a href="{{URL::asset('/admin/users') }}">All users</a></li>
            </ul>
        </div>
    </div>
@stop
