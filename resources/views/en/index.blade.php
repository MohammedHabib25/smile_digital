@extends('en.layout')
@section('title' , '/Index ')
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


<section>
    <div class="landing" id="home">
      <div class="container">
        <div class="text">
          <h1> Digital Smile</h1>
          <p>
             Develop your project, achieve widespread reach, and gain more customers through Smile's services,
             where we provide successful solutions that add tremendous value to our clients</p><br>
        <a href="{{route('iteme.create')}}"><button>Request serve </button></a>  
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
          <h1>About Us </h1>
          <p>
             We provide successful, high-performance solutions that
              add tremendous value to our clients in the United Arab Emirates, Gulf countries,
             and around the world. We work with a large number of prestigious institutions.
          </p><br>
         <a href="{{route('front.about')}}"> <button>...More</button></a>
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
          <h2> Workflow </h2>
        </div>

        <div class="place__container container grid">
          <!--==================== PLACES CARD 1 ====================-->
          <div class="place__card activies-img">
            <img src="{{asset('front/img/Content.png')}}" alt="Content" />
            <p>  Exceptional Content Creators</p>
          </div>

          <!--==================== PLACES CARD 2 ====================-->
          <div class="place__card activies-img">
            <img src="{{asset('front/img/Marketing.png')}}" alt="Marketing" />
            <p>  rofessional Marketing Experts</p>
          </div>

          <!--==================== PLACES CARD 4 ====================-->
          <div class="place__card activies-img">
            <img src="{{asset('front/img/Thinkers.png')}}" alt="Thinkers" />
            <p> Creative Thinkers</p>
          </div>

          <!--==================== PLACES CARD 5 ====================-->
          <div class="place__card activies-img">
            <img src="{{asset('front/img/passion.png')}}" alt="passion" />
            <p>   Passion Drives Our Success</p>
          </div>

          <!--==================== PLACES CARD 6 ====================-->
          <div class="place__card activies-img partners">
            <img src="{{asset('front/img/Partners.png')}}" alt="Partners" />
            <p > Trusted Partners</p>
          </div>

          <!--==================== PLACES CARD 7 ====================-->
          <div class="place__card activies-img">
            <img src="{{asset('front/img/strategies.png')}}" alt="strategies" />
            <p> Effective Strategies</p>
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
          <h2>Our Goals</h2>
          <p>
            We aim to develop your projects, assist in their expansion,
             and become the leading company in the field of digital marketing by
             providing the best services with the help of an experienced team in this field
            
          </p><br>
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
          <h2> Our Services </h2>
          <p>
             We work diligently to provide unlimited customer support and are committed to
              serving our customers, achieving their satisfaction by offering high-quality 
            services at competitive prices, and building long-term working relationships.
          </p>
          <a href="{{route('work.index')}}"> <button> Press here </button></a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Brief -->
@endsection