@extends('layouts/members')
@section('content')
    <div class="container">
      <div class="row">
          <div class="col-lg-12 text-center">
              <h1>Welcome to the Members Lobby</h1>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12 text-center">
              <div class="col-lg-6">
                  <h1>Videos</h1>
                  <h1 class="fa fa-play-circle-o"></h1><br>
                  <a href="{{URL::asset('/members/videos')}}" class="btn btn-success">View all</a>
              </div>
              <div class="col-lg-6">
                  <h1>Images</h1>
                  <h1 class="fa fa-picture-o "></h1><br>
                  <a href="{{URL::asset('/members/imagessets')}}" class="btn btn-success">View all</a>
              </div>
          </div>
      </div>
    </div>
@stop