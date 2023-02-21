@extends('plantillas.1001.admin')
  <!--==========================
    Intro Section
  ============================-->
  @section('1001')
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="{{ asset('sliders/'.$slider[0]->imagen) }}" alt="" style="height: 100% !important; width: 100% !important;"></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 style="font-family: {{ $general->fuente }} !important;">{{ $slider[0]->titulo }}</h2>
              </div>
            </div>
          </div>

          @foreach ($slider as $item)
          @if ($item->id!=$slider[0]->id)
          <div class="carousel-item">
            <div class="carousel-background"><img src="{{ asset('sliders/'.$item->imagen)}}" alt="" style="height: 100% !important; width: 100% !important;"></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 style="font-family: {{ $general->fuente }} !important;">{{ $item->titulo }}</h2>
              </div>
            </div>
          </div>
          @endif
          @endforeach
        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3 style="font-family: {{ $general->fuente }} !important;">{{ $seccion_uno->titulo }}</h3>
        </header>

        <div class="row about-cols mt-4">

          <div class="col-md-6 wow fadeInUp">
            <img src="{{ asset('secciones/'.$seccion_uno->imagen) }}" style="width: 100%">
          </div>

          <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="word-wrap: break-word;">
            <p style="font-family: {{ $general->fuente }} !important;"><?php echo $seccion_uno->descripcion ?></p>
          </div>


        </div>

      </div>
    </section><!-- #about -->
    <section id="about">
        <div class="container">

          <header class="section-header">
            <h3 style="font-family: {{ $general->fuente }} !important;">Nuestro blog</h3>
          </header>

          <div class="row about-cols">

            @foreach ($blog_index as $item)
            <div class="col-md-4 wow fadeInUp">
                <a href="http://127.0.0.1:8000/{{ $dominio }}/contenido/pagina/blog/{{ $item->slug }}">
                    <div class="about-col">
                        <div class="img">
                          <img src="{{ asset('blog/'.$item->imagen) }}" style="width:100% !important" class="img-fluid">
                        </div>
                        <h2 style="font-family: {{ $general->fuente }} !important;" class="title"><a href="http://127.0.0.1:8000/{{ $dominio }}/contenido/pagina/blog/{{ $item->slug }}">{{ $item->titulo }}</a></h2>
                        <p style="font-family: {{ $general->fuente }} !important;">
                          {{ $item->excerpt }}
                        </p>
                      </div>
                </a>
              </div>
            @endforeach
          </div>

        </div>
      </section>
      <section id="about">
        <div class="container">

          <header class="section-header">
            <h3 style="font-family: {{ $general->fuente }} !important;">{{ $seccion_dos->titulo }}</h3>
          </header>

          <div class="row about-cols mt-4">
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="word-wrap: break-word;">
                <p style="font-family: {{ $general->fuente }} !important;"><?php echo $seccion_dos->descripcion ?></p>
              </div>
            <div class="col-md-6 wow fadeInUp">
              <img src="{{ asset('secciones/'.$seccion_dos->imagen) }}" style="width: 100%">
            </div>
          </div>

        </div>
      </section>
    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 style="font-family: {{ $general->fuente }} !important;" class="section-title">Galeria</h3>
        </header>
        <div class="row portfolio-container">

         @foreach ($galeria_index as $item)
              <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('galeria/'.$item->imagen) }}" class="img-fluid" alt="" style="height: 100% !important; width: 100% !important;">
                <a href="{{ asset('galeria/'.$item->imagen) }}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
            </div>
          </div>
         @endforeach
        </div>
      </div>
    </section><!-- #portfolio -->

    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3 style="font-family: {{ $general->fuente }} !important;">Enlaces recomendados</h3>
        </div>

        <div class="row">

          @foreach ($enlace as $item)
              <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="{{ asset('enlaces/'.$item->imagen) }}" class="img-fluid" alt="">
              <div class="member-info">
                <a href="{{ $item->enlace }}" target="_blank">Abrir</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section>
    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3 style="font-family: {{ $general->fuente }} !important;">Nuestro equipo</h3>
        </div>

        <div class="row">

          @foreach ($equipo as $item)
              <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="{{ asset('equipo/'.$item->imagen) }}" class="img-fluid" style="height: 100% !important">
              <div class="member-info">
                <div class="member-info-content">
                  <h4 style="font-family: {{ $general->fuente }} !important;">{{ $item->nombres }}</h4>
                  <span style="font-family: {{ $general->fuente }} !important;">{{ $item->cargo }}</span>
                </div>
              </div>
            </div>
          </div>
          @endforeach



        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
  </main>
@endsection
