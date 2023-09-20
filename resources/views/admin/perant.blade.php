<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Digital Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('cms/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('cms/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('cms/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" />
  </head>

  
  <body>
    
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar" href="{{route('iteme.index')}}"><img src="{{asset('front/img/logo.png')}}" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('cms/images/logo-mini.svg')}}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
         
          <ul class="navbar-nav navbar-nav-right">
           

            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
               
                <div class="nav-profile-text d-flex flex-column">
                 
                  <span class="text-secondary text-small"></span>
                </div>
              </a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="{{ route('iteme.index') }}">
                <span class="menu-title">Request serves Ar</span>
                <i class="mdi   mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('additor.index') }}">
                <span class="menu-title">Request serves En</span>
                <i class="mdi   mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                  <span class="menu-title">Project</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-medical-bag menu-icon"></i>
                </a>
                <div class="collapse" id="general-pages">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('work.create')}}"> Create project </a></li>
                    
                   
                  </ul>
                </div>
                <div class="collapse" id="general-pages">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('work.index')}}"> View project </a></li>
                    
                   
                  </ul>
                </div>
              </li>
           
            <li class="nav-item">
              <a class="nav-link" href="{{ route('product.index') }}">
                <span class="menu-title">View Serves</span>
                <i class="mdi  mdi-comment-check menu-icon"></i>
              </a>
            </li>
           {{--  <li class="nav-item">
              <a class="nav-link" href="{{ route('product.create') }}">
                <span class="menu-title">Add Serves</span>
                <i class="mdi  mdi mdi-plus-box menu-icon"></i>
              </a>
            </li> --}}
              </span>
            </li>
          </ul>
        </nav>


        @yield('content')

      
      <br><br>
        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block"></span>
            <span class="float-none float-sm-end mt-1 mt-sm-0 text-end">  خبرة ممتدة، خدمات متميزة, انتشار واسع شركة التسويق والاستشارات الرائدة فالمجال</span>
          </div>
        </footer>

        
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('cms/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('cms/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('cms/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('cms/js/off-canvas.js')}}"></script>
    <script src="{{asset('cms/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('cms/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('cms/js/dashboard.js')}}"></script>
    <script src="{{asset('cms/js/todolist.js')}}"></script>

   
    @yield('scripts')
    <!-- End custom js for this page -->
  </body>
</html>