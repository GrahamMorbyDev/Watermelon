<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link rel="apple-touch-icon" sizes="57x57" href="{{URL::asset('/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{URL::asset('/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{URL::asset('/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{URL::asset('/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{URL::asset('/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{URL::asset('/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{URL::asset('/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{URL::asset('/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{URL::asset('/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{URL::asset('/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('/favicon-16x16.png')}}">
    <link rel="manifest" href="{{URL::asset('/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description')">

    <title>@yield('title')</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ asset('js/parallax.js')}}"></script>

    <!-- Styles -->
    <link href="{{ asset(env('theme')) }}" rel="stylesheet">
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1&appId=190225075032128&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124829134-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-124829134-1');
</script>

<div id="app">
    <!-- header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <img src="{{URL::asset('images/logo.png')}}" alt="Retro Gamer Crate" class="img-responsive">
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4 pull-right">
                        <ul class="socialLinks">
                            <li><a href="https://twitter.com/retrogamercrate" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="https://www.facebook.com/Retro-Gamer-Crate-230596207603522/" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCBFFEMIr4D2ot_84isxJ7-g" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
                            <li><a href="https://www.instagram.com/retrogamercrate/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.twitch.tv/retrogamerzone" target="_blank"><i class="fa fa-twitch"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end of header -->
    
    <!-- Nav bar -->
    <div class="container-fluid">
      <div class="row">
          <nav class="navbar navbar-default">
              <div class="container">
                  <div class="navbar-header">
                      <!-- Collapsed Hamburger -->
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                          <span class="sr-only">Toggle Navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                  </div>

                  <div class="collapse navbar-collapse" id="app-navbar-collapse">
                      <!-- Left Side Of Navbar -->
                      <ul class="nav navbar-nav">
                          <li><a href="{{URL::asset('/')}}">Home</a></li>
                          <li><a href="{{URL::asset('/about')}}">About Us</a></li>
                          <li><a href="{{URL::asset('/crate')}}">The Retro Crate</a></li>
                          {{--<li><a href="{{URL::asset('/faq')}}">FAQ</a></li>--}}
                          <li><a href="{{URL::asset('/blog')}}">Latest News</a></li>
                          <li><a href="{{URL::asset('/contact')}}">Contact</a></li>
                      </ul>

                      <!-- Right Side Of Navbar -->
                      <ul class="nav navbar-nav navbar-right">
                          <!-- Authentication Links -->
                          @if (Auth::guest())
                              {{--<li><a href="{{ route('login') }}">Login</a></li>
                              <li><a href="{{ route('register') }}">Subscribe</a></li>--}}
                          @else
                              {{-- <li><a href="{{ URL::asset('/members/videos') }}">Videos</a></li>
                               <li><a href="{{ URL::asset('/members/imagessets') }}">Images</a></li>--}}
                              <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                      {{ Auth::user()->name }} <span class="caret"></span>
                                  </a>

                                  <ul class="dropdown-menu" role="menu">
                                      <li>
                                          <a href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                              Logout
                                          </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              {{ csrf_field() }}
                                          </form>
                                      </li>
                                  </ul>
                              </li>
                          @endif
                      </ul>
                  </div>
              </div>
          </nav>
      </div>  
    </div>
    
    <!-- Nav bar End -->
    <!--Header -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/header.jpg")}}"
         style="height: 400px; margin-top: -25px;">
    </div>
    <!-- header finish -->
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))

                <div class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </div>
            @endif
        @endforeach
    </div> <!-- end .flash-message -->

    @yield('content')
</div>

<!-- Footer -->
<footer>
<div class="container-fluid">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-md-4 menu">
                <h2>Menu</h2>
                <ul>
                    <li><a href="{{URL::asset('/')}}">Home</a></li>
                <!--<li><a href="{{URL::asset('/about')}}">About Us</a></li>-->
                    {{--<li><a href="{{URL::asset('/faq')}}">FAQ</a></li>--}}
                    <li><a href="{{URL::asset('/blog')}}">Latest News</a></li>
                    <li><a href="https://twitter.com/retrogamercrate" target="_blank">Twitter</a></li>
                    <li><a href="https://www.facebook.com/Retro-Gamer-Crate-230596207603522/" target="_blank">Facebook</a></li>
                    <li><a href="{{URL::asset('/contact')}}">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h2>Facebook</h2>
                <div class="fb-page" data-href="https://www.facebook.com/Retro-Gamer-Crate-230596207603522/" data-tabs="timeline" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Retro-Gamer-Crate-230596207603522/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Retro-Gamer-Crate-230596207603522/">Retro Gamer Crate</a></blockquote></div>            </div>
            <div class="col-md-4">
                <h2>Twitter</h2>
                <a class="twitter-timeline"  href="https://twitter.com/retrogamercrate" data-widget-id="551840756865191936">Tweets by @retrogamercrate</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
    </div>
        <div class="row" style="padding: 50px;"></div>
    </div>
</div>
</div>
</footer>
<!-- footer end -->

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/parallax.js')}}"></script>
</body>
</html>