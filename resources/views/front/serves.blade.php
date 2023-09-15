
@extends('front.layout')
@section('title' , '/خدماتنا')
@section('content')

<section class="sec-services">
    <div class="landing landing-services" id="home">
      <div class="container">
          
        <div class="text text-services">
          <h1>خدماتنا</h1>
          <p>
            بصفتنا شركة سمايل للخدمات الالكترونيه , يقوم فريقنا ب انجاز اعمالك
            بسرعه فائقة و كفائة عاليه مع موظفين شركة مختصة في انشاء المواقع
            الالكترونية و برامج تطبيقات الهواتف الذكية و التصاميم بانواعها و
            إدارة حسابات و التواصل و الصفحات و انتاج فيديوهات الموشن جرافيك.
          </p>
        </div>

        <div class="image image-services">
          <img class="img-home" src="{{asset('front/img/mac 1.png')}}" alt="Services-img" />
          <img
            src="{{asset('front/img/back-img-home.png')}}"
            alt="back-img-home"
            class="back-img-home"
          />
        </div>
      </div>
  </div>
  </section>
  <!-- End Home -->
  <br />
  <br />
  <section>
    <div class="mechanism" id="home">
      
        <div
          class="place__container-about place__container-services container grid"
        >
          <!--==================== PLACES CARD 1 ====================-->
          <div
            class="place__card place__card-about place__card-services activies-img"
          >
            <div>
              <div>
                <img src="{{asset('front/img/sql.png')}}" alt="Website design and development" />
              </div>
              <h3>تصميم وتطوير المواقع</h3>
                 <a href="{{route('iteme.create')}}"> <button>اطلب الخدمة </button></a>
            </div>
          </div>

          <!--==================== PLACES CARD 2 ====================-->
          <div
          class="place__card place__card-about place__card-services activies-img"
        >
          <div class="mark">
            <div>
              <img src="{{asset('front/img/Marketing-serv.png')}}" alt="Marketing" />
            </div>
            <h3> التسويق الإلكتروني</h3>
               <a href="{{route('iteme.create')}}"> <button>اطلب الخدمة </button></a>
          </div>
        </div>

          <!--==================== PLACES CARD 4 ====================-->
          <div
            class="place__card place__card-about place__card-services activies-img"
          >
            <div>
              <div>
                <img src="{{asset('front/img/Social media.png')}}" alt="Social media" />
              </div>
              <h3>إدارة منصات التواصل الاجتماعي</h3>
                 <a href="{{route('iteme.create')}}"> <button>اطلب الخدمة </button></a>
            </div>
          </div>

          <!--==================== PLACES CARD 5 ====================-->
          <div
            class="place__card place__card-about place__card-services activies-img"
          >
            <div class="prog">
              <div>
                <img src="{{asset('front/img/html5.png')}}" alt="Programming services" />
              </div>
              <h3>خدمات البرمجة</h3>
                 <a href="{{route('iteme.create')}}"> <button>اطلب الخدمة </button></a>
            </div>
          </div>

          <!--==================== PLACES CARD 5 ====================-->
          <div
          class="place__card place__card-about place__card-services activies-img"
        >
          <div>
            <div>
              <img src="{{asset('front/img/QuestionCircleOutlined.png')}}" alt="Marketing consulting services" />
            </div>
            <h3> خدمات الاستشارة التسويقية</h3>
               <a href="{{route('iteme.create')}}"> <button>اطلب الخدمة </button></a>
          </div>
        </div>

          <!--==================== PLACES CARD 5 ====================-->
          <div
            class="place__card place__card-about place__card-services activies-img"
          >
            <div>
              <div>
                <img src="{{asset('front/img/design.png')}}" alt="design" />
              </div>
              <h3>تصميم شعارات و الإعلانات</h3>
              <a href="{{route('iteme.create')}}"> <button>اطلب الخدمة </button></a>
            </div>
          </div>
        </div>
     
    </div>
  </section>
  @endsection