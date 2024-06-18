<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Vehiculo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $clientes = Cliente::query()
            ->when(request('search'), function ($query) {
                return $query->where('cedula_rif','LIKE','%' . request('search') .'%')
                ->orWhere('nombre','LIKE','%' . request('search') .'%')
                ->orWhere('apellido','LIKE','%' . request('search') .'%')
                ->orWhere('b_cedula','LIKE','%' . request('search') .'%')
                ->orWhere('b_nombre','LIKE','%' . request('search') .'%')
                ->orWhere('b_apellido','LIKE','%' . request('search') .'%')
                ->orWhere('telefono','LIKE','%' . request('search') .'%');
            })
            ->paginate();

        return view('cliente.index', compact('clientes'))
            ->with('i', ($request->input('page', 1) - 1) * $clientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $cliente = new Cliente();

        return view('cliente.create', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClienteRequest $request): RedirectResponse
    {
        Cliente::create($request->validated());

        return Redirect::route('clientes.index')
            ->with('success', 'Cliente created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $cliente = Cliente::find($id);
        //$vehiculos = $cliente->vehiculos;
        //$vehiculos = Vehiculo::All();
        //$vehiculos = Vehiculo::where('id_cliente',$id);
        /*$vehiculos = Vehiculo::whereHas('vehiculos', function($query) {
            $query->where('id', 'id_cliente');
        })->get();  */
        $vehiculos = Vehiculo::where('id_cliente', $id)->get();


        return view('cliente.show', compact('cliente','vehiculos'));
    }

    


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $cliente = Cliente::find($id);

        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClienteRequest $request, Cliente $cliente): RedirectResponse
    {
        $cliente->update($request->validated());

        return Redirect::route('clientes.index')
            ->with('success', 'Cliente updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Cliente::find($id)->delete();

        return Redirect::route('clientes.index')
            ->with('success', 'Cliente deleted successfully');
    }
}
