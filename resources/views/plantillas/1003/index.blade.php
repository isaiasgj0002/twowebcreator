@extends('plantillas.1003.admin')
@section('1003')
<section class="section swiper-container swiper-slider swiper-slider-1" data-loop="false" data-autoplay="5000" data-simulate-touch="false">
    <div class="swiper-wrapper">
      @foreach ($slider as $item)
      <div class="swiper-slide context-dark" data-slide-bg="{{ asset('sliders/'.$item->imagen) }}">
        <div class="swiper-slide-caption section-lg">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-9">
                <div class="divider" data-caption-animate="fadeInLeft" data-caption-delay="350"></div>
                <div data-caption-animate="fadeInLeft" data-caption-delay="350">
                  <h1 class="icon-gradient-2 text-accent-3">{{ $item->titulo }}</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <!-- Swiper Pagination -->
    <div class="swiper-pagination"></div>
    <div class="swiper-counter"></div>
    <!-- Swiper Navigation-->
    <div class="swiper-button-prev fa-arrow-left"></div>
    <div class="swiper-button-next fa-arrow-right"></div>
  </section>
  <section class="section section-lg bg-default">
    <div class="container">
      <div class="row row-50">
        <div class="col-lg-6 wow-outer">
          <div class="wow slideInLeft">
            <h3 class="title-decorate title-decorate-left">{{ $seccion_uno->titulo }}</h3>
            <div class="row row-30">
              <div class="col-sm-8">
                <p>{{ $seccion_uno->descripcion }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow-outer"><img class="wow slideInRight" src="{{ asset('secciones/'.$seccion_uno->imagen) }}" alt="" width="599" height="376"/>
        </div>
      </div>
    </div>
  </section>
  <section class="section section-xl bg-gray-700 bg-decorate">
    <div class="container">
      <div class="row row-30 align-items-lg-end">
        <div class="col-lg-4 order-lg-2 text-lg-right wow-outer">
          <div class="wow slideInRight">
            <h3 class="title-decorate">Nuestro equipo</h3>
          </div>
        </div>
      </div>
      <div class="row row-30">
        @foreach ($equipo as $item)
        <div class="col-md-6 col-lg-4 wow fadeInUp">
            <div class="team-modern">
              <div class="team-modern-figure"><img src="{{ asset('equipo/'.$item->imagen) }}" alt="" width="375" height="290"/>
              </div>
              <div class="team-modern-caption">
                <h4 style="color:black !important">{{ $item->nombres }}</h4>
                <p>{{ $item->cargo }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <section class="section section-lg bg-default text-center">
    <div class="container">
      <h3 class="title-decorate title-decorate-center">Enlaces recomendados</h3>
      <div class="row row-30">
        @foreach ($enlace as $item)
        <div class="col-sm-6 col-lg-3"><a class="box-sponsor wow fadeInUp" href="{{ $item->enlace }}" target="_blank"><img src="{{ asset('enlaces/'.$item->imagen) }}" alt="" width="270" height="119"/></a></div>
        @endforeach
      </div>
    </div>
  </section>
  <section class="section section-lg bg-default text-center">
    <div class="container">
      <div class="wow-outer">
        <div class="wow slideInDown">
          <h3>{{ $seccion_dos->titulo }}</h3>
        </div>
      </div>
      <!-- Slick Carousel-->
      <div class="slick-slider carousel-parent" data-arrows="true" data-loop="false" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
        <div class="item">
          <div class="testimonials-modern">
            <div class="testimonials-modern-text">
              <p><?php echo $seccion_dos->descripcion ?></p>
            </div>
            <center><img src="{{ asset('secciones/'.$seccion_dos->imagen) }}" width="599" height="376"></center>
          </div>
        </div>
      </div>
      <div class="slick-slider slider-dots" id="child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="false" data-dots="false" data-swipe="true" data-items="4" data-xs-items="4" data-sm-items="4" data-md-items="4" data-lg-items="4" data-xl-items="4" data-slide-to-scroll="1">
        @foreach ($equipo as $item)
        <div class="item">
            <div class="slick-dot-item"><img src="{{ asset('equipo/'.$item->imagen) }}" alt="" width="60" height="60"/>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <section class="section section-md bg-gray-700 bg-decorate text-center">
    <div class="container wow-outer">
      <div class="wow slideInDown">
        <h3 class="title-decorate title-decorate-center">Nuestra galeria</h3>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="row row-30" data-isotope-group="gallery">
      @foreach ($galeria_index as $item)
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 wow-outer">
        <div class="wow slideInDown">
          <div class="gallery-item-classic"><img src="{{ asset('galeria/'.$item->imagen) }}" alt="" width="465" height="383"/>
            <div class="gallery-item-classic-caption"><a href="{{ asset('galeria/'.$item->imagen) }}" data-lightgallery="item">zoom</a></div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="section-sm bg-dot"></div>
  </section>
  <section class="section section-lg bg-default">
    <div class="container">
      <h3 class="title-decorate title-decorate-center text-center">Nuestro blog</h3>
      <div class="row">
        <div class="col-12">
          <div class="owl-carousel" data-items="1" data-md-items="2" data-lg-items="3" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
            @foreach ($blog_index as $item)
            <div class="wow slideInUp">
                <div class="post-classic">
                  <div class="post-classic-figure"><a href="blog-post.html"><img src="{{ asset('blog/'.$item->imagen) }}" alt="" width="370" height="255"/></a></div>
                  <div class="post-classic-caption">
                    <h4 class="post-classic-title"><a href="blog-post.html">{{ $item->titulo }}</a></h4>
                    <ul class="post-classic-meta">
                      <li>{{ $item->excerpt }}</li>
                    </ul>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
