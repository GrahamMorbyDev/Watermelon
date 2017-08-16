@extends('layouts.open')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 fourzero">
                <div class="col-md-6">
                    <img src="{{URL::asset('images/404.png')}}" alt="404 Page not found" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <h1>404 <br><span>Page not found</span></h1>
                    <p>Oh God No! Not again? Please look away nothing to see here</p>
                    <p>Just go back the way you came and try again once we clean this mess up</p>
                </div>
            </div>
        </div>
    </div>

    @stop