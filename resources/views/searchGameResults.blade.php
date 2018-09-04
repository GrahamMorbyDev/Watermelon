@extends('layouts.open')
@section('title', 'Gaming Database search')
@section('description', 'Gaming Database search')

@section('content')
    <!-- Info to start -->
    <div class="container globalPadding">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="col-md-8 col-lg-offset-2">
                    <img src="{{URL::asset('images/search.png')}}" alt="YOur gaming Search Results" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
    <!-- header finish -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Summary</th>
                        <th>View Game</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $game as $games)
                    <tr>
                        <td>{{$games->name}}</td>

                        @if(isset($games->summary))
                            <td>{{str_limit($games->summary, 50, '...')}}</td>
                        @else
                            <td>No Summary</td>
                        @endif

                        <td>
                            <form action="{{URL::asset('get/single/game')}}" method="post">
                                {!! csrf_field() !!}
                                <input type="hidden" id="id" name="id" value="{{$games->id}}">
                                <button class="btn btn-default" type="submit">View More</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endSection
