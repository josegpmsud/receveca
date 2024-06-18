<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ContratoRequest;
use App\Models\Plan;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $contratos = Contrato::query()  
        //->with(['plan'])
        ->when(request('search'), function ($query) {
            return $query->where('codigo','LIKE','%' . request('search') .'%')
            ->orWhere('cobertura','LIKE','%' . request('search') .'%')
            ->orWhereHas('plan', function ($q) {
                $q->where('descripcion','LIKE','%'. request('search') . '%');
            });
            
        })
        ->paginate();

        return view('contrato.index', compact('contratos'))
            ->with('i', ($request->input('page', 1) - 1) * $contratos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $contrato = new Contrato();
        $plans = Plan::all();       

        return view('contrato.create', compact('contrato','plans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContratoRequest $request): RedirectResponse
    {
        Contrato::create($request->validated());

        return Redirect::route('contratos.index')
            ->with('success', 'Contrato created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $contrato = Contrato::find($id);

        return view('contrato.show', compact('contrato'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $contrato = Contrato::find($id);
        $plans = Plan::all();

        return view('contrato.edit', compact('contrato','plans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContratoRequest $request, Contrato $contrato): RedirectResponse
    {
        $contrato->update($request->validated());

        return Redirect::route('contratos.index')
            ->with('success', 'Contrato updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Contrato::find($id)->delete();

        return Redirect::route('contratos.index')
            ->with('success', 'Contrato deleted successfully');
    }
}
