@extends('layouts.admin')
@section('contenido')
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Listado de personas</li>
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
                                    <h5>Listado de personas</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 form-group">
                                            <a href="{{ route('create.equipo') }}" type="button" class="btn btn-success">Registrar persona</a>
                                        </div>
                                        <div class="col-lg-12">
                                            <table class="table table-sm">
                                                <thead class="thead-dark">
                                                    <th>Foto</th>
                                                    <th>Nombres</th>
                                                    <th>Cargo</th>
                                                    <th>Opciones</th>
                                                </thead>
                                               @foreach ($equipo as $item)
                                               <tbody>
                                                <td><img src="{{ asset('equipo/'.$item->imagen) }}" style="width: 100px"></td>
                                                   <td>{{ $item->nombres }}</td>
                                                   <td>{{ $item->cargo }}</td>
                                                   <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          <i class="icon-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                          <a class="dropdown-item" href="{{ route('edit.equipo',$item->id) }}">Editar</a>
                                                          <a class="dropdown-item" data-toggle="modal" data-target="#modal-{{ $item->id }}">Eliminar</a>
                                                        </div>
                                                        @include('admin.equipo.modal')
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
