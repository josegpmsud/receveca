@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? __('Show') . " " . __('Cliente') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('clientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nac:</strong>
                                    {{ $cliente->nac }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $cliente->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido:</strong>
                                    {{ $cliente->apellido }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cedula Rif:</strong>
                                    {{ $cliente->cedula_rif }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>B Nac:</strong>
                                    {{ $cliente->b_nac }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>B Nombre:</strong>
                                    {{ $cliente->b_nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>B Apellido:</strong>
                                    {{ $cliente->b_apellido }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>B Cedula:</strong>
                                    {{ $cliente->b_cedula }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion:</strong>
                                    {{ $cliente->direccion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono:</strong>
                                    {{ $cliente->telefono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $cliente->estado }}
                                </div>

                    </div>
                    <ul>

                    
                </ul>
                <div class="table-responsive">
                    <a class="btn btn-sm btn-primary " href="{{ route('vehiculos.create_cliente', $cliente->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Agregar Vehiculo') }}</a>
                                                    
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
                            @php
                                $i=0;
                            @endphp
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
                                            <a class="btn btn-sm btn-primary " href="{{ route('contratos.create_vehiculo', $vehiculo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Contrato') }}</a>
                                            
                                            <a class="btn btn-sm btn-primary " href="{{ route('vehiculos.show', $vehiculo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('vehiculos.edit', $vehiculo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>




                </div>




            </div>
        </div>
    </section>
@endsection


