@extends('layouts.admin')
@section('contenido')
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Listado de Paginas</li>
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
                        <div class="card">
                            <div class="card-header">
                                <h4>Mis paginas</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 form-group">
                                        <a href="{{ route('create.pagina') }}" class="btn btn-primary">Ingresar Pagina</a>
                                        <a data-toggle="modal" data-target="#open-selector" class="btn btn-primary">Seleccionar Pagina de edicion</a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="open-selector" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                            <form action="{{ route('update.current',auth()->user()->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                <input name="_method" type="hidden" value="PATCH">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Selecionar pagina de edicion</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <div class="row">
                                                            @if (!auth()->user()->current_page)
                                                                <div class="col-lg-12">
                                                                    <div class="alert alert-danger" role="alert">
                                                                        No has creado ninguna pagina
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            <div class="col-lg-12">
                                                                <select name="current_page" class="form-control">
                                                                    @foreach ($data_paginas as $item)
                                                                    @if($item->id==auth()->user()->current_page)
                                                                    <option value="{{ $item->id }}" selected>{{ $item->dominio }}</option>
                                                                    @else
                                                                    <option value="{{ $item->id }}">{{ $item->dominio }}</option>
                                                                    @endif
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                    </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-primary">Seleccionar</button>
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <table class="table table-sm">
                                            <thead class="thead-dark">
                                                <th>Dominio</th>
                                                <th>Estado</th>
                                                <th>Opciones</th>
                                            </thead>
                                            @foreach ($data_paginas as $item)
                                                <tbody>
                                                    <td>{{ $item->dominio }}</td>
                                                    <td>
                                                        @if($item->estado=='activo')
                                                        <span class="badge badge-success">{{ $item->estado }}</span>
                                                        @else
                                                        <span class="badge badge-danger">{{ $item->estado }}</span>
                                                        @endif
                                                        </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Opciones
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" data-toggle="modal" data-target="#open-{{ $item->id }}">Cambiar dominio</a>
                                                                <a class="dropdown-item" href="{{ route('change.theme',$item->id) }}">Cambiar plantilla</a>
                                                                <a class="dropdown-item" data-toggle="modal" data-target="#modal-delete-{{ $item->id }}">Eliminar</a>
                                                                <a class="dropdown-item" href="http://127.0.0.1:8000/{{ $item->dominio }}" target="_blank">Ir a pagina</a>
                                                            </div>
                                                            @include('admin.pagina.modal')
                                                            <div class="modal fade" id="open-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <form method="POST" action="{{ route('update.pagina',$item->id) }}">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Cambiar dominio</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                {{ csrf_field() }}
                                                                                <input name="_method" type="hidden" value="PATCH">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12">
                                                                                        <input type="text" class="form-control {{ $errors->has('dominio') ? ' is-invalid' : '' }}" name="dominio" placeholder="Nuevo dominio" value="{{ $item->dominio }}">
                                                                                        @if ($errors->has('dominio'))
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $errors->first('dominio') }}</strong>
                                                                                        </span>
                                                                                        @endif

                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            </div>

                                                    </td>
                                                </tbody>
                                            @endforeach

                                        </table>
                                    </div>
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
