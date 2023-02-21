@extends('plantillas.1003.admin')
@section('1003')
<section class="parallax-container" data-parallax-img="{{ asset('general/'.$general->fondo_principal) }}">
    <div class="parallax-content breadcrumbs-custom context-dark">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-9">
            <h2 class="breadcrumbs-custom-title">Nuestro blog</h2>
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
  <section class="section section-lg bg-default">
    <div class="container">
      <div class="row row-70 justify-content-xl-between">
        <div class="col-lg-8">
          <div class="row row-50 justify-content-center">
            @foreach ($blog as $item)
            <div class="col-md-6">
                <div class="post-classic">
                  <div class="post-classic-figure"><a href="http://twocreator.online/{{ $dominio }}/contenido/pagina/blog/{{ $item->slug }}"><img src="{{ asset('blog/'.$item->imagen) }}" alt="" width="370" height="255"/></a></div>
                  <div class="post-classic-caption">
                    <h4 class="post-classic-title"><a href="http://twocreator.online/{{ $dominio }}/contenido/pagina/blog/{{ $item->slug }}">{{ $item->titulo }}</a></h4>
                    <ul class="post-classic-meta">
                        <li>{{ $item->excerpt }}</li>
                      </ul>
                  </div>
                </div>
              </div>
            @endforeach
            <!-- Bootstrap Pagination-->
          </div>
          <div class="row">
            {{ $blog->render() }}
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
