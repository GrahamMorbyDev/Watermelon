@extends('layouts.open')

@section('content')
    <!--Header -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/header.jpg")}}"
         style="height: 400px; margin-top: -25px;">
    </div>
    <!-- header finish -->
<div class="container">
    <div class="row">
        <div class="col-md-12 globalPadding">
            <div class="col-md-8 col-md-offset-2">
                <img src="{{URL::asset('images/comingsoon.jpg')}}" alt="Coming Soon" class="img-responsive">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">{{--
            @foreach($game as $games)
                <div class="col-md-2">
                    <img src="" alt="">
                    <p>{{$games->name}}</p>
                    <p>{{$games->cover->url}}</p>
                </div>
            @endforeach--}}
            <div class="col-md-2 text-center">
                <img src="{{$game[0]->cover->url}}" alt="" class="img-responsive center-block" width="100%">
                <p>{{$game[0]->name}}</p>
                <form action="{{URL::asset('get/single/game')}}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" id="id" name="id" value="{{$game[0]->id}}">
                    <button class="btn btn-default" type="submit">View More</button>
                </form>
            </div>
            <div class="col-md-2 text-center">
                <img src="{{$game[7]->cover->url}}" alt="" class="img-responsive center-block" width="100%">
                <p>{{$game[7]->name}}</p>
                <form action="{{URL::asset('get/single/game')}}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" id="id" name="id" value="{{$game[7]->id}}">
                    <button class="btn btn-default" type="submit">View More</button>
                </form>
            </div>
            <div class="col-md-2 text-center">
                <img src="{{$game[2]->cover->url}}" alt="" class="img-responsive center-block" width="100%">
                <p>{{$game[2]->name}}</p>
                <form action="{{URL::asset('get/single/game')}}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" id="id" name="id" value="{{$game[2]->id}}">
                    <button class="btn btn-default" type="submit">View More</button>
                </form>
            </div>
            <div class="col-md-2 text-center">
                <img src="{{$game[3]->cover->url}}" alt="" class="img-responsive center-block" width="100%">
                <p>{{$game[3]->name}}</p>
                <form action="{{URL::asset('get/single/game')}}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" id="id" name="id" value="{{$game[3]->id}}">
                    <button class="btn btn-default" type="submit">View More</button>
                </form>
            </div>
            <div class="col-md-2 text-center">
                <img src="{{$game[5]->cover->url}}" alt="" class="img-responsive center-block" width="100%">
                <p>{{$game[5]->name}}</p>
                <form action="{{URL::asset('get/single/game')}}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" id="id" name="id" value="{{$game[5]->id}}">
                    <button class="btn btn-default" type="submit">View More</button>
                </form>
            </div>
            <div class="col-md-2 text-center">
                <img src="{{$game[6]->cover->url}}" alt="" class="img-responsive center-block" width="100%">
                <p>{{$game[6]->name}}</p>
                <form action="{{URL::asset('get/single/game')}}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" id="id" name="id" value="{{$game[6]->id}}">
                    <button class="btn btn-default" type="submit">View More</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection