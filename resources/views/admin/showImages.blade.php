@extends('layouts/admin')
@section('content')
    <div class="row">
        <h1>Image Sets</h1>
    </div>
    <div class="row">

        @foreach($images as $image)
                <div class="col-md-3 text-center thumbnail">
                    <p>Set Name: {{$image->setname}}</p>
                    <img src="{{URL::asset("storage/" . $image->name)}}" alt="" class="img-responsive" style="min-height: 300px;">
                    <hr>
                    <form action="{{URL::asset('/admin/images/delete')}}" method="post" class="form-group">
                            <button class="btn btn-warning">Delete</button>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                </div>
    @endforeach
@stop