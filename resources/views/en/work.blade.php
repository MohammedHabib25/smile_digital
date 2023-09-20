
@extends('en.layout')
@section('title' , '/works ')
@section('nav')
<div class="navbar">
  <ul>
   
    <li><a href="{{route('additor.create')}}" class=""> Request serve </a></li>
    <li><a href="{{route('en.work')}}" class="active">works</a></li>
    <li><a href="{{route('en.serves')}}"> serves</a></li>
    <li><a href="{{route('en.about')}}"> about us</a></li>
    <li><a href="{{route('en.index')}}" class="">index</a></li>
  </ul>
</div>
@endsection
@section('content')

<!-- seaction main -->
<section class="main" id="home">
    <div class="overlay"></div>

    <div class="main-content">
    <h1> Gallery of our work</h1>
    <p>Works we are proud of</p>
    </div>
</section>

<section class="sec-btn">
  <div><a href="{{route('en.graf')}}"><button>
    Graphic design services
  </button></a></div>
  <div><a href="{{route('en.prog')}}"><button>
    Programming Services
  </button></a></div>
  <div><a href="{{route('en.mark')}}"><button>
    Marketing services
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
      <h4> More</h4>
  </div>
  
</section>

<section class="sec-brief">
  <div class="brief-about" id="home">
    <div class="container">
      <div class="text">
        <h2>  ?Do you need a successful project</h2>

        <a href="{{route('iteme.create')}}"> <button>Order now </button></a>
      </div>
    </div>
  </div>
</section>
@endsection