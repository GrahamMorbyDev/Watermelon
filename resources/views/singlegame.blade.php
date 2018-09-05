@extends('layouts.open')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$game->name}}</h1>

                @if(isset($game->alternative_names))
                    <p>Alternative Name:  {{$game->alternative_names[0]->name}}</p>
                @else
                    <p></p>
                @endif

                @if(isset($game->version_title))
                    <p>Version title:  {{$game->version_title}}</p>
                @else
                    <p></p>
                @endif
                {{--Game cover--}}
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        @if(isset($game->cover))
                            <img src="https://images.igdb.com/igdb/image/upload/t_screenshot_med/{{$game->cover->cloudinary_id}}" alt="{{$game->name}}" class="img-responsive">
                        @else
                            <h1>No Cover</h1>
                        @endif
                    </div>
                </div>
                {{--End of Game cover--}}

                {{--Game Catagory--}}
                @if($game->category == 0)
                   <p>Game Catagory: Main game</p>
                @elseif($game->category == 1)
                   <p>Game Catagory: DLC / Addon</p>
                @elseif($game->category == 2)
                    <p>Game Catagory: Expansion</p>
                @elseif($game->category == 3)
                    <p>Game Catagory: Bundle</p>
                @elseif($game->category == 4)
                    <p>Game Catagory: Standalone expansion</p>
                @endif
                {{--End of Game Catagory--}}


                {{--Summary--}}
                @if(isset($game->summary))
                <div class="row">
                    <div class="col-md-12">
                        <div class="summary">
                            <h3>Summary:</h3>
                            <p>{!!$game->summary!!}</p>
                        </div>
                    </div>
                </div>
                @endif
                {{--End of Summary--}}

                {{--Storyline --}}
                @if(isset($game->storyline))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="summary">
                                <h3>Storyline:</h3>
                                <p>{!!$game->storyline!!}</p>
                            </div>
                        </div>
                    </div>
                @endif
                {{--End of Stroyline--}}

                <h3>ScreenShots</h3>
                @if(isset($game->screenshots))
                    <div class="row">
                        <div class="col-md-12">
                            @foreach($game->screenshots as $screenshot)
                            <div class="col-md-4"><img style="width:100%; height:auto; padding: 5px" src="https://images.igdb.com/igdb/image/upload/t_screenshot_huge/{{$screenshot->cloudinary_id}}"></div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <hr>
                <div class="rating">
                    @if(isset($game->total_rating))
                        <h2 class="text-center">Rating: {{str_limit($game->total_rating , 2, ' Out of 100')}}</h2>
                    @else
                        <p>No Rating</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="enlargeImageModal" tabindex="-1" role="dialog" aria-labelledby="enlargeImageModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" class="enlargeImageModalSource" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $('img').on('click', function() {
                $('.enlargeImageModalSource').attr('src', $(this).attr('src'));
                $('#enlargeImageModal').modal('show');
            });
        });
    </script>
@endsection