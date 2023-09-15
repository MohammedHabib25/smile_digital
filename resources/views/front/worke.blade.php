
@extends('front.layout')
@section('title' , '/طلب خدمة')
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
    <div><a href="#"><button>
        خدمات التصميم الجرافيكي
    </button></a></div>
    <div><a href="#"><button>
        خدمات البرمجة
    </button></a></div>
    <div><a href="#"><button>
        خدمات التسويق
    </button></a></div>
</section>
<section>
  <div class="mechanism mechanism-work" id="home">
    
      <div   class="place__container-about place__container-services container grid" >
        <!--==================== PLACES CARD 1 ====================-->
        <a href="https://www.tutorialspoint.com/How-to-use-an-image-as-a-link-in-HTML" target="_blank">
          <div class="activies-img" id="place__card-work">
            <img src="{{asset('front/img/Group 267.png')}}" alt="">
            <div class="portfolio-layer"></div>
          </div>
        </a>

     
          <!--==================== PLACES CARD 1 ====================-->
          <a href="https://www.tutorialspoint.com/How-to-use-an-image-as-a-link-in-HTML" target="_blank">
            <div class="activies-img" id="place__card-work">
              <img src="{{asset('front/img/Group 267.png')}}" alt="">
              <div class="portfolio-layer"></div>
            </div>
          </a>


            <!--==================== PLACES CARD 1 ====================-->
            <a href="https://www.tutorialspoint.com/How-to-use-an-image-as-a-link-in-HTML" target="_blank">
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

        <a href="services.html"> <button>اطلب الان</button></a>
      </div>
    </div>
  </div>
</section>
@endsection