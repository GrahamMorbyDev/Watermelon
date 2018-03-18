@extends('layouts/open')
@section('content')

    <div class="container">
        <div class="col-lg-12">
            <h1>Images</h1>
            @foreach($images as $image)
                <div class="col-md-4 text-center" style="min-height: 400px">
                    <div style="height: 55px">
                    <p style="font-size: 11px;">{{$image->setname}}</p>
                    </div>
                    <div style="height: 150px; overflow: hidden">
                        <img src="{{URL::asset("storage/" . $image->name)}}" alt=""  class="img-responsive">
                    </div>
                    <hr>
                    <a href="{{URL::asset('members/imagessets/' . $image->setname)}}" class="btn btn-success" style="width: 100%">View Now</a>
                    <br>
                    <br>
                    <form action="{{URL::asset('members/imageset/download')}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="name" id="name" value="{{$image->name}}">
                        <input type="hidden" name="setname" id="setname" value="{{$image->setname}}">
                        <button type="submit" class="btn btn-warning center-block" style="width: 100%; margin-bottom: 10px;">Download</button>
                    </form>
                    <hr>
                </div>
            @endforeach
        </div>
    </div>

@stop