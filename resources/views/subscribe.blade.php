@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table">
                    <div class="row display-tr">
                        <h3 class="panel-title display-td col-md-8">Payment Details Form</h3>
                        <div class="display-td col-md-4">
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        @if(!\App\Address::where('user_id',Auth::id())->get())
                            <form action="{{URL::asset('/update/user/address')}}" method="post" class="form-group">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" value="{{ Auth::id() }}">
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" name="country"
                                           id="country" value="">
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" name="country"
                                           id="country" value="">
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" name="country"
                                           id="country" value="">
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" name="country"
                                           id="country" value="">
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" name="country"
                                           id="country" value="">
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" name="country"
                                           id="country" value="">
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" name="country"
                                           id="country" value="">
                                </div>
                            </form>
                        @endif
                        <form action="{{URL::asset('sub')}}" method="post" class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id" value="{{ $user->id }}">

                            <div class="form-group">
                                <label for="plan">Plan</label>
                                <select class="form-control" name="plan" id="plan">
                                    <option value="watermelon">membership (£10)</option>
                                    <option value="watermelon">membership (£10)</option>
                                    <option value="watermelon">membership (£10)</option>
                                </select>
                            </div>
                            <div class="row">

                                {{--<div class="col-md-6">--}}
                                {{--<div class="form-group">--}}
                                {{--<label for="plan">Name</label>--}}
                                {{--<input name="cardholder-name" class="field" value="{{$user->name}}"/>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-6">--}}
                                {{--<div class="form-group">--}}
                                {{--<label for="plan">Phone</label>--}}
                                {{--<input class="field" placeholder="(123) 456-7890" type="tel"/>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}


                                <div class="form-group">
                                    <label for="card-element">Card</label>
                                    <div id="card-element" class="field"></div>
                                </div>
                                <button type="submit" class="btn btn-success pull-right">Subscribe</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <script src="https://js.stripe.com/v3/"></script>
    <script>

        var stripe = Stripe("<?= env('STRIPE_PUBLISHABLE_SECRET') ?>");
        var elements = stripe.elements();
        var card = elements.create('card', {
            iconStyle: 'solid',
            style: {
                base: {
                    iconColor: '#666EE8',
                    color: '#31325F',
                    lineHeight: '40px',
                    fontWeight: 300,
                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                    fontSize: '24px',

                    '::placeholder': {
                        color: '#CFD7E0',
                    },
                },
            }
        });

        card.mount('#card-element');

        $('.form-group').submit(function (e) {
            e.preventDefault();
            var promise = stripe.createToken(card);
            promise.then(function (result) {
                console.log(result);

                if (result.error) {
                    console.log('error');
                } else {
                    var token = result.token.id;
                    console.log(token);
                    $('.form-group').append($('<input type="hidden" name="stripeToken" />').val(token));
                    $('.form-group').submit();
                }


            });
        });
    </script>
    </div>
@endsection
