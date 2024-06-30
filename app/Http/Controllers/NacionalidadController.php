<?php

namespace App\Http\Controllers;

use App\Models\Nacionalidad;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\NacionalidadRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class NacionalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $nacionalidads = Nacionalidad::paginate();

        return view('nacionalidad.index', compact('nacionalidads'))
            ->with('i', ($request->input('page', 1) - 1) * $nacionalidads->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $nacionalidad = new Nacionalidad();

        return view('nacionalidad.create', compact('nacionalidad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NacionalidadRequest $request): RedirectResponse
    {
        Nacionalidad::create($request->validated());

        return Redirect::route('nacionalidads.index')
            ->with('success', 'Nacionalidad created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $nacionalidad = Nacionalidad::find($id);

        return view('nacionalidad.show', compact('nacionalidad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $nacionalidad = Nacionalidad::find($id);

        return view('nacionalidad.edit', compact('nacionalidad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NacionalidadRequest $request, Nacionalidad $nacionalidad): RedirectResponse
    {
        $nacionalidad->update($request->validated());

        return Redirect::route('nacionalidads.index')
            ->with('success', 'Nacionalidad updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Nacionalidad::find($id)->delete();

        return Redirect::route('nacionalidads.index')
            ->with('success', 'Nacionalidad deleted successfully');
    }
}
