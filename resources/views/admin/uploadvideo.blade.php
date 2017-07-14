@extends('layouts/admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1>Upload a video</h1>
    </div>
</div>
<div class="row">
    <form action="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Video Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="video title">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Release date</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="ie 2012">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Video Description</label>
            <textarea class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Featured image</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">jpg, jpeg, png, gif</p>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Video File</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">mp4, mpeg</p>
        </div>
        <button class="btn btn-success" >Submit</button>
    </form>
</div>

@stop