@extends('layouts.open')

@section('content')
    <!-- Contact Us Form -->
    <div class="container globalPadding">
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h1>Contact Us</h1>
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form method="post" action="{{URL::asset('contact-us')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" rows="9" name="message" placeholder="Your message goes here....."></textarea>
                    </div>


                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End of Contact Form -->
@endsection