@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Welcome To the Admin Dashboard</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3 notice dark text-center">
                <h1 class="fa fa-user-circle-o"></h1>
               <p>You currently have <?= $users ?> Member's</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="70"
                         aria-valuemin="0" aria-valuemax="100" style="width:<?= $users ?>%">
                        <span class="sr-only"><?= $users ?>% Complete</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 notice light text-center">
                <h1 class="fa fa-play-circle-o"></h1>
                <p>You currently have <?= $videos ?> Video's</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="70"
                         aria-valuemin="0" aria-valuemax="200" style="width:<?= $videos ?>%">
                        <span class="sr-only"><?= $videos ?>% Complete</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 notice dark text-center">
                <h1 class="fa fa-picture-o "></h1>
                <p>You currently have <?= $images ?> Photo's</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                         aria-valuemin="0" aria-valuemax="200" style="width:<?= $images ?>%">
                        <span class="sr-only"><?= $images ?>% Complete</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 notice light text-center">
                <h1 class="fa fa-newspaper-o "></h1>
                <p>You currently have <?= $blogs ?> Blog Post's</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="70"
                         aria-valuemin="0" aria-valuemax="200" style="width:<?= $blogs ?>%">
                        <span class="sr-only"><?= $blogs ?>% Complete</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="row">--}}
        {{--<div class="col-lg-12">--}}
            {{--<h1>Admin</h1>--}}
            {{--<hr>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
        {{--<div class="col-lg-12">--}}
            {{--<div class="col-lg-4 text-center">--}}
                {{--<img src="{{URL::asset('images/Video-icon.png')}}" class="img-responsive center-block">--}}
                {{--<h1>Videos</h1>--}}
                {{--<div class="btn-group">--}}
                    {{--<a href="{{URL::asset('/admin/uploadvideo') }}"  class="btn btn-success">Upload</a>--}}
                    {{--<a href="#" class="btn btn-success">Edit</a>--}}
                    {{--<a href="#" class="btn btn-success">View All</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-4 text-center">--}}
                {{--<img src="{{URL::asset('images/Video-icon.png')}}" class="img-responsive center-block">--}}
                {{--<h1>Photos</h1>--}}
                {{--<div class="btn-group">--}}
                    {{--<a href="{{URL::asset('/admin/uploadvideo') }}"  class="btn btn-success">Upload</a>--}}
                    {{--<a href="#" class="btn btn-success">Edit</a>--}}
                    {{--<a href="#" class="btn btn-success">View All</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-4 text-center">--}}
                {{--<img src="{{URL::asset('images/Video-icon.png')}}" class="img-responsive center-block">--}}
                {{--<h1>Blog</h1>--}}
                {{--<div class="btn-group">--}}
                    {{--<a href="{{URL::asset('/admin/uploadvideo') }}"  class="btn btn-success">Upload</a>--}}
                    {{--<a href="#" class="btn btn-success">Edit</a>--}}
                    {{--<a href="#" class="btn btn-success">View All</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
        {{--<div class="col-lg-12">--}}
            {{--<ul>--}}
                {{--<li><a href="{{URL::asset('/admin/uploadvideo') }}">Upload Video</a></li>--}}
                {{--<li>All videos</li>--}}
                {{--<hr>--}}
                {{--<li>Upload Photos</li>--}}
                {{--<li>All photos</li>--}}
                {{--<hr>--}}
                {{--<li>Add Blog Post</li>--}}
                {{--<li>All Blog posts</li>--}}
                {{--<hr>--}}
                {{--<li><a href="{{URL::asset('/admin/users') }}">All users</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
@stop
