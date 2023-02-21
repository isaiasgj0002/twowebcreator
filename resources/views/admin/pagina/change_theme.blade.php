@extends('layouts.admin')
@section('contenido')
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Listado de plantillas</li>
</ol>
<div class="container-fluid">
    <div id="ui-view">
        <div>

            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('succes'))
                        <div class="alert alert-success alert dismisable fade show mb-4 mt-4" role="alert">
                            {{ Session::get('succes') }}
                            <button type="button" class="close" data-dismiss="alert"  aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($plantillas as $item)
                                        @if ($item->id == $pagina->idplantilla)
                                        <div class="col-lg-12 form-group">
                                            <form method="POST" action="{{ route('update.theme',$pagina->id) }}" role="form">
                                                {{ csrf_field() }}
                                                <input name="_method" type="hidden" value="PATCH">
                                                <div class="card">
                                                    <input type="hidden" value="{{ $item->id }}" name="idplantilla">
                                                    <div class="card-header" style="background: #353535 !important;
                                                    color: white !important;">
                                                        <h5>{{ $item->titulo }}</h5>
                                                    </div>
                                                    <img src="{{ asset('portadas/'.$item->portada) }}" style="width: 100% !important;">
                                                    <div class="card-body">
                                                        <p class="text-justify">{{ substr($item->descripcion,0,150) }}</p>
                                                    </div>
                                                </div>
                                            </form>
                                    </div>
                                        @elseif($item->id != $pagina->id)
                                        <div class="col-lg-12 form-group">
                                            <form method="POST" action="{{ route('update.theme',$pagina->id) }}" role="form">
                                                {{ csrf_field() }}
                                                <input name="_method" type="hidden" value="PATCH">
                                                <div class="card">
                                                    <input type="hidden" value="{{ $item->id }}" name="idplantilla">
                                                    <div class="card-header">
                                                        <h5>{{ $item->titulo }}</h5>
                                                    </div>
                                                    <img src="{{ asset('portadas/'.$item->portada) }}" style="width: 100% !important;">
                                                    <div class="card-body">
                                                        <p class="text-justify">{{ substr($item->descripcion,0,150) }}</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button class="btn btn-primary" type="submit">Seleccionar plantilla</button>
                                                    </div>
                                                </div>
                                            </form>
                                    </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

