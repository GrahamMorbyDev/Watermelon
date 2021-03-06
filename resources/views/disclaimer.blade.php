@extends('layouts.members')

@section('content')
    <div class="container">

        <!-- Disclaimer Text -->
        <div class="row">
            <div class="col-md-12 globalMargin">
                <h1 class="text-center">{{ config('app.name', 'Placeholder') }} Site Agreement</h1>
                <hr>
                <p>This Website contains sexually-oriented adult content which may include visual images and
                    verbal descriptions of nude adults, adults engaging in sexual acts, and other audio and
                    visual material of a sexually-explicit nature. Permission to enter this Website and to
                    view and download its contents is strictly limited to consenting adults who affirm that
                    the following conditions apply:</p>
                <ol>
                    <li>That you are 18 years of age or older (21-years old where 18 is not the age of majority),
                        and that you are voluntarily choosing to view and access such sexually-explicit images
                        and content for your own personal use.</li>
                    <li>That you intend to view the sexually-explicit material in the privacy of your home, or
                        in a place where there are no other persons viewing this material who are either
                        minors, or who may be offended by viewing such material.</li>
                    <li>That you are familiar with your local community standards and that the sexually-explicit
                        materials which you have chosen to view and/or download from this Website are well within
                        the contemporary community standards of acceptance and tolerance of your community for
                        sexually-explicit material.</li>
                </ol>
                <p>All content and mentions of Mother, Step Mother, Mom, Mommy and Son, Daughter or any any other
                    family member relationship are acted out in pure fantasy. At no time are two blood-related
                    members of a family having any sexual interactions or intercourse. Thus, these are pure, tongue
                    in cheek adventuristic fantasy scenarios, without exception fully consensual, contextual.</p>

                <p>All content on this site is owned and controlled by Butterfly Software Developments UK. All content is considered
                    premium and no sharing, trading or posting to third party sites should take place without the
                    consent of the owner. If a member is found to be doing any of the above his/her membership will
                    be revoked and no money will be refunded for loss of time left on the subscription.</p>

                <p>If all of these conditions apply to you, you are permitted to ENTER. If any of these conditions
                    do not apply to you, you are forbidden from entering and viewing the contents of this Website
                    and you should now leave.</p>



            </div>
        </div>
        <!-- End Disclaimer Text -->

        <!-- Verify Form -->
        <div class="row">

            <div class="col-md-12">
                <hr>
                <h3 class="text-center">By ENTERING your date of birth, you are stating you are over the age of 18 and
                    agree with the <a href="{{URL::asset('terms')}}">Terms & Conditions</a>.
                    If you don't understand the above statement, you must LEAVE</h3>
                <form class="form-inline" id="dateForm" method="post" action="{{URL::asset('storedb')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-md-2 col-md-offset-2">
                        <select name="month" id="month" class="form-control">
                            <option> - Month - </option>
                            <option value="January">January</option>
                            <option value="Febuary">Febuary</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="day" id="day" class="form-control">
                            <option> - Day - </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="year" id="year" class="form-control">
                            <option> - Year - </option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                            <option value="1975">1975</option>
                            <option value="1974">1974</option>
                            <option value="1973">1973</option>
                            <option value="1972">1972</option>
                            <option value="1971">1971</option>
                            <option value="1970">1970</option>
                            <option value="1969">1969</option>
                            <option value="1968">1968</option>
                            <option value="1967">1967</option>
                            <option value="1966">1966</option>
                            <option value="1965">1965</option>
                            <option value="1964">1964</option>
                            <option value="1963">1963</option>
                            <option value="1962">1962</option>
                            <option value="1961">1961</option>
                            <option value="1960">1960</option>
                            <option value="1959">1959</option>
                            <option value="1958">1958</option>
                            <option value="1957">1957</option>
                            <option value="1956">1956</option>
                            <option value="1955">1955</option>
                            <option value="1954">1954</option>
                            <option value="1953">1953</option>
                            <option value="1952">1952</option>
                            <option value="1951">1951</option>
                            <option value="1950">1950</option>
                            <option value="1949">1949</option>
                            <option value="1948">1948</option>
                            <option value="1947">1947</option>
                        </select>
                        <input type="hidden" name="ip" id="ip" value="<?= $_SERVER['REMOTE_ADDR'] ?>">
                    </div>
                    <input type="submit" class="btn btn-success" id="select" value="Submit">
                </form>
            </div>

        </div>
        <!-- End Verify Form -->
    </div>
@stop