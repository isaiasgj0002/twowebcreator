@extends('plantillas.1003.admin')
@section('1003')
<section class="parallax-container" data-parallax-img="{{ asset('general/'.$general->fondo_principal) }}">
    <div class="parallax-content breadcrumbs-custom context-dark">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-9">
            <h2 class="breadcrumbs-custom-title">Contactanos</h2>
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
  <section class="section section-lg text-center bg-default">
    <div class="container">
      <div class="row row-50">
        <div class="col-md-6 col-lg-4">
          <div class="box-icon-classic">
            <div class="box-icon-inner decorate-triangle decorate-color-secondary"><span class="icon-xl linearicons-phone-incoming icon-gradient-1"></span></div>
            <div class="box-icon-caption">
              <h4><a href="tel:{{ $footer->telefono }}">{{ $footer->telefono }}</a></h4>
              <p>{{ $footer->horarios }}</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box-icon-classic">
            <div class="box-icon-inner decorate-circle decorate-color-secondary-2"><span class="icon-xl linearicons-map2 icon-gradient-2"></span></div>
            <div class="box-icon-caption">
              <h4><a href="#">{{ $footer->direccion }}</a></h4>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box-icon-classic">
            <div class="box-icon-inner decorate-rectangle decorate-color-primary"><span class="icon-xl linearicons-paper-plane icon-gradient-3"></span></div>
            <div class="box-icon-caption">
              <h4><a href="mailto:#">{{ $footer->correo }}</a></h4>
              <p>Mail</p>
              @if(Session::has('succes'))
                <div class="alert alert-success alert dismisable fade show mb-4 mt-4" role="alert">
                    {{ Session::get('succes') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
            @if($errors->any())
            {!! implode('', $errors->all('<span class="text text-danger">:message</span>')) !!}
            @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact us-->
  <section class="section section-lg bg-gray-1 text-center">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-9 col-lg-7">
          <h3>Envianos un mensaje</h3>
          <!-- RD Mailform-->
          <form method="POST" action="{{ route('store.contacto',$dominio) }}">
            {{ csrf_field() }}
            <input type="hidden" value="{{ $idpagina }}" name="idpagina">
            <div class="form-wrap">
              <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
              <label class="form-label" for="contact-name">Nombre</label>
            </div>
            <div class="form-wrap">
              <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
              <label class="form-label" for="contact-email">E-mail</label>
            </div>
            <div class="form-wrap">
              <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric">
              <label class="form-label" for="contact-phone">Telefono</label>
            </div>
            <div class="form-wrap">
              <label class="form-label" for="contact-message"> Mensaje</label>
              <textarea class="form-input" id="contact-message" name="mensaje" data-constraints="@Required"></textarea>
            </div>
            <div class="row justify-content-center">
              <div class="col-12 col-sm-7 col-lg-5">
                <button class="button button-block button-lg button-gradient" type="submit">Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
