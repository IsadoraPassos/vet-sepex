<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Consulta;
use App\Models\Tratamento;
use App\Models\Veterinario;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultas = Consulta::with(['tratamento', 'veterinario'])->get();

        return view('consulta.index', compact('consultas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $veterinarios = Veterinario::all();
        $tratamentos = Tratamento::all();

        return view('consulta', compact('veterinarios', 'tratamentos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $consulta = new Consulta();
        $consulta->data = $request->input('data');
        $consulta->resumo = $request->input('resumo');
        $consulta->veterinario_id = $request->input('veterinario');
        $consulta->tratamento_id = $request->input('tratamento');
        
        $consulta->save();

        return redirect(route('consultas.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $consulta = Consulta::find($id);
        $veterinarios = Veterinario::all();

        return view('consulta.edit', compact('consulta', 'veterinarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $consulta = Consulta::find($id);
        $consulta->resumo = $request->input('resumo');
        $consulta->data = $request->input('data');
        $consulta->veterinario_id = $request->input('veterinario');

        $consulta->save();

        return redirect(route('consultas.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $consulta = Consulta::find($id);

        $consulta->delete();

        return redirect(route('consultas.index'));
    }
}
