@extends('layouts.open')

@section('content')

    <!--Header -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/header.jpg")}}" style="height: 400px; margin-top: -25px;">

    </div>
    <!-- header finish -->

   <!-- Info to start -->
  <div class="container">
      <div class="col-lg-12">
          <h1 class="neon">Welcome to Watermelon Members</h1>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when
              looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
              of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
              desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
              search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved
              over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
          </p>
      </div>
  </div>
    <!-- Info to start finish -->

    <!--Pricing Tables -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
               <h1>Pricing</h1>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-4 pricing">
            <h3>Standard</h3>
                <ul>
                    <li>Free Stuff</li>
                    <li>Something else</li>
                    <li>All other bits</li>
                    <li>Something else</li>
                    <li>Maybe this </li>
                    <li>And this</li>
                </ul>
                <p>$300.00</p>
                <button class="btn btn-success">Buy Now</button>
            </div>
            <div class="col-lg-4">
                <h3>Standard</h3>
                <ul>
                    <li>Free Stuff</li>
                    <li>Something else</li>
                    <li>All other bits</li>
                    <li>Something else</li>
                    <li>Maybe this </li>
                    <li>And this</li>
                </ul>
                <p>$300.00</p>
                <button class="btn btn-success">Buy Now</button>
            </div>
            <div class="col-lg-4">
                <h3>Standard</h3>
                <ul>
                    <li>Free Stuff</li>
                    <li>Something else</li>
                    <li>All other bits</li>
                    <li>Something else</li>
                    <li>Maybe this </li>
                    <li>And this</li>
                </ul>
                <p>$300.00</p>
                <button class="btn btn-success">Buy Now</button>
            </div>
        </div>
        </div>
    </div>
    <!-- Pricing Tables finish -->

    <!-- Dont Feel confident -->
    <div class="container">
        <h1>Don't feel confident?</h1>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
            of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
            desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
            search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved
            over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
        </p>
        <button class="btn btn-success">Sign Up Now!</button>
    </div>
    <!-- Dont Feel confident Finish -->

@endsection
