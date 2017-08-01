@extends('layouts.open')

@section('content')

    <!--Header -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/header.jpeg")}}" style="height: 400px; margin-top: -25px;">
    </div>
    <!-- header finish -->

<!-- Info to start -->
  <div class="container globalPadding">
      <div class="row">
          <div class="col-lg-12 text-center">
              <img src="images/logo.png" alt="Watermelon">
              <hr>
              <h1>So you need a Membership service?</h1>

              <p>Are you a producer of content? a provider of a service? or your just looking to give premium services
              to a wide audience. But you have no real developer experience! Then welcome my friends to Watermelon</p>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12">
              <hr>
              <div class="col-md-3 notice dark text-center">
                  <h1 class="fa fa-user-circle-o"></h1>
                  <p>We make users</p>
                  <div class="progress">
                      <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="70"
                           aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                      </div>
                  </div>
              </div>
              <div class="col-md-3 notice light text-center">
                  <h1 class="fa fa-play-circle-o"></h1>
                  <p>Upload full HD videos</p>
                  <div class="progress">
                      <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="70"
                           aria-valuemin="0" aria-valuemax="200" style="width:100%">
                      </div>
                  </div>
              </div>
              <div class="col-md-3 notice dark text-center">
                  <h1 class="fa fa-picture-o "></h1>
                  <p>Zip style image sets</p>
                  <div class="progress">
                      <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="70"
                           aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                      </div>
                  </div>
              </div>
              <div class="col-md-3 notice light text-center">
                  <h1 class="fa fa-newspaper-o "></h1>
                  <p>Fully working Blog</p>
                  <div class="progress">
                      <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="70"
                           aria-valuemin="0" aria-valuemax="200" style="width:100%">
                      </div>
                  </div>
              </div>
              <hr>
          </div>
      </div>
  </div>
<!-- Info to start finish -->
<!-- Simple statement -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <hr>
                <h1>You need it to be easy!</h1>
                <div class="col-md-6 text-left">
                <p>With our easy to use interface and knowledge of knowing exactly what you need, we have built an app
                that give you the ability to just worry about your content and users!</p>
                <img src="images/adminpanel.png" alt="Watermelon Admin Panel" class="img-responsive">
                </div>
                <div class="col-md-6 text-left">
                    <p>Uploading content should be a walk in the park? It should just happen and you should be more
                        worried about creating it, rather than fighting to put it up on your site.</p>
                    <img src="images/videoupload.png" alt="Watermelon Admin Panel" class="img-responsive">
                </div>
        </div>
    </div>
<!-- Simple end -->

@endsection
