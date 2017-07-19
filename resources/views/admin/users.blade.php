<?php
use App\User;

?>
@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            @foreach($users as $user)
                <p>
                    {{$user->name}}
                    <span><a href="#">edit</a></span>
                    <span><a href="#">delete</a></span>
                </p>

            @endforeach
        </div>

    </div>
@stop