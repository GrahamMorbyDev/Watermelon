@extends('layouts/members')
@section('content')

    <div class="container">
        <div class="col-lg-12">
            <h1>Images</h1>
            @foreach($images as $image)
                <div class="col-md-3 text-center">
                    <h1>{{$image->setname}}</h1>
                    <img src="{{URL::asset("storage/" . $image->name)}}" alt="" class="img-responsive">
                    <hr>
                    <div class="btn-group">
                        <a href="{{URL::asset('members/imagessets/' . $image->setname)}}" class="btn btn-success">View Now</a>
                        <a href="#" class="btn btn-warning">Download</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@stop