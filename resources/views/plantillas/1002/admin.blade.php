<!DOCTYPE html>
<html class="wide wow-animation scrollTo" lang="en">
  <head>
    <!-- Site Title-->
    <title>{{ $general->titulo }}</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,700%7CMerriweather:400,300,300italic,400italic,700,700italic">
    <link rel="stylesheet" href="{{ asset('themes/1002/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('themes/1002/css/fonts.css')}}">
    <link rel="stylesheet" href="{{ asset('themes/1002/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/fuentes.css') }}">
    <link href="https://file.myfontastic.com/fBbG2MXfBLKEYsNJpastyH/icons.css" rel="stylesheet">
    <link href="{{ asset('general/'.$general->favicon) }}" rel="icon">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body style="font-family: {{ $general->fuente }} !important; font-size:{{ $general->size }} !important; background-image: url({{ asset('recursos_fondos/'.$general->fondo) }})!important">
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-head">
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default" data-md-device-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-stick-up-offset="210" data-xl-stick-up-offset="85" data-lg-auto-height="true" data-md-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-lg-stick-up="true" style="background-color: {{ $menu->background }}!important">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                <h4 class="panel-title d-lg-none">Pages</h4>
                <!-- RD Navbar Right Side Toggle-->
                <button class="rd-navbar-top-panel-toggle d-lg-none" data-rd-navbar-toggle=".rd-navbar-top-panel"><span></span></button>
                <div class="rd-navbar-top-panel">
                  <div class="rd-navbar-top-panel-left-part">
                    <ul class="list-unstyled">
                      <li>
                        <div class="unit flex-row align-items-center unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-phone text-middle"></span></div>
                          <div class="unit-body"><a href="tel:{{ $footer->telefono }}">{{ $footer->telefono }}</a>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="unit flex-row align-items-center unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-map-marker text-middle"></span></div>
                          <div class="unit-body"><a href="#">{{ $footer->direccion }}</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit flex-row align-items-center unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-email-open text-middle"></span></div>
                          <div class="unit-body"><a href="mailto:{{ $footer->correo }}">{{ $footer->correo }}</a></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-menu-wrap clearfix">
                <!--Navbar Brand-->
                <div class="rd-navbar-brand"><a class="d-inline-block" href="http://127.0.0.1:8000/{{ $dominio }}">
                    <div class="unit align-items-sm-center unit-xl flex-column flex-xxl-row unit-spacing-custom">
                      <div class="unit-left"><img width='170' height='172' src='{{ asset('general/'.$general->logo) }}' alt=''/>
                      </div>
                      <div class="unit-body text-xxl-left">
                        <div class="rd-navbar-brand-title">{{ $menu->titulo }}</div>
                      </div>
                    </div></a></div>
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <div class="rd-navbar-mobile-header-wrap">
                      <!--Navbar Brand Mobile-->
                      <div class="rd-navbar-mobile-brand"><a href="http://127.0.0.1:8000/{{ $dominio }}"><img width='136' height='138' src='{{ asset('general/'.$general->logo) }}' alt=''/></a></div>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav" style="color: {{ $menu->color }}!important">
                      @foreach ($items_menu as $item)
                      <li><?php echo $item->icono ?><a href="{{ $item->enlace }}">{{ $item->titulo }}</a></li>
                      @endforeach
                    </ul>
                    <!--RD Navbar Mobile Search-->
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      @yield('1002')
      <!-- Corporate footer-->
      <footer class="page-footer" style="background: {{ $footer->background }} !important;">
        <div class="hr bg-gray-light"></div>
        <div class="container section-xs block-after-divider">
          <div class="row row-50 justify-content-xl-between justify-content-sm-center">
            <div class="col-lg-3 col-xl-2">
              <!--Footer brand--><a class="d-inline-block" href="http://127.0.0.1:8000/{{ $dominio }}"><img width='170' height='172' src='{{ asset('general/'.$general->logo) }}' alt=''/>
                <div>
                  <h6 style="color: {{ $menu->color }} !important" class="barnd-name font-weight-bold offset-top-25">{{$menu->titulo}}</h6>
                </div></a>
            </div>
            <div class="col-sm-10 col-lg-5 col-xl-4 text-xl-left">
              <h6 style="color: {{ $menu->color }} !important" class="font-weight-bold">Contactanos</h6>
              <div class="text-subline"></div>
              <div class="offset-top-30">
                <ul class="list-unstyled contact-info list">
                  <li>
                    <div class="unit flex-row align-items-center unit-spacing-xs">
                      <div class="unit-left"><span class="icon mdi mdi-phone text-middle icon-xs text-madison"></span></div>
                      <div class="unit-body"><a style="color: {{ $menu->color }} !important" class="text-dark" href="tel:{{ $footer->telefono }}">{{ $footer->telefono }}</a>
                      </div>
                    </div>
                  </li>
                  <li class="offset-top-15">
                    <div class="unit flex-row align-items-center unit-spacing-xs">
                      <div class="unit-left"><span style="color: {{ $menu->color }} !important" class="icon mdi mdi-map-marker text-middle icon-xs text-madison"></span></div>
                      <div class="unit-body text-left"><a style="color: {{ $menu->color }} !important" class="text-dark" href="#">{{ $footer->direccion }}</a></div>
                    </div>
                  </li>
                  <li class="offset-top-15">
                    <div class="unit flex-row align-items-center unit-spacing-xs">
                      <div class="unit-left"><span class="icon mdi mdi-email-open text-middle icon-xs text-madison"></span></div>
                      <div class="unit-body"><a style="color: {{ $menu->color }} !important" href="mailto:{{ $footer->correo }}">{{ $footer->correo }}</a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-10 col-lg-8 col-xl-4 text-xl-left">
              <h6 style="color: {{ $menu->color }} !important" class="font-weight-bold">{{ $menu->titulo }}</h6>
              <div class="text-subline"></div>
              <p style="color: {{ $menu->color }} !important"> {{$footer->horarios}}</p>
              <div class="offset-top-30 text-left">
              </div>
              <div class="offset-top-10">
              </div>
            </div>
          </div>
        </div>
        <div class="bg-madison context-dark">
          <div class="container text-lg-left section-5">
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>.&nbsp;</span><span>{{$footer->cr}}</span><span>.&nbsp;</span></p>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Java script-->
    <script src="{{ asset('themes/1002/js/core.min.js')}}"></script>
    <script src="{{ asset('themes/1002/js/script.js')}}"></script>
  </body>
</html>
