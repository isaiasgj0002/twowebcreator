<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>{{ $general->titulo }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CRoboto:400">
    <link rel="stylesheet" href="{{ asset('themes/1003/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('themes/1003/css/fonts.css')}}">
    <link rel="stylesheet" href="{{ asset('themes/1003/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/fuentes.css') }}">
    <link href="https://file.myfontastic.com/fBbG2MXfBLKEYsNJpastyH/icons.css" rel="stylesheet">
    <link href="{{ asset('general/'.$general->favicon) }}" rel="icon">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body style="font-family: {{ $general->fuente }} !important; font-size:{{ $general->size }} !important; background-image: url({{ asset('recursos_fondos/'.$general->fondo) }})!important">
    <div class="ie-panel"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer" style="background: {{ $menu->background }} !important; color: {{ $menu->color }}!important">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="{{ asset('general/'.$general->logo) }}" alt="" width="150" height="38"/><img class="brand-logo-light" src="{{ asset('general/'.$general->logo) }}" alt="" width="150" height="38"/></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                      @foreach ($items_menu as $item)
                      <li class="rd-nav-item"><?php echo $item->icono ?><a class="rd-nav-link" href="{{ $item->enlace }}">{{ $item->titulo }}</a>
                      </li>
                      @endforeach
                    </ul>
                  </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper-->
      @yield('1003')
      <!-- Page Footer-->
      <footer class="section footer-modern context-dark" style="background: {{ $footer->background }}!important">
        <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-icon="images/gmap_marker-2.png" data-icon-active="images/gmap_marker-2.png" data-zoom="5" data-styles="[{&quot;featureType&quot;:&quot;all&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;all&quot;,&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;all&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:17}]}]">
          <?php echo $general->mapa ?>
        </div>
        <div class="container">
          <div class="row justify-content-lg-end">
            <div class="col-lg-7">
              <div class="section-md">
                <div class="row row-50">
                  <div class="col-md-9 col-xl-10 order-lg-1 wow-outer">
                    <div class="wow slideInRight">
                      <h5 class="footer-title">Ubicanos</h5>
                      <p class="big">{{ $footer->direccion }}<br><span class="text-primary">Ph.</span><a href="tel:{{ $footer->telefono }}">{{ $footer->telefono }}</a></p>
                      <!-- RD Mailform-->
                      <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>{{ $general->titulo }}</span><span> {{ $footer->cr }}</span><span>&nbsp;</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="{{ asset('themes/1003/js/core.min.js')}}"></script>
    <script src="{{ asset('themes/1003/js/script.js')}}"></script>

	<!--LIVEDEMO_00 -->


  </body>
</html>
