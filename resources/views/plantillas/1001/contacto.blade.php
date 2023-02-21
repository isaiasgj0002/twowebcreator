@extends('plantillas.1001.admin')
@section('1001')
<section id="contact" class="section-bg wow fadeInUp" style="margin-top: 70px !important">
    <div class="container">

      <div class="section-header">
        <h3 style="font-family: {{ $general->fuente }} !important;">Contactanos</h3>
        <p style="font-family: {{ $general->fuente }} !important;">Le responderemos lo mas rapido posible</p>
      </div>

      <div class="row contact-info">

        <div class="col-md-4">
          <div class="contact-address">
            <i class="ion-ios-location-outline"></i>
            <h3 style="font-family: {{ $general->fuente }} !important;">Direccion</h3>
            <address><?php echo $footer->direccion ?></address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="ion-ios-telephone-outline"></i>
            <h3 style="font-family: {{ $general->fuente }} !important;">Telefono</h3>
            <p><a href="tel:{{ $footer->telefono }}">{{ $footer->telefono }}</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="ion-ios-email-outline"></i>
            <h3 style="font-family: {{ $general->fuente }} !important;">Email</h3>
            <p style="font-family: {{ $general->fuente }} !important;"><a href="mailto:{{ $footer->correo }}">{{ $footer->correo }}</a></p>
          </div>
        </div>
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

      <div class="form">
        <form action="{{ route('store.contacto',$dominio) }}" method="post" role="form" class="contactForm">
            {{ csrf_field() }}
            <input type="hidden" value="{{ $idpagina }}" name="idpagina">
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="phone" id="subject" placeholder="Telefono" data-rule="maxlen:20" data-msg="Please enter at least 8 chars of subject" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="mensaje" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
            <div class="validation"></div>
          </div>
          <div class="text-center"><button type="submit">Enviar</button></div>
        </form>
      </div>

    </div>
  </section><!-- #contact -->
  @endsection
