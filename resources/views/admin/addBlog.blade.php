@extends('layouts/admin')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Add Blog</h1>
        </div>
    </div>
    {{--title, description, featuredimage, body, publish, author, tags--}}
    <div class="row">
        <form action="{{URL::asset('/saveblog')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="publish" value="1">
            <div class="form-group">
                <label for="title">Blog Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Blog title">
            </div>

            <div class="form-group">
                <label for="title">Blog Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Blog description">
            </div>

            <div class="form-group">
                <label for="body">Blog Body</label>
                <textarea class="form-control" id="body" name="body" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="featuredimage">Featured image</label>
                <input type="file" id="featuredimage" name="featuredimage">
                <p class="help-block">jpg, jpeg, png, gif</p>
            </div>

            <div class="form-group">
                <label for="author">Blog Author</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Blog author">
            </div>

            <button class="btn btn-success" >Submit</button>
        </form>
    </div>
    </div>
    <script type="text/javascript">
        CKEDITOR.replace( 'body' );
    </script>
@stop