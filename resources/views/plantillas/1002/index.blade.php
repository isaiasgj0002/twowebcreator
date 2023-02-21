@extends('plantillas.1002.admin')
@section('1002')
<section class="section">
    <!-- Swiper-->
    <div class="swiper-container swiper-slider swiper-slider-2 swiper-container-horizontal swiper-container-true" data-autoplay="true" data-height="42.1875%" data-loop="true" data-dragable="false" data-min-height="480px" data-slide-effect="true" style="height: 480px;">
      <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-3243px, 0px, 0px);">
        @foreach ($slider as $item)
        <div class="swiper-slide" data-slide-bg="{{ asset('sliders/'.$item->imagen) }}" style="background-position: 80% center; background-image: url(&quot;images/slide-01-1920x810.jpg&quot;); background-size: cover; width: 1081px;" data-swiper-slide-index="0">
            <div class="swiper-slide-caption">
              <div class="container">
                <div class="row justify-content-sm-center justify-content-xl-start">
                  <div class="col-lg-9 text-lg-left col-sm-10">
                    <div data-caption-animate="fadeInUp" data-caption-delay="100" class="not-animated">
                      <h1 class="font-weight-bold"><a href="academics.html">{{ $item->titulo }}</a></h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
    </div>
      <!-- Swiper Pagination-->
      <div class="swiper-pagination swiper-pagination-clickable"><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span></div>
    </div>
  </section>
  <!--A Meeting of Minds-->
  <section class="section section-xl bg-default">
    <div class="container">
      <div class="row row-50 text-md-left align-items-md-center justify-content-md-between">
        <div class="col-md-5 col-lg-4 order-md-2"><img class="img-responsive d-inline-block" src="{{ asset('secciones/'.$seccion_uno->imagen) }}" width="326" height="329" alt=""></div>
        <div class="col-md-7 col-lg-7 order-md-1">
          <h2 class="font-weight-bold">{{ $seccion_uno->titulo }}</h2>
          <hr class="divider bg-madison divider-md-0">
          <div class="offset-top-35 offset-lg-top-60" style="word-wrap: break-word;">
            <p><?php echo $seccion_uno->descripcion ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fill in the Form-->

  <section class="section bg-catskill section-xl">
    <div class="container">
      <h2 class="font-weight-bold">Nuestro blog</h2>
      <hr class="divider bg-madison">
      <div class="row row-30 offset-top-60 text-left justify-content-sm-center">
        @foreach ($blog_index as $item)
        <div class="col-md-6 col-lg-4">
          <article class="post-news"><a href="http://127.0.0.1:8000/{{ $dominio }}/contenido/pagina/blog/{{ $item->slug }}"><img class="img-responsive" src="{{ asset('blog/'.$item->imagen) }}" width="370" height="240" alt=""></a>
            <div class="post-news-body">
              <h6><a href="http://127.0.0.1:8000/{{ $dominio }}/contenido/pagina/blog/{{ $item->slug }}">{{ $item->titulo }}</a></h6>
              <div class="offset-top-20">
                <p>{{ $item->excerpt }}</p>
              </div>
            </div>
          </article>
        </div>
        @endforeach
      </div>
      <div class="offset-top-50"><a class="btn button-primary" href="http://127.0.0.1:8000/newpage/contenido/pagina/blog">Ver todo</a></div>
    </div>
  </section>

  <!--A Meeting of Minds-->
  <section class="section section-xl bg-default">
    <div class="container">
      <div class="row row-50 text-md-left align-items-md-center justify-content-md-between">
        <div class="col-md-5 col-lg-4 order-md-2"><img class="img-responsive d-inline-block" src="{{ asset('secciones/'.$seccion_dos->imagen) }}" width="326" height="329" alt=""></div>
        <div class="col-md-7 col-lg-7 order-md-1">
          <h2 class="font-weight-bold">{{ $seccion_dos->titulo }}</h2>
          <hr class="divider bg-madison divider-md-0">
          <div class="offset-top-35 offset-lg-top-60">
            <p><?php echo $seccion_dos->descripcion ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fill in the Form-->

  <section class="section section-xl bg-default">
    <div class="container">
      <h2 class="font-weight-bold">Nuestro equipo</h2>
      <hr class="divider bg-madison">
      <div class="row row-30 text-lg-left offset-top-60">
       @foreach ($equipo as $item)
       <div class="col-md-6 col-lg-3"><img class="img-responsive d-inline-block img-rounded" src="{{ asset('equipo/'.$item->imagen) }}" width="270" height="270" alt="">
        <div class="offset-top-20">
          <h6 class="font-weight-bold text-primary">{{ $item->nombres }}</h6>
        </div>
        <div class="offset-top-5">
          <p>{{ $item->cargo }}</p>
        </div>
      </div>
       @endforeach
      </div>
    </div>
  </section>
  <section class="section">
    <?php echo $general->mapa ?>
  </section>
  @endsection
