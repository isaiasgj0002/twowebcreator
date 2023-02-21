@extends('plantillas.1001.admin')
@section('1001')
<section id="about" style="margin-top: 70px !important">
    <div class="container">
      <header class="section-header">
        <h3 style="font-family: {{ $general->fuente }} !important;">{{ $blog->titulo }}</h3>
      </header>
      <div class="row">
        <div class="col-lg-12">
            <?php echo $blog->contenido ?>
        </div>
      </div>
    </div>
  </section><!-- #about -->
@endsection
