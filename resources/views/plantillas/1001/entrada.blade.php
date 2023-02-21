@extends('plantillas.1001.admin')
@section('1001')
  <!-- Section Shop-->
<section class="section section-xl bg-default text-md-left" style="margin-top: 100px !important">
    <div class="container">
      <div class="row row-50 row-md-60">
        <div class="col-lg-12 col-xl-12">
          <div class="inset-xl-right-100">
            <div class="row row-50 row-md-60 row-lg-80">
              <div class="col-12">
                <article class="post post-modern box-xxl">
                  <div class="post-modern-panel">
                  </div>
                  <h3 style="font-family: {{ $general->fuente }} !important;" class="post-modern-title">{{ $entrada->titulo }}</h3>
                  </div>
                  <p style="font-family: {{ $general->fuente }} !important;" class="post-modern-text"><?php echo $entrada->contenido ?></p>
                </article>
                <!-- Quote Classic-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
