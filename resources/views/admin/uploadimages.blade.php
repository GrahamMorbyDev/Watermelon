@extends('layouts/admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>{{$image->id? 'Edit Image':'Upload Image'}}</h1>
            </div>
        </div>
        <div class="row">
            <form action="{{URL::asset('/admin/uploadimageset')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{$image->id?$image->id:''}}">
                <div class="form-group">
                    <label for="setname">Set Name</label>
                    <input type="text" class="form-control" id="setname" name="setname" placeholder="Set name" value="{{$image->setname?$image->setname:''}}">
                </div>

                @if($image->name)
                    <div>
                        <label for="image">Selected Image</label>
                        <img src="{{URL::asset("storage/" . $image->name)}}" id="image" alt="" class="img-responsive" style="width:200px;height:200px;">
                    </div>
                @endif

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