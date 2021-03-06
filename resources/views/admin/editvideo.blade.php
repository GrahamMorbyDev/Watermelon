@extends('layouts/admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Edit {{$video->title}}</h1>
        </div>
        <div class="row">
            <form action="{{URL::asset('/admin/updatevideo')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="title">Video Title</label>
                    <input type="text" value="{{$video->title}}" class="form-control" id="title" name="title" placeholder="Video title">
                </div>
                <div class="form-group">
                    <label for="description">Video Description</label>
                    <textarea  class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Featured image</label>
                    <input type="file" id="featuredimage" name="featuredimage">
                    <p class="help-block">jpg, jpeg, png, gif</p>
                </div>
                <div class="form-group">
                    <label for="filename">Video File</label>
                    <input type="file" id="filename" name="filename">
                    <p class="help-block">mp4, mpeg</p>
                </div>
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
        <script type="text/javascript">
            CKEDITOR.replace('description');
        </script>
    </div>
@stop