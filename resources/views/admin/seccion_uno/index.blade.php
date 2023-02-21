@extends('layouts.admin')
@section('contenido')
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Seccion 1</li>
</ol>
<div class="container-fluid">
    <div id="ui-view">
        <div>
            <div class="animated fadeIn">
                <form method="POST" action="{{ route('update.seccion_uno',$seccion_uno->id) }}" role="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PATCH">
                    <div class="row">
                        @if(Session::has('succes'))
                        <div class="col-lg-8">
                            <div class="alert alert-success alert dismisable fade show mb-4 mt-4" role="alert">
                                {{ Session::get('succes') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        @endif
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Seccion 1</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 form-group">
                                            <input type = "text" placeholder="Titulo de la seccion" name="titulo" class="form-control" value="{{ $seccion_uno->titulo }}">
                                            @if ($errors->has('titulo'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('titulo') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <textarea name="descripcion" id="editor">{{ $seccion_uno->descripcion }}</textarea>
                                            @if ($errors->has('descripcion'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('descripcion') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Imagen</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 form-group">
                                            <input type="file" class="form-control" name="imagen">
                                            @if ($errors->has('imagen'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('imagen') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <img src="{{ asset('secciones/'.$seccion_uno->imagen) }}" style="width: 100% !important">
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <button type="submit" class="btn btn-success btn-block">Actualizar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

