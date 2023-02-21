@extends('layouts.admin')
@section('contenido')
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Listado de enlaces</li>
</ol>
<div class="container-fluid">
    <div id="ui-view">
        <div>
            <div class="animated fadeIn">
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
                                    <h5>Listado de enlaces recomenados</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 form-group">
                                            <a href="{{ route('create.enlace') }}" type="button" class="btn btn-success">Registrar enlace</a>
                                        </div>
                                        <div class="col-lg-12">
                                            <table class="table table-sm">
                                                <thead class="thead-dark">
                                                    <th>Imagen</th>
                                                    <th>Enlace</th>
                                                    <th>Opciones</th>
                                                </thead>
                                               @foreach ($enlace as $item)
                                               <tbody>
                                                <td><img src="{{ asset('enlaces/'.$item->imagen) }}" style="width: 100px"></td>
                                                   <td><a href="{{ $item->enlace }}" target="_blank">{{ $item->enlace }}</a></td>
                                                   <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          <i class="icon-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                          <a class="dropdown-item" href="{{ route('edit.enlace',$item->id) }}">Editar</a>
                                                          <a class="dropdown-item" data-toggle="modal" data-target="#modal-{{ $item->id }}">Eliminar</a>
                                                        </div>
                                                        @include('admin.enlace.modal')
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
