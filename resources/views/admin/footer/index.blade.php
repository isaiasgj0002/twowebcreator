@extends('layouts.admin')
@section('contenido')
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Configuracion Footer</li>
</ol>
<div class="container-fluid">
    <div id="ui-view">
        <div>

            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-8">
                        @if(Session::has('succes'))
                        <div class="alert alert-success alert dismisable fade show mb-4 mt-4" role="alert">
                            {{ Session::get('succes') }}
                            <button type="button" class="close" data-dismiss="alert"  aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <form method="POST" action="{{ route('update.footer',$footer->id) }}" role="form">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PATCH">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Configuracion Footer</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4 form-group">
                                            <label><b>Color del texto</b></label>
                                            <input type="text" class="jscolor form-control {{ $errors->has('color') ? ' is-invalid' : '' }}" name="color" value="{{ $footer->color }}">
                                            @if ($errors->has('color'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('color') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-4 form-group">
                                            <label><b>Color de fondo</b></label>
                                            <input type="text" class="jscolor form-control {{ $errors->has('background') ? ' is-invalid' : '' }}" name="background" value="{{ $footer->background }}">
                                            @if ($errors->has('background'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('background') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-4 form-group">
                                            <label><b>Telefono</b></label>
                                            <input type="number" class="form-control {{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" placeholder="Número de telefono" value="{{ $footer->telefono }}">
                                            @if ($errors->has('telefono'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('telefono') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <input type="text" class="form-control {{ $errors->has('cr') ? ' is-invalid' : '' }}" name="cr" placeholder="Texto del footer" value="{{ $footer->cr }}">
                                            @if ($errors->has('cr'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('cr') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <input type="email" class="form-control {{ $errors->has('correo') ? ' is-invalid' : '' }}" name="correo" placeholder="Correo electronico" value="{{ $footer->correo }}">
                                            @if ($errors->has('correo'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('correo') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <input type="text" class="form-control {{ $errors->has('horarios') ? ' is-invalid' : '' }}" name="horarios" placeholder="Horarios" value="{{ $footer->horarios }}">
                                            @if ($errors->has('horarios'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('horarios') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea name="direccion" class="form-control {{ $errors->has('direccion') ? ' is-invalid' : '' }}" style="height: 80px !important">{{ $footer->direccion }}</textarea>
                                            @if ($errors->has('direccion'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('direccion') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
