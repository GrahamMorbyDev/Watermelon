@extends('layouts/admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Upload a video</h1>
        </div>
        <div class="row">
            <form action="{{URL::asset('/uploadsinglevideo')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @if($video->id)
                    <input type="hidden" name="id" value="{{ $video->id }}">
                @endif
                <div class="form-group">
                    <label for="title">Video Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Video title" value="{{$video->title ? $video->title:''}}">
                </div>
                <div class="form-group">
                    <label for="description">Video Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{$video->description ? $video->description:''}}</textarea>
                </div>
                @if($video->featuredimage)
                    <div>
                        <label for="image">Selected Image</label>
                        <img src="{{URL::asset("storage/" . $video->featuredimage)}}" id="image" alt="" class="img-responsive" style="width:200px;height:200px;">
                    </div>
                @endif
                <div class="form-group">
                    <label for="exampleInputFile">Featured image</label>
                    <input type="file" id="featuredimage" name="featuredimage" value="{{$video->featuredimage ? $video->featuredimage:''}}">
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