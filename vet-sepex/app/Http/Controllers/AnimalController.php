<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Cliente;
use App\Models\Especie;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animais = Animal::with(['especie', 'cliente'])->get();

        return view('animal.index', compact('animais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        $especies = Especie::all();
        return view('animal', compact('clientes', 'especies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $animal = new Animal();
        $animal->nome = $request->input('nome');
        $animal->idade = $request->input('idade');
        $animal->sexo = $request->input('sexo');
        $animal->cliente_id = $request->input('dono');
        $animal->especie_id = $request->input('especie');
        $animal->save();

        return redirect(route('animais.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $animal = Animal::with(['especie', 'cliente'])->find($id);
        return view('animal.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $animal = Animal::find($id);
        $clientes = Cliente::all();
        return view('animal.edit', compact('animal', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $animal = Animal::find($id);

        $animal->nome = $request->input('nome');
        $animal->idade = $request->input('idade');
        //$animal->sexo = $request->input('sexo');
        $animal->cliente_id = $request->input('dono');
        $animal->save();

        return redirect(route('animais.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $animal = Animal::find($id);
        $animal->delete();

        return redirect(route('animais.index'));
    }

}
