<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}} - @yield('title')</title>

    <link rel="stylesheet" href="{{asset('assets/css/master.css')}}"/>
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <!-- SWITCHER-->
    <!-- SWITCHER-->
    <link href="{{asset('assets/plugins/switcher/css/switcher.css')}}" rel="stylesheet" id="switcher-css" media="all"/>
    <link href="{{asset('assets/plugins/switcher/css/color1.css')}}" rel="alternate stylesheet" title="color1" media="all"/>

    <link href="{{asset('assets/plugins/switcher/css/color2.css')}}" rel="alternate stylesheet" title="color2" media="all"/>
    <link href="{{asset('assets/plugins/switcher/css/color3.css')}}" rel="alternate stylesheet" title="color3" media="all"/>
    <link href="{{asset('assets/plugins/switcher/css/color4.css')}}" rel="alternate stylesheet" title="color4" media="all"/>
    <link href="{{asset('assets/plugins/switcher/css/color5.css')}}" rel="alternate stylesheet" title="color5" media="all"/>
    <link rel="stylesheet" href="{{asset('assets/css/ami-style.css')}}"/>
    <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
    
</head>
<body>
    
    <!-- Loader-->
    <div id="page-preloader"><span class="spinner"></span></div>
    <!-- Loader end-->
    <div data-header="sticky" data-header-top="200" class="layout-theme animated-css">
    
      <div class="cd-main">
        <div class="wrap-content cd-section cd-selected">
           @include('tpl.top-header')
          <div class="wrap-nav">
            @include('tpl.header')
          </div>
          @yield('content')
          @include('tpl.footer')
          <!-- end wrap-content-->
        </div>
      </div>
    </div>
    <nav id="cd-nav" class="cd-nav-container"><a href="#0" class="cd-close-nav">Close</a>
      <nav class="sidebar-nav">
        <ul class="sidebar-nav__list list-unstyled">
          <li><a href="#" data-toggle="dropdown">world</a>
            <ul role="menu" class="dropdown-menu">
              <li>
                <ul class="list list-mark-1 list-mark-1_mod-a">
                  <li><a href="category.html">Asia & europe</a></li>
                  <li><a href="category.html">festival games</a></li>
                  <li><a href="category.html">world organizations</a></li>
                  <li><a href="category.html">africa & middle east</a></li>
                  <li><a href="category.html">pakistan & india</a></li>
                  <li><a href="category.html">usa & canada</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" data-toggle="dropdown">Health</a>
            <ul role="menu" class="dropdown-menu">
              <li>
                <ul class="list list-mark-1 list-mark-1_mod-a">
                  <li><a href="category.html">Asia & europe</a></li>
                  <li><a href="category.html">festival games</a></li>
                  <li><a href="category.html">world organizations</a></li>
                  <li><a href="category.html">africa & middle east</a></li>
                  <li><a href="category.html">pakistan & india</a></li>
                  <li><a href="category.html">usa & canada</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" data-toggle="dropdown">technology</a>
            <ul role="menu" class="dropdown-menu">
              <li>
                <ul class="list list-mark-1 list-mark-1_mod-a">
                  <li><a href="category.html">Asia & europe</a></li>
                  <li><a href="category.html">festival games</a></li>
                  <li><a href="category.html">world organizations</a></li>
                  <li><a href="category.html">africa & middle east</a></li>
                  <li><a href="category.html">pakistan & india</a></li>
                  <li><a href="category.html">usa & canada</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" data-toggle="dropdown">politics</a>
            <ul role="menu" class="dropdown-menu">
              <li>
                <ul class="list list-mark-1 list-mark-1_mod-a">
                  <li><a href="category.html">Asia & europe</a></li>
                  <li><a href="category.html">festival games</a></li>
                  <li><a href="category.html">world organizations</a></li>
                  <li><a href="category.html">africa & middle east</a></li>
                  <li><a href="category.html">pakistan & india</a></li>
                  <li><a href="category.html">usa & canada</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" data-toggle="dropdown">entertainment</a>
            <ul role="menu" class="dropdown-menu">
              <li>
                <ul class="list list-mark-1 list-mark-1_mod-a">
                  <li><a href="category.html">Asia & europe</a></li>
                  <li><a href="category.html">festival games</a></li>
                  <li><a href="category.html">world organizations</a></li>
                  <li><a href="category.html">africa & middle east</a></li>
                  <li><a href="category.html">pakistan & india</a></li>
                  <li><a href="category.html">usa & canada</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" data-toggle="dropdown">lifestyle</a>
            <ul role="menu" class="dropdown-menu">
              <li>
                <ul class="list list-mark-1 list-mark-1_mod-a">
                  <li><a href="category.html">Asia & europe</a></li>
                  <li><a href="category.html">festival games</a></li>
                  <li><a href="category.html">world organizations</a></li>
                  <li><a href="category.html">africa & middle east</a></li>
                  <li><a href="category.html">pakistan & india</a></li>
                  <li><a href="category.html">usa & canada</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" data-toggle="dropdown">Sports</a>
            <ul role="menu" class="dropdown-menu">
              <li>
                <ul class="list list-mark-1 list-mark-1_mod-a">
                  <li><a href="category.html">Asia & europe</a></li>
                  <li><a href="category.html">festival games</a></li>
                  <li><a href="category.html">world organizations</a></li>
                  <li><a href="category.html">africa & middle east</a></li>
                  <li><a href="category.html">pakistan & india</a></li>
                  <li><a href="category.html">usa & canada</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" data-toggle="dropdown">travel</a>
            <ul role="menu" class="dropdown-menu">
              <li>
                <ul class="list list-mark-1 list-mark-1_mod-a">
                  <li><a href="category.html">Asia & europe</a></li>
                  <li><a href="category.html">festival games</a></li>
                  <li><a href="category.html">world organizations</a></li>
                  <li><a href="category.html">africa & middle east</a></li>
                  <li><a href="category.html">pakistan & india</a></li>
                  <li><a href="category.html">usa & canada</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- end layout-theme-->



    </nav>

    {{-- @include('tpl.header')

    @yield('content')
    
    @include('tpl.footer') --}}

    
    <script src="{{asset("assets/js/main.js")}}"></script>
    <script src="{{asset("assets/js/separate-js/custom.js")}}"></script>
    <script src="{{asset("assets/plugins/3d-bold-navigation/main.js")}}"></script>
    <script src="{{asset("assets/plugins/bootstrap/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/plugins/slider-pro/jquery.sliderPro.js")}}"></script>
    <script src="{{asset("assets/plugins/owl-carousel/owl.carousel.min.js")}}"></script>
    <script src="{{asset("assets/plugins/isotope/isotope.pkgd.min.js")}}"></script>
    <script src="{{asset("assets/plugins/prettyphoto/jquery.prettyPhoto.js")}}"></script>
    <script src="{{asset("assets/plugins/bootstrap-select/bootstrap-select.js")}}"></script>
    <script src="{{asset("assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js")}}"></script>
    <script src="{{asset("assets/plugins/doubletaptogo.js")}}"></script>
    <script src="{{asset("assets/plugins/waypoints.min.js")}}"></script>
    <script src="{{asset("assets/plugins/news-ticker/js/endlessRiver.js")}}"></script>
    <script src="{{asset("assets/plugins/datetimepicker/jquery.datetimepicker.js")}}"></script>
    <script src="{{asset("assets/plugins/flexslider/jquery.flexslider.js")}}"></script>
    <script src="{{asset("assets/plugins/jarallax/jarallax.js")}}"></script>
    <script src="{{asset("assets/plugins/scrollreveal/scrollreveal.js")}}"></script>
    <script src="{{asset("assets/plugins/classie.js")}}"></script>
    <script src="{{asset("assets/plugins/switcher/js/dmss.js")}}"></script>
</body>
</html>