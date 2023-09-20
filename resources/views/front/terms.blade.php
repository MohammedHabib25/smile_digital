
@extends('front.layout')
@section('title' , '/خدماتنا')
@section('nav')
<div class="navbar">
  <ul>
   
    <li><a href="{{route('front.index')}}" >الرئيسية</a></li>
    <li><a href="{{route('front.about')}}">من نحن</a></li>
    <li><a href="{{route('front.serves')}}"class=""> خدماتنا</a></li>
    <li><a href="{{route('work.index')}}">أعمالنا</a></li>
    <li><a href="{{route('iteme.create')}}" class="">اطلب خدمة</a></li>
  </ul>
</div>
@endsection

@section('content')

<section class="main main-content-terms" id="home">
    <div class="overlay"></div>

    <div class="main-content main-content-privacy">
    <h1>   الشروط و الأحكام</h1>
    <p> يرجى قراءة الشروط و الاحكام 
     
        <br>     بعناية قبل الاستخدام</p>
    </div>
</section>



<section class="privacy-content-2">
<div class="privacy-pargrf-2">
    <p>
        <span>
        اهذه الصفحة (جنباً إلى جنب مع الوثائق المشار إليها) تبلغك بشروط استخدام موقعنا
    </span>

    لإلكتروني www.smiledigital.com كمستخدم مسجل أو زائر. يرجى قراءة  
    <br>
    شروط الاستخدام هذه بعناية فائقة قبل البدء باستخدام الموقع. بزيارتك لهذا الموقع فأنت تقر بالموافقة على شروط الاستخدام وتوافق على الالتزام بها. و يرجى عدم استخدام الموقع إذا كنت لا توافق على شروط الاستخدام هذه
               
        
        </p>
</div>
<div class="privacy-pargrf-2">
    <p>
        <span>
            معلومات عن الموقع   
                 </span>

    
                 هو موقع إلكتروني تديره شركة سمايل ديجيتال www.smiledigital.com من مقرها المسجل في
        
                 Baynunah Tower - 2 Corniche St- Al - Markaziyah West - Al Hisn - Abu Dhabi


    
</p>
</div>
<div class="privacy-pargrf-2">
    <p>
        <span>
            الوصول إلى موقعنا                </span>


            يسمح لك بالوصول إلى موقعنا على أساس مؤقت فقط، ونحن نحتفظ بالحق في سحب أو تعديل الخدمة التي نقدمها على موقعنا من دون سابق إنذار ( يرجى الاطلاع أدناه). نحن غٌر مسؤولين فًي حالة كان موقعنا غير متوفر في أي وقت أو لأية فترة من الزمن لأي سبب من الأسباب
<p>قد نلجأ من وقت لأخر إلى تقييد وصول المستخدمين إلى بعض الأجزاء من موقعنا،أو موقعنا بأكمله.</p>
        </p>
</div>
<div class="privacy-pargrf-2">
    <p>
        <span>
            عند استخدام موقعنا 
        </span>
        يجب أن تمتثل لسياسة الاستخدام المقبول (يرجى الاطلاع أدناه).
        <p>

            أنت أٌيضاً مسؤول عن التأكد من أن جميع الأشخاص الذين يصلون إلى 
            <br>
            موقعنا من خلال خط الإنترنت الخاص بك على علم بشروط الاستخدام، وأنهم ملتزمون بها
            </p>
    </p>
</div>

</section>
@endsection