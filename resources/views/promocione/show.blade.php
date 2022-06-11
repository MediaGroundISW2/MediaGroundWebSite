@extends('layouts.app')

@section('template_title')
    {{ $promocione->name ?? 'Show Promocione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Promocione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('promociones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>F Inicio:</strong>
                            {{ $promocione->f_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>F Fin:</strong>
                            {{ $promocione->f_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Descuento:</strong>
                            {{ $promocione->descuento }}
                        </div>
                        <div class="form-group">
                            <strong>Contenido Id:</strong>
                            {{ $promocione->contenido_id }}
                        </div>
                        <div class="form-group">
                           
                            
                            <img src="{{ $promocione->portada }}" class="rounded float-start" width="200" height="200">
                        </div>
                        <br>
                        <br>
                        <br>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
