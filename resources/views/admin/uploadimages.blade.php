@extends('layouts/admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Upload a video</h1>
            </div>
        </div>
        <div class="row">
            <form action="{{URL::asset('/admin/uploadimageset')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="setname">Set Name</label>
                    <input type="text" class="form-control" id="setname" name="setname" placeholder="Set name">
                </div>
                <div class="form-group">
                    <label for="name">Featured image</label>
                    <input type="file" id="name" name="name[]" multiple>
                    <p class="help-block">jpg, jpeg, png, gif</p>
                </div>
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@stop