@extends('layouts.app')

@section('template_title')
    Promocione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Promocione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('promociones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Fecha de Inicio</th>
										<th>Fecha Fin</th>
										<th>Descuento</th>
										<th>Portada</th>
										<th>Contenido Asociado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($promociones as $promocione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $promocione->f_inicio }}</td>
											<td>{{ $promocione->f_fin }}</td>
											<td>{{ $promocione->descuento }}</td>
											<td>
                                            
                                                <span class="avatar avatar-sm rounded-circle">
                                                    <img alt="Content Image" class="modalImg" src="{{ $promocione->portada }}">
                                                </span>
                                            
                                            </td>
											<td>{{ $promocione->contenido->nombre_contenido }}</td>

                                            <td>
                                                <form action="{{ route('promociones.destroy',$promocione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('promociones.show',$promocione->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('promociones.edit',$promocione->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $promociones->links() !!}
            </div>
        </div>
    </div>
@endsection
