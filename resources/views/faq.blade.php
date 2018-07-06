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
                <img src="images/about.jpg" alt="Mindi Mink faq" class="img-responsive">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 faqQuestions">
                <div>
                    <hr>
                    <h1 class="text-center">Frequently Asked Questions</h1>
                    <hr>
                    <br>
                    <p>Q) Do I need to keep my login information for your site AND for Payment?</p>
                    <p>A) Yes. Please keep your logins safe for access to the site and in the event of needing to contact
                        http://Payment.com</p>
                    <br>
                    <hr>
                    <p>Q) Do I need to keep a record of my Payment subscription number?</p>
                    <p>A) Yes. We will always ask for your Payment subscription number before any technical support can be
                        given.</p>
                    <br>
                    <hr>
                    <p>Q) Which login gives me access to the site?</p>
                    <p>A) Your login is the one you created using our sign up form, not the one you created at http://Payment.com
                        if different.</p>
                    <br>
                    <hr>
                    <p>Q) How do I cancel my membership?</p>
                    <p>A) We are unable to cancel memberships as we do not hold any card or payment details. You must contact
                        http://support.Payment.com/ with your subscription number to stop membership renewing.</p>
                    <hr>
                    <p>Q) Are images on the site downloadable?</p>
                    <p>A) All photographic images can be downloaded from the site by right clicking on the image and selecting
                        "save as".</p>
                    <br><br>
                    <hr>
                    <p>Q) Can videos be downloaded and streamed?</p>
                    <p>A) We currently dont offer download but all content is streamed by clicking on the image
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
                    <a class='btn btn-lg btn-warning center-block' href="{{URL::asset('#')}}">JOIN NOW</a>
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
                <p>TabooMindi.xxx is a membership site that caters to the Stepmom/Son(Other
                    family stepfamily member) Taboo fantasy. The site will be updated on a
                    fortnightly basis and will be a mixture of still images and videos for
                    you, the member to enjoy. So hit the link below to gain access to this
                    premium exclusive content and enjoy seeing mommy.
                </p>
            </div>
        </div>
        <div class="row">
            <hr>
            <div class="col-md-12">
                <div class="col-md-6 text-center">
                    <a href="{{URL::asset('register')}}">
                        <img class="img-responsive" src='{{URL::asset('images/membershipC.jpg')}}'/>
                    </a>
                    <h2>Membership</h2>
                </div>
                <div class="col-md-6 text-center">
                    <a href="https://mypornboutique.com/mindi-mink.html"
                       target="_blank">
                        <img class="img-responsive" src='{{URL::asset('images/shopC.jpg')}}'/>
                    </a>
                    <h2>Shop</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End of access links -->
@endsection