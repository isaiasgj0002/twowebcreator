@extends('plantillas.1003.admin')
@section('1003')
<section class="parallax-container" data-parallax-img="{{ asset('general/'.$general->fondo_principal) }}">
    <div class="parallax-content breadcrumbs-custom context-dark">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-9">
            <h2 class="breadcrumbs-custom-title">Nuestra galeria</h2>
            <ul class="breadcrumbs-custom-path">
              @foreach ($items_menu as $item)
                <li><a href="{{ $item->enlace }}">{{ $item->titulo }}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section section-xl bg-default">
    <div class="row row-30" data-isotope-group="gallery">
      @foreach ($galeria as $item)
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="gallery-item-classic"><img src="{{ asset('galeria/'.$item->imagen) }}" alt="" width="465" height="383"/>
          <div class="gallery-item-classic-caption"><a href="{{ asset('galeria/'.$item->imagen) }}" data-lightgallery="item">zoom</a></div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
@endsection
