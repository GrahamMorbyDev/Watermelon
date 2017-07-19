@extends('layouts/admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1>Upload a video</h1>
    </div>
</div>
<div class="row">
    <form action="{{URL::asset('/uploadsinglevideo')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="title">Video Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="video title">
        </div>
        <div class="form-group">
            <label for="realeasedate">Release date</label>
            <input type="text" class="form-control" id="realeasedate" name="realeasedate" placeholder="ie 2012">
        </div>
        <div class="form-group">
            <label for="videodescription">Video Description</label>
            <textarea class="form-control" id="videodescription" name="videodescription" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Featured image</label>
            <input type="file" id="featuredimage" name="featuredimage">
            <p class="help-block">jpg, jpeg, png, gif</p>
        </div>
        <div class="form-group">
            <label for="videofile">Video File</label>
            <input type="file" id="videofile" name="videofile">
            <p class="help-block">mp4, mpeg</p>
        </div>
        <button class="btn btn-success" >Submit</button>
    </form>
</div>

@stop