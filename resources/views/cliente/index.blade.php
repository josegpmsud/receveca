@extends('layouts.app')

@section('template_title')
    Clientes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Clientes') }}
                            </span>

                            <form method="GET">
                                <div class="input-group mb-3">
                                    <input name= "search" type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Buscar</button>
                                </div>

                            </form>

                             <div class="float-right">

                                {{--
                                <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a> --}}

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

									<th >Nac</th>
									<th >Cedula Rif</th>
									<th >Nombre</th>
									<th >Apellido</th>
									<th >Direccion</th>
									<th >Telefono</th>
									<th >B Nac</th>
									<th >B Cedula</th>
									<th >B Nombre</th>
									<th >B Apellido</th>
									<th >Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $cliente->nac }}</td>
										<td >{{ $cliente->cedula_rif }}</td>
										<td >{{ $cliente->nombre }}</td>
										<td >{{ $cliente->apellido }}</td>
										<td >{{ $cliente->direccion }}</td>
										<td >{{ $cliente->telefono }}</td>
										<td >{{ $cliente->b_nac }}</td>
										<td >{{ $cliente->b_cedula }}</td>
										<td >{{ $cliente->b_nombre }}</td>
										<td >{{ $cliente->b_apellido }}</td>
										<td >{{ $cliente->estado }}</td>

                                            <td>
                                                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('clientes.show', $cliente->id) }}"><i class="fa fa-fw fa-eye"></i> Selecionar <i class="bi bi-file-earmark"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('clientes.edit', $cliente->id) }}"><i class="fa fa-fw fa-edit"></i><i class="bi bi-pencil-square"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i><i class="bi bi-trash3"></i>
                                                        </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @if ($i<=0)

                                        <div class="float-right">

                                            @php
                                                $cedula = $_GET['search'];
                                            @endphp

                                                <a href="{{ route('clientes.create_cedula', $cedula) }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                                    {{ __('Agregar nuevo cliente con la cecula: ' ). $cedula  }}
                                                </a>

                                          </div>
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $clientes->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
