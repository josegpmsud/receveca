@extends('layouts.app')

@section('template_title')
    Vehiculos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Vehiculos') }}
                            </span>

                            <form method="GET">
                                <div class="input-group mb-3">
                                    <input name= "search" type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Buscar</button>
                                </div>

                            </form>

                             <div class="float-right">
                                {{--
                                <a href="{{ route('vehiculos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear contrato') }}
                                </a>
                                --}}
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

									<th >Cliente</th>
									<th >Marca</th>
									<th >Clase</th>
									<th >Modelo</th>
									<th >Color</th>
									<th >Tipo</th>
									<th >Uso</th>
									<th >Placa</th>
									<th >Año</th>
									<th >Peso</th>
									<th >Serial Motor</th>
									<th >Puestos</th>
									<th >Serial Niv</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vehiculos as $vehiculo)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $vehiculo->cliente->nombre }} {{ $vehiculo->cliente->apellido }}</td>
										<td >{{ $vehiculo->marca->descripcion }}</td>
										<td >{{ $vehiculo->clase->descripcion }}</td>
										<td >{{ $vehiculo->modelo }}</td>
										<td >{{ $vehiculo->color->descripcion }}</td>
										<td >{{ $vehiculo->tipo->descripcion  }}</td>
										<td >{{ $vehiculo->uso->descripcion  }}</td>
										<td >{{ $vehiculo->placa }}</td>
										<td >{{ $vehiculo->ano }}</td>
										<td >{{ $vehiculo->peso }}</td>
										<td >{{ $vehiculo->serial_motor }}</td>
										<td >{{ $vehiculo->puestos }}</td>
										<td >{{ $vehiculo->serial_niv }}</td>

                                            <td>
                                                <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-warning " href="{{ route('contratos.create_vehiculo', $vehiculo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Contrato') }}<i class="bi bi-file-earmark-plus"></i></a>

                                                    <a class="btn btn-sm btn-primary " href="{{ route('vehiculos.show', $vehiculo->id) }}"><i class="fa fa-fw fa-eye"></i> <i class="bi bi-file-earmark"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('vehiculos.edit', $vehiculo->id) }}"><i class="fa fa-fw fa-edit"></i> <i class="bi bi-pencil-square"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i><i class="bi bi-trash3"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $vehiculos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
