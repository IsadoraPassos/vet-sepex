<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Tratamento;
use Illuminate\Http\Request;

class TratamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tratamentos = Tratamento::with('animal')->get();

        return view('tratamento.index', compact('tratamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $animais = Animal::all();

        return view('tratamento', compact('animais'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tratamento = new Tratamento();
        $tratamento->descricao = $request->input('descricao');
        $tratamento->animal_id = $request->input('animal');
        $tratamento->save();

        return redirect(route('tratamentos.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tratamento = Tratamento::find($id);
        $animais = Animal::all();

        return view('tratamento.edit', compact('tratamento', 'animais'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tratamento = Tratamento::find($id);
        $tratamento->descricao = $request->input('descricao');
        //$tratamento->animal_id = $request->input('animal');
        $tratamento->save();

        return redirect(route('tratamentos.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tratamento = Tratamento::find($id);
        $tratamento->delete();

        return redirect(route('tratamentos.index'));
    }
}
