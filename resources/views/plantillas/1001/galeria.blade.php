@extends('plantillas.1001.admin')
@section('1001')
<section id="portfolio"  class="section-bg" style="margin-top: 70px !important">
    <div class="container">
      <header class="section-header">
        <h3 class="section-title" style="font-family: {{ $general->fuente }} !important;">Galeria</h3>
      </header>
      <div class="row portfolio-container">
        @foreach ($galeria as $item)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('galeria/'.$item->imagen) }}" class="img-fluid" alt="" style="height: 100% !important;">
                <a href="{{ asset('galeria/'.$item->imagen) }}" data-lightbox="portfolio" data-title="Galeria" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
              </figure>
            </div>
          </div>
        @endforeach
      </div>
      <div class="row">
        {{ $galeria->render() }}
      </div>
    </div>
  </section><!-- #portfolio -->
@endsection
