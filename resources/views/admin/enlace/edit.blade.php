@extends('layouts.admin')
@section('contenido')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('index.enlace') }}">Listado de enlaces</a></li>
    <li class="breadcrumb-item active">Registro de enlaces</li>
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
                        <div class="col-lg-10">
                           <form method="POST" action="{{ route('update.enlace',$enlace->id) }}" role="form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PATCH">
                               <div class="card">
                                   <div class="card-header">
                                       <h5>Edicion de enlace</h5>
                                   </div>
                                   <div class="card-body">
                                       <div class="row">
                                           <div class="col-lg-6 form-group">
                                               <input type="text" class="form-control" placeholder="Enlace" name="enlace" value="{{ $enlace->enlace }}">
                                           </div>
                                        <div class="col-lg-6 form-group">
                                            <input type="file" class="form-control" name="imagen">
                                        </div>
                                        <div class="col-lg-3 mx-auto">
                                            <img src="{{ asset('enlaces/'.$enlace->imagen) }}" style="width: 80px !important">
                                        </div>
                                       </div>
                                   </div>
                                   <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
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
