@extends('layouts.open')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$game->name}}</h1>
                <p>{{$game->alternative_names[0]->name}}</p>
                <img src="{{$game->cover->url}}" alt="">
                <p>{!!$game->summary!!}</p>
                <h3>ScreenShots</h3>
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <img src="{{$game->screenshots[0]->url}}" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-2">
                            <img src="{{$game->screenshots[1]->url}}" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-2">
                            <img src="{{$game->screenshots[2]->url}}" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-2">
                            <img src="{{$game->screenshots[3]->url}}" alt="" class="img-responsive">
                        </div>
                    </div>

                <h2>Rating: {{str_limit($game->total_rating , 5, '.')}}</h2>
            </div>
        </div>
    </div>

@endsection