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
