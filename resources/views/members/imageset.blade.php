@extends('layouts/open')
@section('content')

    <div class="container">
        <div class="col-lg-12">
        <h1>{{$imageset[0]->setname}}</h1>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach($imageset as $i => $image)
                    <div class="item <?= $i === 0 ? 'active': ''?>">
                        <img src="{{URL::asset("storage/" . $image->name)}}" class="img-responsive">
                    </div>
                    @endforeach
                </div>


            </div>
        </div>
    </div>

@stop