@extends('plantillas.1003.admin')
@section('1003')
<section class="parallax-container" data-parallax-img="{{ asset('general/'.$general->fondo_principal) }}">
    <div class="parallax-content breadcrumbs-custom context-dark">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-9">
            <h2 class="breadcrumbs-custom-title">Blog post</h2>
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
      <div class="row row-50 justify-content-lg-between">
        <div class="col-lg-6">
          <h3 class="blog-post-title">{{ $blog->titulo }}</h3>
          <div class="blog-post-content">
            <?php echo $blog->contenido ?>
          </div>
        </div>
        <div class="col-lg-6 col-xl-5"><img src="{{asset('blog/'.$blog->imagen)}}" alt="" width="518" height="569"/>
        </div>
      </div>
    </div>
  </section>
  @endsection
