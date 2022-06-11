@extends('layouts.app')



@section('template_title')
    Contenido
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contenido') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('contenidos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre Contenido</th>
										<th>Tipo</th>
										<th>Descripcion</th>
										<th>Formato</th>
										<th>Precio</th>
										<th>Contenido</th>
										<th>Autor</th>
										<th>Categoria</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contenidos as $contenido)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $contenido->nombre_contenido }}</td>
											<td>{{ $contenido->tipo }}</td>
											<td>{{ $contenido->descripcion }}</td>
											<td>{{ $contenido->formato }}</td>
											<td>{{ $contenido->precio }}</td>
											<td class="align-items-center">
                                            <span class="avatar avatar-sm rounded-circle">
                                                <img alt="Content Image" class="modalImg" src="{{ $contenido->contenido }}">
                                            </span>
                                            
                                            </td>
											<td>{{ $contenido->autor->nombre_autor }}</td>
											<td>{{ $contenido->categoria->nombre_categoria }}</td>

                                            <td>
                                                <form action="{{ route('contenidos.destroy',$contenido->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('contenidos.edit',$contenido->id) }}"><i class="fa fa-fw fa-edit"></i> Editar </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $contenidos->links() !!}
            </div>
        </div>
    </div>
@endsection
