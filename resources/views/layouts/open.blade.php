<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121940042-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-121940042-1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ asset('js/parallax.js')}}"></script>

    <!-- Styles -->
    <link href="{{ asset(env('theme')) }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <!-- Nav bar -->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/welcome') }}">
                    {{ config('app.name', 'Placeholder') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{URL::asset('/welcome')}}">Home</a></li>
                    <li><a href="{{URL::asset('/about')}}">Links</a></li>
                    <li><a href="{{URL::asset('/updates')}}">Updates</a></li>
                    <li><a href="{{URL::asset('/faq')}}">FAQ</a></li>
                    <li><a href="{{URL::asset('/blog')}}">Blog</a></li>
                    <li><a href="https://www.clips4sale.com/studio/80433/mindi-mink-s-playhouse" target="_blank">Clips 4 Sale</a></li>
                    <li><a href="{{URL::asset('/contact')}}">Contact</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                    @else
                        <li><a href="{{ URL::asset('/members/videos') }}">Videos</a></li>
                        <li><a href="{{ URL::asset('/members/imagessets') }}">Images</a></li>
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
    <!-- Nav bar Eind -->
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
                    <li><a href="{{URL::asset('/welcome')}}">Home</a></li>
                    <li><a href="{{URL::asset('/about')}}">Links</a></li>
                    <li><a href="{{URL::asset('/updates')}}">Updates</a></li>
                    <li><a href="{{URL::asset('/faq')}}">FAQ</a></li>
                    <li><a href="{{URL::asset('/blog')}}">Blog</a></li>
                    <li><a href="{{URL::asset('terms')}}">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h2>Protected</h2>
                <a href="http://www.latestladies.com" target="_blank">
                    <img src="{{URL::asset('/images/dmca2blue.jpg')}}" alt="Dmca By Latest Ladies" class="img-responsive">
                </a>
            </div>
            <div class="col-md-4">
                <h2>Twitter</h2>
                <a class="twitter-timeline" data-height="320" href="https://twitter.com/MindiMink?ref_src=twsrc%5Etfw">Tweets by MindiMink</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>            </div>
            </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <hr>
        <div>
            <ul style="margin-top:0px;margin-bottom:10px;font-size:14px;line-height:20px;text-align:center"><h4 style="font-weight:500;line-height:1.1;margin-top:10px;margin-bottom:5px;font-size:18px">PARENTS! USE THESE SITES TO FILTER ADULT CONTENT!</h4>
                    <a href="http://www.fosi.org/" style="color:rgb(181,164,207);text-decoration:none;background:transparent" target="_blank">FOSI</a>&nbsp;|&nbsp;
                    <a href="http://www.cyberpatrol.com/" style="color:rgb(181,164,207);text-decoration:none;background:transparent" target="_blank">Cyber Patrol</a>&nbsp;|&nbsp;
                    <a href="http://www.safesurf.com/" style="color:rgb(181,164,207);text-decoration:none;background:transparent" target="_blank">Safe Surf</a>&nbsp;|&nbsp;
                    <a href="http://www.netnanny.com/" style="color:rgb(181,164,207);text-decoration:none;background:transparent" target="_blank">Net Nanny</a>&nbsp;|&nbsp;
                    <a href="http://www.cybersitter.com/" style="color:rgb(181,164,207);text-decoration:none;background:transparent" target="_blank">Cyber Sitter</a>
                </ul>
            </div>
        </div>
            <p style="color:#000000; text-align: center;">&copy; <?php echo date("Y") ?> Butterfly Software Developments UK</p>
        </div>
    </div>
</div>
</footer>
<!-- footer end -->

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/parallax.js')}}"></script>
</body>
</html>