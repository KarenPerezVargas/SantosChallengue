<?php

namespace App\Http\Controllers;
use App\Models\Transporte;

use Illuminate\Http\Request;

class TransporteController extends Controller
{
    public function index()
    {
        $transporte = Transporte::all();
        return view('inventario.transporte.transporte', compact('transporte'));
    }

    public function create()
    {
        return view('inventario.transporte.createTransporte');
    }

    public function store(Request $request)
    {
        $transporte = new Transporte();
        $transporte->trans_nombre = $request->trans_codigo;
        $transporte->trans_descripcion = $request->trans_descripcion;
        $transporte->trans_capacidad = $request->trans_capacidad;
        $transporte->trans_conductor = $request->trans_conductor;
        $transporte->save();
        return redirect()->route('transporte');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $transporte = Transporte::find($id);
        return view('inventario.transporte.editTransporte', compact('transporte', 'id'));
    }

    public function update(Request $request, string $id)
    {
        $transporte = new Transporte();
        $transporte->trans_nombre = $request->trans_codigo;
        $transporte->trans_descripcion = $request->trans_descripcion;
        $transporte->trans_capacidad = $request->trans_capacidad;
        $transporte->trans_conductor = $request->trans_conductor;
        $transporte->save();
        return redirect()->route('transporte');
    }

    public function destroy(string $id)
    {
        $transporte = Transporte::find($id);
        $transporte->delete();
        return redirect()->route('transporte');
    }
}
