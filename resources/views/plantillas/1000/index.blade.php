@extends('plantillas.1000.admin')
@section('1000')
<!-- Swiper-->
<section class="section swiper-container swiper-slider swiper-slider-4" data-loop="true" data-autoplay="4000" data-simulate-touch="false">
    <div class="swiper-wrapper context-dark">
    @foreach ($slider as $item)
        <div class="swiper-slide swiper-slide-1" data-slide-bg="{{ asset('sliders/'.$item->imagen) }}">
          <div class="swiper-slide-caption section-md text-sm-left">
            <div class="container">
              <div class="row">
                <div class="col-sm-8 col-md-8 col-xl-7">
                  <h1 class="swiper-title-1 text-spacing-0" data-caption-animate="fadeInLeft" data-caption-delay="100" style="font-family: {{ $general->fuente }} !important;">{{ $item->titulo }}</h1>
                </div>
              </div>
            </div>
          </div>
      </div>
    @endforeach
</div>
    <!-- Swiper Pagination-->
    <div class="swiper-pagination"></div>
    <!-- Swiper Navigation-->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </section>




  <!-- Why Choose Divers-->
  <section class="section section-xxl bg-default text-md-left">
    <div class="container">
      <div class="row row-30 row-md-60 row-lg-70 justify-content-center align-items-md-center">
        <div class="col-sm-8 col-md-5 col-xl-6">

           <img src="{{ asset('secciones/'.$seccion_uno->imagen) }}" alt="" width="543" height="558"/>

        </div>
        <div class="col-md-7 col-xl-6" style="word-wrap: break-word;">
          <h3 style="font-family: {{ $general->fuente }} !important;" class="text-transform-capitalize wow fadeInRight">{{ $seccion_uno->titulo }}</h3>
          <!-- Bootstrap collapse-->
          <?php echo $seccion_uno->descripcion?>
        </div>

      </div>
    </div>
  </section>


   <!-- Instructors-->
   <section class="section section-xxl bg-default">
    <div class="container">
      <h3 class="text-spacing-0 text-transform-capitalize wow fadeScale">Nuestro equipo</h3>
      <!-- Owl Carousel-->
      <div class="owl-carousel owl-style-9" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-margin="30" data-dots="true" data-mouse-drag="false">
        @foreach ($equipo as $item)
        <article class="team-modern box-sm wow slideInUp"><a class="team-modern-figure" href="#"><img src="{{ asset('equipo/'.$item->imagen) }}" alt="" width="270" height="227"/></a>
            <h5 class="team-modern-name" style="font-family: {{ $general->fuente }} !important;"><a href="#">{{ $item->nombres }}</a></h5>
            <p class="team-modern-text" style="font-family: {{ $general->fuente }} !important;">{{ $item->cargo  }}</p>
          </article>
        @endforeach
      </div>
    </div>
  </section>



  <!-- Why Choose Divers-->
  <section class="section section-xxl bg-default text-md-left">
    <div class="container">
      <div class="row row-30 row-md-60 row-lg-70 justify-content-center align-items-md-center">
        <div class="col-sm-8 col-md-5 col-xl-6">

           <img src="{{ asset('secciones/'.$seccion_dos->imagen) }}" alt="" width="543" height="558"/>

        </div>
        <div class="col-md-7 col-xl-6" style="word-wrap: break-word;">
          <h3 style="font-family: {{ $general->fuente }} !important;" class="text-transform-capitalize wow fadeInRight">{{ $seccion_dos->titulo }}</h3>
          <!-- Bootstrap collapse-->
          <?php echo $seccion_dos->descripcion?>
        </div>

      </div>
    </div>
  </section>


  <!-- Masonry Gallery-->
  <section class="section section-xxl bg-default">
    <div class="container">
      <h3 class="text-transform-capitalize wow fadeScale" style="font-family: {{ $general->fuente }} !important;">Galeria</h3>
      <div class="isotope-wrap">
        <div class="isotope-filters"></div>
        <div class="row row-30 isotope isotope-custom-1" data-lightgallery="group">
          @foreach ($galeria_index as $item)
          <div class="col-sm-6 col-lg-4 col-xl-4 isotope-item">
            <!-- Thumbnail Classic-->
            <article class="thumbnail-classic">
              <div class="thumbnail-classic-figure"><img src="{{ asset('galeria/'.$item->imagen) }}" alt="" width="270" height="250"/>
              </div>
              <div class="thumbnail-classic-caption">
                <div>
                  <h5 class="thumbnail-classic-title"><a href="#">Zoom</a></h5>
                  <div class="thumbnail-classic-button-wrap">
                    <div class="thumbnail-classic-button"><a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="{{ asset('galeria/'.$item->imagen) }}" data-lightgallery="item"><img src="{{ asset('galeria/'.$item->imagen) }}" alt="" width="270" height="250"/></a></div>
                  </div>
                </div>
              </div>
            </article>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <section class="section section-xxl bg-default">
    <div class="container">
      <h3 class="text-transform-capitalize wow fadeScale" style="font-family: {{ $general->fuente }} !important;">Enlaces recomendados</h3>
      <div class="isotope-wrap">
        <div class="isotope-filters"></div>
        <div class="row row-30 isotope isotope-custom-1" data-lightgallery="group">
          @foreach ($enlace as $item)
          <div class="col-sm-6 col-lg-3 col-xl-3 isotope-item">
            <a href="{{ $item->enlace }}" target="_blank">
                <img src="{{ asset('enlaces/'.$item->imagen) }}">
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <!-- Subscribe to Our Newsletter-->
  <!-- Blog Post-->
  <section class="section section-xxl bg-gray-1">
    <div class="container">
      <h3 class="text-transform-capitalize text-spacing-0 wow fadeScale" style="font-family: {{ $general->fuente }} !important;">Nuestro blog</h3>
      <!-- Owl Carousel-->
      <div class="owl-carousel" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30" data-dots="true" data-mouse-drag="false">
        @foreach ($blog as $item)
            <!-- Post Classic-->
        <article class="post post-classic box-md wow slideInDown"><a class="post-classic-figure" href="http://127.0.0.1:8000/{{ $dominio }}/contenido/pagina/blog/{{ $item->slug }}"><img src="{{ asset('blog/'.$item->imagen) }}" alt="" width="370" height="239"/></a>
            <div class="post-classic-content">
              <h5 class="post-classic-title text-spacing-0"><a href="http://127.0.0.1:8000/{{ $dominio }}/contenido/pagina/blog/{{ $item->slug }}">{{ $item->titulo }}</a></h5>
              <p class="post-classic-text font-fourth">{{ $item->excerpt }}</p>
            </div>
          </article>
        @endforeach
      </div>
    </div>
  </section>
  @endsection
