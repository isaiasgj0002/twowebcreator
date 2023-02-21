@extends('plantillas.1000.admin')
@section('1000')
<section class="breadcrumbs-custom" style="margin-top: 150px !important;">
    <div class="parallax-container" data-parallax-img="{{ asset('general/'.$general->fondo_principal) }}">
      <div class="breadcrumbs-custom-body parallax-content context-dark">
        <div class="container">
          <h1 class="breadcrumbs-custom-title" style="font-family: {{ $general->fuente }} !important;">Contactanos</h1>
        </div>
      </div>
    </div>
    <div class="breadcrumbs-custom-footer">
      <div class="container">
        <ul class="breadcrumbs-custom-path">
          <li class="active" style="font-family: {{ $general->fuente }} !important;">Complete el formulario</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- Get in touch-->
  <section class="section section-xl bg-default text-md-left">
    <div class="container">
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
      <div class="title-classic">
        <h3 class="title-classic-title">Escribanos</h3>
        <p class="title-classic-subtitle">Le responderemos lo mas rapido posible.</p>
      </div>
      <form method="post" action="{{ route('store.contacto',$dominio) }}">
        {{ csrf_field() }}
        <div class="row row-20 row-md-30">
          <div class="col-lg-8">
            <div class="row row-20 row-md-30">
              <div class="col-sm-6">
                <div class="form-wrap">
                    <input type="hidden" value="{{ $idpagina }}" name="idpagina">
                  <input class="form-input" id="contact-first-name-2" type="text" name="name" data-constraints="@Required"/>
                  <label class="form-label" for="contact-first-name-2">Nombre</label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-wrap">
                  <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required"/>
                  <label class="form-label" for="contact-email-2">E-mail</label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-wrap">
                  <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric"/>
                  <label class="form-label" for="contact-phone-2">telefono</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-wrap">
              <label class="form-label" for="contact-message-2">Mensaje</label>
              <textarea class="form-input textarea-lg" id="contact-message-2" name="mensaje" data-constraints="@Required"></textarea>
            </div>
          </div>
        </div>
        <button class="button button-lg button-secondary button-zakaria" type="submit">Enviar Mensaje</button>
      </form>
    </div>
  </section>
@endsection
