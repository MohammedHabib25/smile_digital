
@extends('en.layout')
@section('title' , '/serves')
@section('nav')
<div class="navbar">
  <ul>
   
    <li><a href="{{route('additor.create')}}" class=""> Request serve </a></li>
    <li><a href="{{route('en.work')}}">works</a></li>
    <li><a href="{{route('en.serves')}}" class="active"> serves</a></li>
    <li><a href="{{route('en.about')}}"> about us</a></li>
    <li><a href="{{route('en.index')}}" class="">index</a></li>
  </ul>
</div>
@endsection

@section('content')

<section class="sec-services">
    <div class="landing landing-services" id="home">
      <div class="container">
          
        <div class="text text-services">
          <h1>Our services</h1>
          <p>
            We are Smile Electronic Services Company. Our team accomplishes your tasks with
             extreme speed and high efficiency, employing specialized personnel in website development, mobile application programming, various types of design,
             account management, communication, and the production of motion graphics videos
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
              <h3>Website Design and Development</h3>
                 <a href="{{route('iteme.create')}}"> <button> Request the service </button></a>
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
            <h3> Digital Marketing</h3>
               <a href="{{route('iteme.create')}}"> <button> Request the service </button></a>
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
              <h4>Social Media Platform Management</h4>
                 <a href="{{route('iteme.create')}}"> <button> Request the service </button></a>
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
              <h4>Programming Services</h4>
                 <a href="{{route('iteme.create')}}"> <button> Request the service </button></a>
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
            <h3> Marketing Consulting Services</h3>
               <a href="{{route('iteme.create')}}"> <button> Request the service </button></a>
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
              <h3>Logo and Advertising Design</h3>
              <a href="{{route('iteme.create')}}"> <button> Request the service </button></a>
            </div>
          </div>
        </div>
     
    </div>
  </section>
  @endsection