@extends('plantillas.1000.admin')
@section('1000')
<section class="breadcrumbs-custom" style="margin-top: 150px !important;">
    <div class="parallax-container" data-parallax-img="{{ asset('general/'.$general->fondo_principal) }}">
      <div class="breadcrumbs-custom-body parallax-content context-dark">
        <div class="container">
          <h1 style="font-family: {{ $general->fuente }} !important;" class="breadcrumbs-custom-title">Nuestra galeria</h1>
        </div>
      </div>
    </div>
    <div class="breadcrumbs-custom-footer">
      <div class="container">
        <ul class="breadcrumbs-custom-path">
          <li class="active" style="font-family: {{ $general->fuente }} !important;">Grid Galeria</li>
        </ul>
      </div>
    </div>
  </section>
  <section class="section section-xl bg-default">
    <div class="container isotope-wrap">
      <div class="row row-30 isotope" data-lightgallery="group">
        @foreach ($galeria as $item)
        <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 2">
            <!-- Thumbnail Classic-->
            <article class="thumbnail-classic">
              <div class="thumbnail-classic-figure"><img src="{{ asset('galeria/'.$item->imagen) }}" alt="" width="370" height="315"/>
              </div>
              <div class="thumbnail-classic-caption">
                <div>
                  <h5 class="thumbnail-classic-title"><a href="#">Zoom</a></h5>
                  <div class="thumbnail-classic-button-wrap">
                    <div class="thumbnail-classic-button"><a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="{{ asset('galeria/'.$item->imagen) }}" data-lightgallery="item"><img src="{{ asset('galeria/'.$item->imagen) }}" alt="" width="370" height="315"/></a></div>
                  </div>
                </div>
              </div>
            </article>
          </div>
        @endforeach
      </div>
      <div class="row">
        {{ $galeria->render() }}
      </div>
    </div>
  </section>
@endsection
