<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>سمايل ديجيتال  @yield('title')</title>

    <!-- css style -->
    <link rel="icon" href="{{asset('front/img/logo.png')}}" />
    <link rel="stylesheet" href="{{asset('front/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/media-query.css')}}" />
  </head>
  <body>
    <!-- Start header -->

    <header>
      <div class="open-menu">
        <span>
          <i onclick="show_nav()" class="fa fa-bars" aria-hidden="true"></i>
        </span>
      </div>

      <div class="logo">
        <a href="{{route('front.index')}}">
          <img src="{{asset('front/img/logo.png')}}" alt="logo" />
        </a>
      </div>

      @yield('nav')

      <div class="language">
        <a href="{{route('en.index')}}">
        <span>
          English
          <img
            src="{{asset('front/img/icon language.png')}}"
            alt="icon language"
            class="icon-language"
          />
        </span>
      </a>
      </div>
    </header>

    <div class="mobile-nav">
      <div class="close-mnuo">
        <i onclick="disply_nav()" class="fa fa-times" aria-hidden="true"></i>
      </div>
      <ul>
        <li><a href="index.html">الرئيسية</a></li>
        <li><a href="about-us.html">من نحن</a></li>
        <li><a href="services.html"> خدماتنا</a></li>
        <li><a href="works.html">أعمالنا</a></li>
        <li><a href="service-request.html" class="active-mobile">اطلب خدمة</a></li>
      </ul>
    </div>

        @yield('content')




        <footer>
            <br />
            <br />
            <div class="container-footer">
              <div class="container-img">
                <img src="{{asset('front/img/img-footer.png')}}" alt="img-footer" />
                <p>
                  خبرة ممتدة، خدمات متميزة, انتشار واسع شركة التسويق والاستشارات
                  الرائدة فالمجال
                </p>
              </div>
      
              <div class="container-social">
                <a href="{{route('front.terms')}}">الشروط و الأحكام</a>
                <br />
                <a href="{{route('front.policy')}}">سياسة الخصوصية</a>
                <br />
                <br />
                <p>تواصل معنا!</p>
                <div class="social">
                  <a href="https://wa.me/+971562923555" target="_blank"> <i class="fa-brands fa-whatsapp"></i></a>
                  <a href="https://x.com/smiledigitaluae " target="_blank"> <i class="fa-brands fa-twitter" target="_blank"></i></a>
                  <a href="https://instagram.com/smiledigital.uae" target="_blank"> <i class="fa-brands fa-instagram"></i></a>
                  <a href="https://www.facebook.com/profile.php?id=100091399484398" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                </div>
              </div>
            </div>
          </footer>
          <!-- Footer -->
      
          <script src="{{asset('front/js/script.js')}}"></script>
     
   
    @yield('scripts')
    <!-- End custom js for this page -->
  </body>
</html>