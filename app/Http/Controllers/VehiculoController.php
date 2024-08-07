<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\VehiculoRequest;
use App\Models\Clase;
use App\Models\Color;
use App\Models\Marca;
use App\Models\Tipo;
use App\Models\Uso;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {   /*
        $vehiculos = Vehiculo::paginate();

        return view('vehiculo.index', compact('vehiculos'))
            ->with('i', ($request->input('page', 1) - 1) * $vehiculos->perPage());
        */

        $vehiculos = Vehiculo::query()->orderByDesc('id')
        //->with(['plan'])
        ->when(request('search'), function ($query) {
            return $query->where('placa','LIKE','%' . request('search') .'%')
            ->orWhereHas('cliente', function ($q) {
                $q->where('nombre','LIKE','%'. request('search') . '%');
            })
            ->orWhereHas('cliente', function ($q) {
                $q->where('apellido','LIKE','%'. request('search') . '%');
            });
        })
        ->paginate();

        return view('vehiculo.index', compact('vehiculos'))
            ->with('i', ($request->input('page', 1) - 1) * $vehiculos->perPage());

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $vehiculo = new Vehiculo();

        return view('vehiculo.create', compact('vehiculo'));
    }

    public function create_cliente($id): View
    {
        $vehiculo = new Vehiculo();

        $marcas = Marca::all();
        $clases = Clase::all();
        $colors = Color::all();
        $tipos = Tipo::all();
        $usos = Uso::all();

        return view('vehiculo.create_cliente', compact('vehiculo','marcas','clases','colors','tipos','usos','id'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(VehiculoRequest $request): RedirectResponse
    {
        Vehiculo::create($request->validated());

        return Redirect::route('vehiculos.index')
            ->with('success', 'Vehiculo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $vehiculo = Vehiculo::find($id);

        return view('vehiculo.show', compact('vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $vehiculo = Vehiculo::find($id);

        return view('vehiculo.edit', compact('vehiculo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VehiculoRequest $request, Vehiculo $vehiculo): RedirectResponse
    {
        $vehiculo->update($request->validated());

        return Redirect::route('vehiculos.index')
            ->with('success', 'Vehiculo updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Vehiculo::find($id)->delete();

        return Redirect::route('vehiculos.index')
            ->with('success', 'Vehiculo deleted successfully');
    }
}
