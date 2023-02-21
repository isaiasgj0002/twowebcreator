@extends('layouts.admin')
@section('contenido')
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Listado de fondos</li>
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
                                    <h5>Mis patterns</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <form action="{{ route('update.fondos',$idgeneral) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" value="fondo1.png" name="fondo">
                                                    <div class="card">
                                                        <img src="{{ asset('recursos_fondos/fondo1.png') }}" style="width: 100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-4">
                                                <form action="{{ route('update.fondos',$idgeneral) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" value="fondo2.png" name="fondo">
                                                    <div class="card">
                                                        <img src="{{ asset('recursos_fondos/fondo2.png') }}" style="width: 100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-4">
                                                <form action="{{ route('update.fondos',$idgeneral) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" value="fondo3.png" name="fondo">
                                                    <div class="card">
                                                        <img src="{{ asset('recursos_fondos/fondo3.png') }}" style="width: 100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-4">
                                                <form action="{{ route('update.fondos',$idgeneral) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" value="fondo4.png" name="fondo">
                                                    <div class="card">
                                                        <img src="{{ asset('recursos_fondos/fondo4.png') }}" style="width: 100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-4">
                                                <form action="{{ route('update.fondos',$idgeneral) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" value="fondo5.png" name="fondo">
                                                    <div class="card">
                                                        <img src="{{ asset('recursos_fondos/fondo5.png') }}" style="width: 100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-4">
                                                <form action="{{ route('update.fondos',$idgeneral) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" value="fondo6.png" name="fondo">
                                                    <div class="card">
                                                        <img src="{{ asset('recursos_fondos/fondo6.png') }}" style="width: 100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-4">
                                                <form action="{{ route('update.fondos',$idgeneral) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" value="fondo7.png" name="fondo">
                                                    <div class="card">
                                                        <img src="{{ asset('recursos_fondos/fondo7.png') }}" style="width: 100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-4">
                                                <form action="{{ route('update.fondos',$idgeneral) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" value="fondo8.png" name="fondo">
                                                    <div class="card">
                                                        <img src="{{ asset('recursos_fondos/fondo8.png') }}" style="width: 100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-4">
                                                <form action="{{ route('update.fondos',$idgeneral) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" value="fondo8.png" name="fondo">
                                                    <div class="card">
                                                        <img src="{{ asset('recursos_fondos/fondo8.png') }}" style="width: 100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-4">
                                                <form action="{{ route('update.fondos',$idgeneral) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" value="fondo9.png" name="fondo">
                                                    <div class="card">
                                                        <img src="{{ asset('recursos_fondos/fondo9.png') }}" style="width: 100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-4">
                                                <form action="{{ route('update.fondos',$idgeneral) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <input type="hidden" value="fondo10.png" name="fondo">
                                                    <div class="card">
                                                        <img src="{{ asset('recursos_fondos/fondo10.png') }}" style="width: 100% !important">
                                                        <div class="card-body">
                                                            <center><button type="submit" class="btn btn-warning">Seleccionar</button></center>
                                                        </div>
                                                    </div>
                                                </form>
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
    </div>
</div>
@endsection
