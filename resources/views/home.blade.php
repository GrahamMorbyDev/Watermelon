@extends('open.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel-body">
                <div class="col-md-12">
                    @if(!$user->getAddress())
                        <form action="{{URL::asset('/update/user/address')}}" method="post" class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="form-group">
                                <label for="adr1-{{$user->id}}">Address line 1</label>
                                <input type="text" class="form-control" name="adr1" id="adr1-{{$user->id}}"
                                       value="">
                            </div>
                            <div class="form-group">
                                <label for="adr2-{{$user->id}}">Address line 2</label>
                                <input type="text" class="form-control" name="adr2" id="adr2-{{$user->id}}"
                                       value="">
                            </div>
                            <div class="form-group">
                                <label for="adr3-{{$user->id}}">Address line 3</label>
                                <input type="text" class="form-control" name="adr3" id="adr3-{{$user->id}}"
                                       value="">
                            </div>
                            <div class="form-group">
                                <label for="town-{{$user->id}}">Town</label>
                                <input type="text" class="form-control" name="town" id="town-{{$user->id}}"
                                       value="">
                            </div>
                            <div class="form-group">
                                <label for="country-{{$user->id}}">Country</label>
                                <input type="text" class="form-control" name="country"
                                       id="country-{{$user->id}}" value="">
                            </div>
                            <div class="form-group">
                                <label for="ccode-{{$user->id}}">Country Code</label>
                                <input type="text" class="form-control" name="ccode"
                                       id="ccode-{{$user->id}}"
                                       value="">
                            </div>
                            <div class="form-group">
                                <label for="pcode-{{$user->id}}">Postcode</label>
                                <input type="text" class="form-control" name="pcode"
                                       id="pcode-{{$user->id}}"
                                       value="">
                            </div>
                            <button type="submit" class="btn btn-success pull-right">Subscribe</button>
                        </form>
                    @elseif(!$user->getLatestSubscription())
                        <div class="panel panel-default credit-card-box">
                            <div class="panel-heading display-table">
                                <div class="row display-tr">
                                    <h3 class="panel-title display-td col-md-8">Payment Details Form</h3>
                                    <div class="display-td col-md-4">
                                        <img class="img-responsive pull-right"
                                             src="http://i76.imgup.net/accepted_c22e0.png">
                                    </div>
                                </div>
                            </div>
                        </div>


                        @if(config('settings.verotelPaymentEnabled'))
                            <form id="verotel" action="{{URL::asset('sub')}}" method="post"
                                  class="form-group">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <input type="hidden" name="paymentType" value="verotel">
                                <button type="submit" class="btn btn-success pull-left">Verotel</button>
                            </form>
                        @endif
                        <!-- <button id="payStripe" type="button" class="btn btn-success pull-right">Stripe</button> -->





                        <form style="display: none;" id="stripe" action="{{URL::asset('sub')}}" method="post"
                              class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <input type="hidden" name="paymentType" value="stripe">

                            <div class="form-group">
                                <label for="plan">Plan</label>
                                <select class="form-control" name="plan" id="plan">
                                    <option value="watermelon">membership (£10)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="card-element">Card</label>
                                <div id="card-element" class="field"></div>
                            </div>
                            <button type="submit" class="btn btn-success pull-right">Subscribe</button>
                        </form>
                    @else
                        <?$sub = $user->getLatestSubscription()?>
                        <h1>{{config('settings.welcomeMessage')}}</h1>
                        <p>{{$user->name}}</p>
                        <p>You are subscribed to {{$sub->name}}</p>
                        @if($sub->ends_at != null)
                            <p>Your subscription to {{$sub->name}} expires
                                at {{$sub->ends_at ? $sub->ends_at : 'unknown' }}</p>
                        @else
                            <form id="cancel" action="{{URL::asset('subscribe/cancel')}}" method="post"
                                  class="form-group">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <button type="submit" class="btn btn-success pull-left">Cancel</button>
                            </form>
                        @endif


                    @endif
                </div>
            </div>
        </div>
    </div>

    {{--<script>--}}

    {{--</script>--}}
    <script src="https://js.stripe.com/v3/"></script>
    <script type="javascript">
        $("#payStripe").click(function () {
            alert('bugger');
            $("#stripe").show();
        });

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
@endsection
