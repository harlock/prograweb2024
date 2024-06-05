<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::all();

        return view('pedidos.index',compact('pedidos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $clientes =Cliente::all();
        $empleados =Empleado::all();
        return view('pedidos.create',compact("clientes","empleados"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'fecha_pedido' => 'required',
            'total' => 'required',
            'id_cliente' => 'required',
            'id_empleado' => 'required',
        ]);

        Pedido::create($request->all());
        return redirect()->route('pedidos.index')

            ->with('success','pedido creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
