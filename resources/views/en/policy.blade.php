@extends('en.layout')
@section('title' , '/الخصوصية والاحكام ')
@section('nav')
<div class="navbar">
    <ul>
     
        <li><a href="{{route('additor.create')}}" class=""> Request serve </a></li>
        <li><a href="{{route('en.work')}}">works</a></li>
        <li><a href="{{route('en.serves')}}"> serves</a></li>
        <li><a href="{{route('en.about')}}"> about us</a></li>
        <li><a href="{{route('en.index')}}" class="active">index</a></li>
    </ul>
  </div>
  @endsection
  
@section('content')


<!-- seaction main -->
<section class="main main-privacy-policy" id="home">
    <div class="overlay"></div>

    <div class="main-content main-content-privacy">
    <h1>  سياسة الخصوصية</h1>
    <p>  المعلومات الخاصة بك عند
        <br> زيارة موقعنا</p>
    </div>
</section>



<section class="privacyy-content">
<div class="privacyy-pargrf">
    <p>
        <span>
            Your Information When Visiting Our Website    </span>
            We process your information in accordance with our privacy policy (please refer to the detailed link). By using our website, you agree to this and acknowledge
             that all the data you provide to us is accurate and precise.       
        
        </p>
</div>
<div class="privacyy-pargrf">
    <p>
        <span>
            Viruses, Cyber Piracy, and Other Cyber Attacks
        </span>

    
        You are not allowed to intentionally misuse our website by sending or uploading any materials containing viruses, Trojan horses, worms, or any other malicious software or code.<p>
You are also not allowed to attempt unauthorized access to our website or the server computer on which our website is stored, or any server, computer, or database connected to our website. Likewise, you are not allowed to attack our website with denial-of-service attacks or distributed denial-of-service attacks.</p>          

<p>
    In the event of a violation of this clause, you will commit a criminal offense under the Computer Misuse Act of 1990. We will report any such violation to the relevant law enforcement authorities and cooperate with them to identify you. In the event of such a violation, your right to use this website will be immediately revoked.    </p>
<p>
    We are not responsible for any losses or damages resulting from distributed denial-of-service attacks, viruses, or any other electronic materials that may damage your computer equipment, software, data, or any other materials owned by you as a result of using our website or downloading any materials posted on it, or using any links to other websites.    </p>
    
</p>
</div>
<div class="privacyy-pargrf">
    <p>
        <span>
            Linking to Our Website            </span>

            You are allowed to link to the homepage of our website, provided you do so in a fair and legal manner that does not damage our reputation or imply any form of partnership, endorsement, or approval on our part if none exists. You should not create a link to connect our website to any site that is not owned by you.        </p>
</div>
<div class="privacyy-pargrf">
    <p>
        <span>
            Complaints 
        </span>

        If you have any inquiries or complaints regarding the content published on our website, please contact us.    </p>
</div>
<div class="privacyy-pargrf">
    <p>
        <span>
            Acceptable Internet Use Policy        </span>
            This Acceptable Use Policy sets forth the terms between you and us, through which you can access our website www.smiledigital.com. The Acceptable Use Policy applies to all visitors and users of our website. Your use of our website signifies your acceptance and agreement to comply with all policies outlined in the Acceptable Use Policy and its associated website usage policies.

    </p>
</div>
<div class="privacyy-pargrf">
    <p>
        <span>
            Changes to the Acceptable Use Policy                        </span>
            We may modify this Acceptable Use Policy at any time by amending this page. You are expected to visit this page periodically to review any changes we make, as you are bound by these changes. Some provisions of this Acceptable Use Policy may be replaced by terms or notifications published on our website.        </p>
</div>
</section>

@endsection