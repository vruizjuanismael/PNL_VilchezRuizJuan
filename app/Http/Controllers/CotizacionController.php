<?php

namespace App\Http\Controllers;

use App\Models\Cotizacion;
use Illuminate\Http\Request;
use App\Http\Requests\CotizacionRequest;
use App\Models\Cliente;

class CotizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $registros = Cotizacion::where('productos_servicios', 'like', '%' . $texto . '%')->paginate(10);
        return view('cotizacion.index', compact('texto', 'registros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        return view('cotizacion.create', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cotizacion = new Cotizacion;
        $cotizacion->cliente_id = $request->input('cliente_id');
        $cotizacion->fecha_creacion = $request->input('fecha_creacion');
        $cotizacion->productos_servicios = $request->input('productos_servicios');
        $cotizacion->cantidad = $request->input('cantidad');
        $cotizacion->precio_unitario = $request->input('precio_unitario');
        $cotizacion->total = $request->input('total');
        $cotizacion->estado = $request->input('estado');
        $cotizacion->notas = $request->input('notas');
        $cotizacion->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Registro creado satisfactoriamente'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cotizacion $cotizacion)
    {
        return "Mostrar";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        return view('cotizacion.action', compact('cotizacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CotizacionRequest $request, $id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        $cotizacion->cliente_id = $request->cliente_id;
        $cotizacion->fecha_creacion = $request->fecha_creacion;
        $cotizacion->productos_servicios = $request->productos_servicios;
        $cotizacion->cantidad = $request->cantidad;
        $cotizacion->precio_unitario = $request->precio_unitario;
        $cotizacion->total = $request->total;
        $cotizacion->estado = $request->estado;
        $cotizacion->notas = $request->notas;
        $cotizacion->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Actualización de datos satisfactoria'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $registro = Cotizacion::findOrFail($id);
        $registro->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Cotización eliminada'
        ]);
    }
}
