<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{{ $general->titulo }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('general/'.$general->favicon) }}" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('themes/1001/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('themes/1001/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('themes/1001/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('themes/1001/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('themes/1001/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('themes/1001/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/fuentes.css') }}">
  <!-- Main Stylesheet File -->
  <link href="{{ asset('themes/1001/css/style.css')}}" rel="stylesheet">
  <link href="https://file.myfontastic.com/fBbG2MXfBLKEYsNJpastyH/icons.css" rel="stylesheet">
</head>

<body style="font-family: {{ $general->fuente }} !important; font-size:{{ $general->size }} !important; background-image: url({{ asset('recursos_fondos/'.$general->fondo) }})!important">

  <!--==========================
    Header
  ============================-->
  <header id="header" style="background: {{ $menu->background }} !important">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1 style="font-family: {{ $general->fuente }} !important;"><a href="http://127.0.0.1:8000/{{ $dominio }}" style="color: {{ $menu->color }} !important" class="scrollto"><img src = "{{ asset('general/'.$general->logo) }}" style="width: 40px">{{ $menu->titulo }}</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          @foreach ($items_menu as $item)
            <li class="menu-active"><a style="color: {{ $menu->color }} !important; font-family: {{ $general->fuente }} !important;" href="{{ $item->enlace }}"><?php echo $item->icono?>{{ $item->titulo }}</a>
            </li>
        @endforeach
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

@yield('1001')
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top" style="background: {{ $footer->background }} !important">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="{{ asset('general/'.$general->logo) }}" style="width: 120px !important">
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
                @foreach ($items_menu as $item)
                    <li><a href="{{ $item->enlace }}"><?php echo $item->icono?>{{ $item->titulo }}</a>
                    </li>
                @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contactanos</h4>
            <p>
              <?php echo $footer->direccion ?><br>
              <strong>Telefono: </strong>{{ $footer->telefono }}<br>
              <strong>Email:</strong> {{ $footer->correo }}<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h3>{{ $menu->titulo }}</h3>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        {{ $footer->cr }}
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{ asset('themes/1001/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('themes/1001/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset('themes/1001/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('themes/1001/lib/easing/easing.min.js')}}"></script>
  <script src="{{ asset('themes/1001/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{ asset('themes/1001/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{ asset('themes/1001/lib/wow/wow.min.js')}}"></script>
  <script src="{{ asset('themes/1001/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{ asset('themes/1001/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{ asset('themes/1001/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('themes/1001/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('themes/1001/lib/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{ asset('themes/1001/lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
  <!-- Contact Form JavaScript File
  <script src="contactform/contactform.js"></script>
  -->
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
