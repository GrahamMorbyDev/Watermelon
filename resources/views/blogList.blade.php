@extends('layouts.open')

@section('content')
    <!-- Info to start -->
    <div class="container globalPadding">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="col-md-8 col-lg-offset-2">
                    <img src="{{URL::asset('images/blog.png')}}" alt="Welcome to the Retro News" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
    <!-- header finish -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 boxPadding">
                <hr>
                {{--News items--}}
                <div class="row">
                    <div class="col-md-12 newsBlock">
                        {{-- Latest news list --}}
                        <div class="col-md-8">
                            @foreach($blogs as $blog)
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
                           <div class="text-center">{{$blogs->links()}}</div>
                        </div>
                        {{-- End of latest news list --}}
                        <div class="col-md-4">
                            <h2>Twitter</h2>
                            <a class="twitter-timeline"  href="https://twitter.com/retrogamercrate" data-widget-id="551840756865191936">Tweets by @retrogamercrate</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        <h2>Facebook</h2>
                            <div class="fb-page" data-href="https://www.facebook.com/Retro-Gamer-Crate-230596207603522/" data-tabs="timeline" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Retro-Gamer-Crate-230596207603522/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Retro-Gamer-Crate-230596207603522/">Retro Gamer Crate</a></blockquote></div></div>
                        </div>
                    </div>
                </div>
                {{-- End of News --}}
            </div>
    </div>
    </div>

@endsection