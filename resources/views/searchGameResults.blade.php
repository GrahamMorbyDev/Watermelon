@extends('layouts.open')

@section('content')
    <!--Header -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/header.jpg")}}"
         style="height: 400px; margin-top: -25px;">
    </div>
    <!-- header finish -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Cover</th>
                        <th>Name</th>
                        <th>View Game</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><img src="{{$game[0]->cover->url}}" alt="{{$game[0]->name}}"></td>
                        <td>{{$game[0]->name}}</td>
                        <td>
                            <form action="{{URL::asset('get/single/game')}}" method="post">
                                {!! csrf_field() !!}
                                <input type="hidden" id="id" name="id" value="{{$game[0]->id}}">
                                <button class="btn btn-default" type="submit">View More</button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endSection
