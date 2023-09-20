
@extends('en.layout')
@section('title','/About us ')
@section('nav')
<div class="navbar">
  <ul>
   
 
    <li><a href="{{route('additor.create')}}" class=""> Request serve </a></li>
    <li><a href="{{route('en.work')}}">works</a></li>
        <li><a href="{{route('en.serves')}}"> serves</a></li>
    <li><a href="{{route('en.about')}}" class="active"> about us</a></li>
    <li><a href="{{route('en.index')}}" >index</a></li>
  </ul>
</div>
@endsection
@section('content')
<section class="sec-about">
    <div class="landing" id="home">
      <div class="container">
        <div class="text" id="text-about">
          <h1>About us</h1>
          <p>
            Smile Digital is a programming, design and marketing company, as our
             experience has extended since 2015 and our vision is
             future in this field. We seek to provide new ideas in the world of marketing.
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
          <h2>Experience</h2>
          <p>Extended experience, deep knowledge and distinguished 
            services in the field. It is characterized by awareness
            Innovative solutions in this field
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
                <h2>Works</h2>
                <p class="p-businesss">
                  Our success partners are many and the results of working with us exceed expectations. We have provided business to all categories 
                  of companies in various parts of the world   </p><br>
              <a href="{{route('work.index')}}"><button> What sets us apart</button></a>  
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
                <h2>  What sets us apart</h2>
              </div>
    
              <div class="place__container-about container grid ">
                <!--==================== PLACES CARD 1 ====================-->
                <div class="place__card place__card-about activies-img">
                  <div>
                  <img src="{{asset('front/img/Results.png')}}" alt="Content" />
                  <h3> Results</h3>
                  <p>  Guaranteed marketing results</p>
                  </div>
                </div>
    
                <!--==================== PLACES CARD 2 ====================-->
                <div class="place__card place__card-about activies-img">
                  <div>
                  <img src="{{asset('front/img/time.png')}}" alt="Marketing" />
                  <h3>Connection</h3>
                  <p>  
                    Constant communication, speed and accuracy in implementation</p>
              </div>
                </div>
    
                <!--==================== PLACES CARD 4 ====================-->
                <div class="place__card place__card-about activies-img">
                  <div>
                  <img src="{{asset('front/img/team.png')}}" alt="Thinkers" />
                  <h3>work team</h3>
                  <p>  
                    A highly experienced work team for many years</p>
              </div>
                </div>
    
                <!--==================== PLACES CARD 5 ====================-->
                <div class="place__card place__card-about activies-img">
                  <div>
                  <img src="{{asset('front/img/strategy.png')}}" alt="passion" />
                  <h3>Strategy</h3>
                  <p> 
                    Renewed strategies during the month</p>
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
                <h2> ? Do you need a successful project</h2>

                <a href="{{route('iteme.create')}}"> <button>  Order now</button></a>
              </div>
            </div>
          </div>
        </section>
        @endsection