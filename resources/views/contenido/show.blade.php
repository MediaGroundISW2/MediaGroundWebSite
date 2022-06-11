@extends('layouts.app')

@section('template_title')
    {{ $contenido->name ?? 'Show Contenido' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Contenido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contenidos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Contenido:</strong>
                            {{ $contenido->nombre_contenido }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $contenido->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $contenido->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Formato:</strong>
                            {{ $contenido->formato }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $contenido->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Contenido:</strong>
                            {{ $contenido->contenido }}
                        </div>
                        <div class="form-group">
                            <strong>Autor Id:</strong>
                            {{ $contenido->autor_id }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $contenido->categoria_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
