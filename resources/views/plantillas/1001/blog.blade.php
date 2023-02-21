@extends('plantillas.1001.admin')
@section('1001')
<section id="about" style="margin-top: 70px !important">
    <div class="container">
      <header class="section-header">
        <h3 style="font-family: {{ $general->fuente }} !important;">Nuestro blog</h3>
      </header>
      <div class="row about-cols">
        @foreach ($blog as $item)
        <div class="col-md-4 wow fadeInUp">
            <a href="http://127.0.0.1:8000/{{ $dominio }}/contenido/pagina/blog/{{ $item->slug }}">
                <div class="about-col">
                    <div class="img">
                      <img src="{{ asset('blog/'.$item->imagen) }}" style="width:100% !important" class="img-fluid">
                    </div>
                    <h2 style="font-family: {{ $general->fuente }} !important;" class="title"><a href="http://127.0.0.1:8000/{{ $dominio }}/contenido/pagina/blog/{{ $item->slug }}">{{ $item->titulo }}</a></h2>
                    <p>
                      {{ $item->excerpt }}
                    </p>
                  </div>
            </a>
          </div>
        @endforeach
      </div>
      <div class="row">
        {{ $blog->render() }}
      </div>
    </div>
  </section><!-- #about -->
@endsection
