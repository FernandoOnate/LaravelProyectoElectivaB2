<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\tb_proveedores;
use Illuminate\Http\Request;

class proveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = tb_proveedores::all();
        return view('admin.proveedores.index',compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.proveedores.crear');
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
                    'nit' => 'required',
                    'correo' => 'required',
                    'insumo' => 'required',
                    'telefono' => 'required'
                ]
            );
            $proveedor = tb_proveedores::create($request->all());
            $mensaje = 'El proveedor ha sido almacenado correctamente';
            $e = 0;
        } catch (\Throwable $th) {
            //throw $th;
            $mensaje = 'El cliente no se pudo almacenar';
            $e = 1;
        }
        return redirect()->route('admin.proveedores.index', ['e' => $e])->with('mensaje', $mensaje);
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
    public function edit(tb_proveedores $proveedore)
    {
        return view('admin.proveedores.editar',compact('proveedore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,tb_proveedores $proveedore)
    {
        $e = null;
        try {
            $request->validate(
                [
                    'id',
                    'nombre' => 'required',
                    'nit' => 'required',
                    'correo' => 'required',
                    'insumo' => 'required',
                    'telefono' => 'required'
                ]
            );
            $proveedore->update($request->all());
            $mensaje = 'El proveedor ha sido actualizado correctamente.';
            $e = 0;
        } catch (\Throwable $th) {
            //throw $th;
            $mensaje = 'Error al actualizar.';
            $e = 1;
        }
        return redirect()->route('admin.proveedores.index', ['e' => $e])->with('mensaje', $mensaje);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_proveedores $proveedore)
    {
        $e = null;
        try {
            $proveedore->delete();
            $e = 0;
            $mensaje = 'El proveedor ha sido eliminado correctamente';
        } catch (\Throwable $th) {
            //throw $th;
            $e = 1;
            $mensaje = 'Error al eliminar';
        }
        return redirect()->route('admin.proveedores.index', ['e' => $e])->with('mensaje', $mensaje);
    }
}
