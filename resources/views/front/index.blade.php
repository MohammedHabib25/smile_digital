@extends('front.layout')
@section('title' , '/الصفحة الرئيسية')
@section('nav')
<div class="navbar">
  <ul>
   
    <li><a href="{{route('front.index')}}" class="active">الرئيسية</a></li>
    <li><a href="{{route('front.about')}}">من نحن</a></li>
    <li><a href="{{route('front.serves')}}"> خدماتنا</a></li>
    <li><a href="{{route('work.index')}}">أعمالنا</a></li>
    <li><a href="{{route('iteme.create')}}" class="">اطلب خدمة</a></li>
  </ul>
</div>
@endsection



@section('content')


<section>
    <div class="landing" id="home">
      <div class="container">
        <div class="text">
          <h1>سمايل ديجيتال</h1>
          <p>
            طور من مشروعك وحقق انتشار واسع واكسب مزيد من العملاء من خلال خدمات
            شركة سمايل حيث نقدم حلول ناجحة تضف قيمة هائلة الى عمائلنا!
          </p>
        <a href="{{route('iteme.create')}}"><button>طلب خدمة</button></a>  
        </div>

        <div class="image">
          <img class="img-home" src="{{asset('front/img/img home.png')}}" alt="img-home" />
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

  <!-- Start about -->
  <section>
    <div class="landing" id="home">
      <div class="container">
        <div class="image" id="image">
          <img class="img-home" src="{{asset('front/img/img-about.png')}}" alt="img-home" />
          <img
            src="{{asset('front/img/back-img-home-about.png')}}"
            alt="back-img-home"
            class="back-img-home-about"
          />
        </div>

        <div class="text" id="text-about">
          <h2>من نحن</h2>
          <p>
            نقدم حلولاً ناجحة فائمة الأداء تضيف قيمة هائلة إلى عملائنا في دولة
            الإمارات ودول الخليج والعالم ونعمل مع عدد كبير من المؤسسات
            المرموقة.
          </p>
         <a href="{{route('front.about')}}"> <button>المزيد...</button></a>
        </div>
      </div>
    </div>
  </section>
  <!-- End about -->

  <!-- Start Mechanism of Action -->
  <section>
    <div class="mechanism" id="home">
      <div class="container">
        <div class="mechanism-of-action">
          <h2>آلية العمل</h2>
        </div>

        <div class="place__container container grid">
          <!--==================== PLACES CARD 1 ====================-->
          <div class="place__card activies-img">
            <img src="{{asset('front/img/Content.png')}}" alt="Content" />
            <p>رواد المحتوى بامتياز</p>
          </div>

          <!--==================== PLACES CARD 2 ====================-->
          <div class="place__card activies-img">
            <img src="{{asset('front/img/Marketing.png')}}" alt="Marketing" />
            <p>خبراء التسويق الاحترافي</p>
          </div>

          <!--==================== PLACES CARD 4 ====================-->
          <div class="place__card activies-img">
            <img src="{{asset('front/img/Thinkers.png')}}" alt="Thinkers" />
            <p>مفكرون مبدعون</p>
          </div>

          <!--==================== PLACES CARD 5 ====================-->
          <div class="place__card activies-img">
            <img src="{{asset('front/img/passion.png')}}" alt="passion" />
            <p>الشغف دافعنا للنجاح</p>
          </div>

          <!--==================== PLACES CARD 6 ====================-->
          <div class="place__card activies-img partners">
            <img src="{{asset('front/img/Partners.png')}}" alt="Partners" />
            <p >شركاء موثوقون</p>
          </div>

          <!--==================== PLACES CARD 7 ====================-->
          <div class="place__card activies-img">
            <img src="{{asset('front/img/strategies.png')}}" alt="strategies" />
            <p>استراتيجيات فعّالة</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End Mechanism of Action -->

  <!-- Start Objectives -->
  <section>
    <div class="landing" id="home">
      <div class="container">
        <div class="text" id="objectives">
          <h2>أهدافنا</h2>
          <p>
            نسعى لتطوير مشاريعكم والمساعده في انتشارها وان نكون الشركة الرائده
            في مجال التسويق الالكتروني من خلال تقديم افضل الخدمات بمساعدة فريق
            ذو خبره طويله في هذا المجال.
          </p>
        </div>

        <div class="image" id="image">
          <img
            class="img-home"
            id="img-home"
            src="{{asset('front/img/img Objectives.png')}}"
            alt="img-home"
          />
          <img
            src="{{asset('front/img/back-img-home.png')}}"
            alt="back-img-home"
            class="back-img-home"
          />
        </div>
      </div>
    </div>
  </section>
  <!-- End Objectives -->

  <!-- Start Brief -->
  <section>
    <div class="brief" id="home">
      <div class="container">
        <div class="text">
          <h2>نبذة عن خدماتنا</h2>
          <p>
            العمل بإتقان لتقديم الدعم اللامحدود للعملاء والالتزام في خدمة
            عملائنا وتحقيق رضاهم بتوفير خدمات ذات جودة فائقة بأسعار تنافسية
            وبناء علاقات عمل طويلة المدى.
          </p>
          <a href="{{route('work.index')}}"> <button>اضغط هنا </button></a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Brief -->
@endsection