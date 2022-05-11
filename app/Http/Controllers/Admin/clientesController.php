<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\tb_clientes;
use Illuminate\Http\Request;

class clientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = tb_clientes::all();
        return view('admin.clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clientes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $e = null;
        try {
            $request->validate(
                [
                    'id',
                    'nombre' => 'required',
                    'apellidos' => 'required',
                    'telefono' => 'required',
                    'correo' => 'required',
                    'codigo' => 'required',
                    'clave' => 'required'
                ]
            );
            $cliente = tb_clientes::create($request->all());
            $mensaje = 'El cliente ha sido almacenado correctamente';
            $e = 0;
        } catch (\Throwable $th) {
            //throw $th;
            $mensaje = 'El cliente no se pudo almacenar';
            $e = 1;
        }
        return redirect()->route('admin.clientes.index', ['e' => $e])->with('mensaje', $mensaje);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_clientes $cliente)
    {
        return view('admin.clientes.editar', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_clientes $cliente)
    {
        $e = null;
        try {
            $request->validate(
                [
                    'id',
                    'nombre' => 'required',
                    'apellidos' => 'required',
                    'telefono' => 'required',
                    'correo' => 'required',
                    'codigo' => 'required',
                    'clave' => 'required',
                ]
            );
            $cliente->update($request->all());
            $mensaje = 'El cliente ha sido actualizado correctamente';
            $e = 0;
        } catch (\Throwable $th) {
            //throw $th;
            $e = 1;
        }
        return redirect()->route('admin.clientes.index', ['e' => $e])->with('mensaje', $mensaje);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_clientes $cliente)
    {
        $e = null;
        try {
            $cliente->delete();
            $mensaje = 'El cliente ha sido eliminado correctamente';
            $e = 0;
        } catch (\Throwable $th) {
            //throw $th;
            $mensaje = 'Error al eliminar';
            $e = 1;
        }
        return redirect()->route('admin.clientes.index', ['e' => $e])->with('mensaje', $mensaje);
    }
}
