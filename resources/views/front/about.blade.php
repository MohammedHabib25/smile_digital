
@extends('front.layout')
@section('title','/من نحن')
@section('nav')
<div class="navbar">
  <ul>
   
    <li><a href="{{route('front.index')}}" >الرئيسية</a></li>
    <li><a href="{{route('front.about')}}" class="active">من نحن</a></li>
    <li><a href="{{route('front.serves')}}"> خدماتنا</a></li>
    <li><a href="{{route('work.index')}}">أعمالنا</a></li>
    <li><a href="{{route('iteme.create')}}" class="">اطلب خدمة</a></li>
  </ul>
</div>
@endsection
@section('content')
<section class="sec-about">
    <div class="landing" id="home">
      <div class="container">
        <div class="title-about">
          <h1>من نحن</h1>
          <p>
            تعد شركة سمايل ديجيتال شركة برمجة وتصميم وتسويق حيث أن خبرتنا
            ممتدة منذ عام 2015 ورؤيتنا مستقبليه في هذا المجال نسعى لتقديم
            افكار جديده في عالم التسويق
          </p>
        </div>
        <div class="vid-about">
          <video controls preload="" tabindex="-1" src="{{asset('front/img/production_id_5207408 (1080p).mp4')}}"></video>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Us -->

  <!-- Start expertise -->
  <section class="sec-expertise" id="sec-expertise-one">
    <div class="landing" id="home">
      <div class="container">
        <div class="image" id="image">
          <img
            class="img-home"
            src="{{asset('front/img/img-expertise.png')}}"
            alt="img-expertise"
          />
        </div>

        <div class="text" id="text-about">
          <h2>الخبرة</h2>
          <p>
            خبرة ممتدة ومعرفة عميقة وخدمات متميزة في المجال. تتسم بإدراك
            الحلول المبتكرة في هذا المجال
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End expertise -->

      <!-- Start Business -->
      <section class="sec-expertise" id="sec-expertise">
          <div class="landing" id="home">
            <div class="container">
              
              <div class="text business" id="text-about">
                <h2>الأعمال</h2>
                <p class="p-business">
                  شركائنا فالنجاح كثيرون ونتائج العمل معنا تفوق التوقعات قدمنا الاعمال لجميع فئات الشركات في مختلف انحاء العالم.
                </p>
              <a href="{{route('work.index')}}"><button>معرض أعمالنا</button></a>  
              </div>

              <div class="image" id="image">
                  <img
                    class="img-home img-business"
                    src="{{asset('front/img/img-Business.png')}}"
                    alt="img-Business"
                  />
                </div>
            </div>
          </div>
        </section>
        <!-- End Business -->

        <section>
          <div class="mechanism" id="home">
            <div class="container">
              <div class="mechanism-of-action">
                <h2> ما يميزنا</h2>
              </div>
    
              <div class="place__container-about container grid ">
                <!--==================== PLACES CARD 1 ====================-->
                <div class="place__card place__card-about activies-img">
                  <div>
                  <img src="{{asset('front/img/Results.png')}}" alt="Content" />
                  <h3>النتائج</h3>
                  <p> نتائج تسويقية مضمونة</p>
                  </div>
                </div>
    
                <!--==================== PLACES CARD 2 ====================-->
                <div class="place__card place__card-about activies-img">
                  <div>
                  <img src="{{asset('front/img/time.png')}}" alt="Marketing" />
                  <h3>الإتصال</h3>
                  <p>  تواصل دائم و سرعة و دقة في التنفيذ على مدار الساعة</p>
              </div>
                </div>
    
                <!--==================== PLACES CARD 4 ====================-->
                <div class="place__card place__card-about activies-img">
                  <div>
                  <img src="{{asset('front/img/team.png')}}" alt="Thinkers" />
                  <h3>فريق العمل</h3>
                  <p> فريق عمل ذو خبرة عالية لسنوات عديدة</p>
              </div>
                </div>
    
                <!--==================== PLACES CARD 5 ====================-->
                <div class="place__card place__card-about activies-img">
                  <div>
                  <img src="{{asset('front/img/strategy.png')}}" alt="passion" />
                  <h3>الإستراتجية</h3>
                  <p> استراتجيات متجددة خلال الشهر</p>
              </div>
                </div>
  
              </div>
            </div>
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