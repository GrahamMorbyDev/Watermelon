@extends('layouts.open')
@section('title', 'Welcome to Retro Gamer Crate')
@section('description', 'Welcome to retro gamer crate, your no 1 resource for all things retro gaming, with news , reviews and the Home of the Retro Crate')
@section('content')
    <div class="container">
        {{-- News --}}
        <div class="row">
            <div class="col-md-12 globalPadding">
                <h1>Latest News</h1>
            </div>
        </div>
        <div class="row"{{URL::asset('images/test.jpg')}}>
            <div class="col-md-12 globalPadding">
                <div class="col-md-12 text-center">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            @foreach($blognew as $blog)
                                <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                            @endforeach
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            @foreach($blognew as $blog)
                            <div class="item {{ $loop->first ? ' active' : '' }}">
                                <div style="height: 500px !important; ">
                                <img src="{{URL::asset("storage/" . $blog->featuredimage)}}" class="carousel-img-responsive"
                                     alt="{{$blog->title}}" style="overflow: hidden">
                                </div>
                                <div class="carousel-caption" style="background-color: rgba(204,204,204, .3);">
                                    <h3 style="color: white">{{$blog->title}}</h3>
                                    <p>{{$blog->description}}</p>
                                    <a href="{{URL::asset('blog/' . $blog->slug)}}" class="btn btn-default">Read More</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 newsBlock">
                {{-- Latest news list --}}
                <div class="col-md-8">
                    @foreach($blogold as $blog)
                        <div class="newsItem">
                            <div class="col-md-12">
                                <h3>{{$blog->title}}</h3>
                                <div class="col-md-4">
                                    <img src="{{URL::asset("storage/" . $blog->featuredimage)}}" alt="{{$blog->title}}" class="img-responsive">
                                </div>
                                <div class="col-md-8">
                                    <p>{{strip_tags(str_limit($blog->body, 150, ('...')))}}</p>
                                    <a href="{{URL::asset('blog/' . $blog->slug)}}" class="btn btn-default">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- End of latest news list --}}
                <div class="col-md-4">
                    <h2>Twitter</h2>
                    <a class="twitter-timeline"  href="https://twitter.com/retrogamercrate" data-widget-id="551840756865191936">Tweets by @retrogamercrate</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
            </div>
        </div>
        {{-- End of News --}}

        {{--Games row--}}
        <div class="row">
            <div class="col-md-12">
                <h1>Game Database</h1>
            </div>
        </div>
        <div class="row globalPadding">
            <div class="col-md-12">
                @foreach ($game as $games)
                    <div class="col-md-2 text-center gameView">
                        @if(isset($games->cover))
                            <img src="{{$games->cover->url}}" alt="{{ $games->name}}" class="img-responsive center-block" width="100%">
                        @endif
                            <p>{{ $games->name}}</p>
                            <form action="{{URL::asset('get/single/game')}}" method="post">
                            {!! csrf_field() !!}
                            <input type="hidden" id="id" name="id" value="{{$games->id}}">
                            <button class="btn btn-default" type="submit">View More</button>
                        </form>
                    </div>
                @endforeach

            </div>
        </div>
        {{--End of game row--}}

        {{--Search box --}}
        <div class="row searchbox globalPadding">
            <div class="col-md-12">
                <form action="{{URL::asset('search/game')}}" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <input type="text" class="form-control" id="game" name="game" placeholder="Search Our Database">
                    </div>
                    <button class="btn btn-default center-block" type="submit">Search</button>
                </form>
            </div>
        </div>
        {{--End of search box --}}

    </div>
@endsection