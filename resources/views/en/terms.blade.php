
@extends('en.layout')
@section('title' , '/خدماتنا')
@section('nav')
<div class="navbar">
  <ul>
   
    <li><a href="{{route('additor.create')}}" class=""> Request serve </a></li>
    <li><a href="{{route('en.work')}}">works</a></li>
    <li><a href="{{route('en.serves')}}"> serves</a></li>
    <li><a href="{{route('en.about')}}"> about us</a></li>
    <li><a href="{{route('en.index')}}" class="">index</a></li>
  </ul>
</div>
@endsection

@section('content')

<section class="main main-content-terms" id="home">
    <div class="overlay"></div>

    <div class="main-content main-content-privacyy">
    <h1>   Terms and Conditions </h1>
    <p>   Please read the terms and conditions
     
        <br>     carefully before use</p>
    </div>
</section>



<section class="privacyy-content-2">
<div class="privacyy-pargrf-2">
    <p>
        <span>
            This page (together with the documents indicated) informs you of the terms of use of our website    </span>

            For electronic www.smiledigital.com as a registered user or visitor.<br> Please readThese Terms of Use are very carefully prepared before you start using the Site. By visiting this site, you acknowledge and agree to be bound by the Terms of Use.
             Please do not use the Site if you do not agree to these Terms of Use.
        </p>
</div>
<div class="privacyy-pargrf-2">
    <p>
        <span>
            Location Information   
                 </span>
                 It is a website operated by Smile Digital www.smiledigital.com from its registered headquarters in Baynunah Tower
                  - 2 Corniche St- Al - Markaziyah West - Al Hisn - Abu Dhabi
    
</p>
</div>
<div class="privacyy-pargrf-2">
    <p>
        <span> Access to our website   </span>


<p> You are permitted to access our site on a temporary basis only, 
    and we reserve the right to withdraw or modify the service we provide on our site without notice (please see below). We are not responsible in the event that our site is unavailable at any time or for any period of time for any reason.From time to time, we may restrict users' access to certain parts of our site, or our entire site.</p>
        </p>
</div>
<div class="privacyy-pargrf-2">
    <p>
        <span>
            When using our website
        </span>
        You must comply with the Acceptable Use Policy (please see below).You are also responsible for ensuring that all people arriving atOur website through your 
        internet line is aware of the terms of use and they are committed to them        <p>
            You are also responsible for ensuring that all people arriving at
            <br>
            Our website through your internet line is aware of the terms of use and they are committed to them            </p>
    </p>
</div>

</section>
@endsection