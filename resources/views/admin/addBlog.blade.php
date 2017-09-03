@extends('layouts/admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>{{$blog->id? 'Edit Blog':'Add Blog'}}</h1>
            </div>
        </div>
        <div class="row">
            <form action="{{URL::asset('/saveblog')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="publish" value="1">
                <input type="hidden" name="id" value="{{$blog->id?$blog->id:''}}">
                <div class="form-group">
                    <label for="title">Blog Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Blog title" value="{{$blog->title ? $blog->title: ''}}">
                </div>

                <div class="form-group">
                    <label for="title">Blog Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Blog description" value="{{$blog->description?$blog->description:''}}">
                </div>

                <div class="form-group">
                    <label for="body">Blog Body</label>
                    <textarea class="form-control" id="body" name="body" rows="3">{{$blog->body?$blog->body:''}}</textarea>
                </div>

                @if($blog->featuredimage)
                    <div>
                        <label for="image">Selected Image</label>
                        <img src="{{URL::asset("storage/" . $blog->featuredimage)}}" id="image" alt="" class="img-responsive" style="width:200px;height:200px;">
                    </div>
                @endif
                <div class="form-group">
                    <label for="featuredimage">Featured image</label>
                    <input type="file" id="featuredimage" name="featuredimage" value="{{$blog->featuredimage?$blog->featuredimage:''}}">
                    <p class="help-block">jpg, jpeg, png, gif</p>
                </div>

                <div class="form-group">
                    <label for="author">Blog Author</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Blog author" value="{{$blog->author?$blog->author:''}}">
                </div>

                <button class="btn btn-success" >Submit</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        CKEDITOR.replace( 'body' );
    </script>
@stop