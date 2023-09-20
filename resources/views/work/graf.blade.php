
@extends('front.layout')
@section('title' , '/طلب خدمة')
@section('nav')
<div class="navbar">
  <ul>
   
    <li><a href="{{route('front.index')}}" >الرئيسية</a></li>
    <li><a href="{{route('front.about')}}">من نحن</a></li>
    <li><a href="{{route('front.serves')}}"> خدماتنا</a></li>
    <li><a href="{{route('work.index')}}" class="active">أعمالنا</a></li>
    <li><a href="{{route('iteme.create')}}" class="">اطلب خدمة</a></li>
  </ul>
</div>
@endsection
@section('content')

<!-- seaction main -->
<section class="main" id="home">
    <div class="overlay"></div>

    <div class="main-content">
    <h1> معرض أعمالنا</h1>
    <p>أعمال نفتخر بها</p>
    </div>
</section>

<section class="sec-btn">
    <div><a href="{{route('work.graf')}}"><button>
        خدمات التصميم الجرافيكي
    </button></a></div>
    <div><a href="{{route('work.prog')}}"><button>
        خدمات البرمجة
    </button></a></div>
    <div><a href="{{route('work.mark')}}"><button>
        خدمات التسويق
    </button></a></div>
</section>
<section>
  <div class="mechanism mechanism-work" id="home">
    
      <div   class="place__container-about place__container-services container grid" >
        <!--==================== PLACES CARD 1 ====================-->
        <a href="" target="_blank">
          <div class="activies-img" id="place__card-work">
            <img src="{{asset('front/img/Group 267.png')}}" alt="">
            <div class="portfolio-layer"></div>
          </div>
        </a>

     
          <!--==================== PLACES CARD 1 ====================-->
          <a href="" target="_blank">
            <div class="activies-img" id="place__card-work">
              <img src="{{asset('front/img/Group 267.png')}}" alt="">
              <div class="portfolio-layer"></div>
            </div>
          </a>


            <!--==================== PLACES CARD 1 ====================-->
            <a href="" target="_blank">
              <div class="activies-img" id="place__card-work">
                <img src="{{asset('front/img/Group 267.png')}}" alt="">
                <div class="portfolio-layer"></div>
              </div>
            </a>
           
           
      </div>
   
  </div>
  <div class="show-more">
      <h4>عرض المزيد</h4>
  </div>
  
</section>

<section class="sec-brief">
  <div class="brief-about" id="home">
    <div class="container">
      <div class="text">
        <h2>  هل تحتاج مشروع ناجح؟</h2>

        <a href="{{route('iteme.create')}}"> <button>اطلب الان</button></a>
      </div>
    </div>
  </div>
</section>
@endsection