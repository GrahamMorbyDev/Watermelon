@extends('layouts.open')

@section('content')

    <!--Header -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="{{asset("images/enter.jpg")}}"
         style="height: 400px; margin-top: -25px;">
    </div>
    <!-- header finish -->

    <!-- Info to start -->
    <div class="container globalPadding">
        <div class="row">
            <div class="col-lg-12 text-center">
                <hr>
                <img src="images/about.jpg" alt="About Superbound">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 faqQuestions">
                <div>
                    <hr>
                    <h1 class="text-center">Frequently Asked Questions</h1>
                    <hr>
                    <br>
                    <p>Q) Do I need to keep my login information for your site AND for Zombaio?</p>
                    <p>A) Yes. Please keep your logins safe for access to the site and in the event of needing to contact
                        http://zombaio.com</p>
                    <br>
                    <hr>
                    <p>Q) Do I need to keep a record of my Zombaio subscription number?</p>
                    <p>A) Yes. We will always ask for your Zombaio subscription number before any technical support can be
                        given.</p>
                    <br>
                    <hr>
                    <p>Q) Which login gives me access to the site?</p>
                    <p>A) Your login is the one you created using our sign up form, not the one you created at http://zombaio.com
                        if different.</p>
                    <br>
                    <hr>
                    <p>Q) How do I cancel my membership?</p>
                    <p>A) We are unable to cancel memberships as we do not hold any card or payment details. You must contact
                        http://support.zombaio.com/ with your subscription number to stop membership renewing.</p>
                    <hr>
                    <p>Q) Are images on the site downloadable?</p>
                    <p>A) All photographic images can be downloaded from the site by right clicking on the image and selecting
                        "save as".</p>
                    <br><br>
                    <hr>
                    <p>Q) Can videos be downloaded and streamed?</p>
                    <p>A) Yes. Videos are downloaded by clicking on the download button or streamed by clicking on the image
                        for the video.</p>
                    <br>
                    <hr>
                    <p>Q) I have downloaded a video and I cannot get it to play?</p>
                    <p>A) In the event of a video not playing after downloading, it may be that you are using an older version
                        of Internet Explorer and you may have to add the text ".mp4" after the file name. All other browsers
                        are supported. If you are unable to play the video using your current video player try VLC Media Player:
                        http://www.videolan.org/vlc/index.html.</p>
                    <br>
                    <hr>
                    <p>Q) I have requested technical support and have not heard anything back yet?</p>
                    <p>A) We endeavour to answer tech support requests within 12 hours, but depending on factors such as level
                        of support needed, different time zones etc., these can take up to a maximum of 48 hours
                        to be answered/read.</p>
                    <br>
                    <hr>
                    <p>Q) I am interested in ordering a custom video shoot, what do I do?</p>
                    <p>A) In the first instance, email: johnny.d.fetish@gmail expressing your interest and you will be sent a
                        price list and basic information that we will require from you. For further information go to the
                        Customs page.</p>
                    <br>
                    <hr>
                    <p>Q) Will my custom be exactly what I asked for in my script?</p>
                    <p>A) Your script will be followed as closely as possible, but may vary due to time restrictions, the model's
                        limitations and other logistical issues that may arise during shooting. We reserve the right to deny any
                        activity that may be deemed unsafe or unacceptable to the models or producers. These concerns will
                        generally be addressed before any payment is accepted, but may also arise during the shoot and
                        require adjustment.</p>
                    <br>
                    <hr>
                    <p>Q) Can I get graphic nudity in my custom?</p>
                    <p>A) Generally speaking, yes you can. We work with a wide variety of models in the fetish and adult industry
                        as well as glamor and amateur models, so it depends upon the model requested. Most models at
                        Superbound consent to varying degrees of nudity ranging from full to implied. Generally,
                        adult performers will be fine with explicit nudity while some models may only work within
                        varying limitations such as topless and partially clothed etc.</p>
                    <br>
                    <hr>
                    <p>Q) Can I attend a shoot?</p>
                    <p>A) As a general rule, no. Only cast and crew are allowed on-set.
                        Exceptions are possible depending upon the model(s) involved and will require additional costs.</p>
                    <br>
                    <hr>
                    <p>Q) Do you need male models?</p>
                    <p>A) No. This is a female-centric site.</p>
                    <br>
                    <hr>
                    <p>Q) Are you looking for riggers?</p>
                    <p>A) No. We have a variety of riggers with varying degrees of skill and expertise.</p>
                    <br>
                    <hr>
                    <p>Q) I sent in some feedback or ideas and did not receive a response?</p>
                    <p>A) Although we strive to read and respond to all correspondence in a diligent manner, we cannot always
                        reply directly due to sheer volume, time constraints and other factors. We welcome all constructive
                        correspondence and will take into consideration your views and opinions. </p>
                    <br>
                    <hr>
                    <a class='btn btn-lg btn-default center-block' href="{{URL::asset('#')}}">JOIN NOW</a>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <!-- Info to start finish -->

    <!-- access links -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <hr>
                <h1>Membership Access & and other purchasing options</h1>
                <p>Superbound.com is a membership site that updates twice a week with brand new videos as well as a
                    multitude of still images. As time passes more and more videos and images will accumulate with
                    videos generally being retired after 3 months (but still available at Superbound CS4).
                    Membership does have its privileges!
                </p>
            </div>
        </div>
        <div class="row">
            <hr>
            <div class="col-md-12">
                <div class="col-md-6">
                    <a href="{{URL::asset('#')}}">
                        <img class="img-responsive" src='{{URL::asset('images/membershipBW.jpg')}}'
                             onmouseover="this.src='{{URL::asset('images/membershipC.jpg')}}';"
                             onmouseout="this.src='{{URL::asset('images/membershipBW.jpg')}}';" />
                    </a>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="{{URL::asset('#')}}">
                        <img class="img-responsive" src='{{URL::asset('images/shopBW.jpg')}}'
                             onmouseover="this.src='{{URL::asset('images/shopC.jpg')}}';"
                             onmouseout="this.src='{{URL::asset('images/shopBW.jpg')}}';" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End of access links -->
@endsection