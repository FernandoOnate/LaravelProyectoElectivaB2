<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\tb_productos;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = tb_productos::all();
        return view('admin.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productos.crear');
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
                    'precio' => 'required',
                    'categoria' => 'required',
                    'descripcion' => 'required',
                    'stock' => 'required',
                    'imagen' => 'required|mimetypes:image/jpg,image/JPG,image/PNG,image/JPEG,image/jpeg,image/png|image|max:2048'
                ]
            );
            $producto = $request->all();
            if ($request->hasFile('imagen')) {
                $archivo = $request->file('imagen');
                $nombre_real = Str::Random(5) . $archivo->getClientOriginalName();
                $ruta = 'public/storage/imagenes/productos/';
                $archivo->move(
                    base_path($ruta),
                    $nombre_real
                );
                $producto['imagen']='/storage/imagenes/productos/'.$nombre_real;
            }
            tb_productos::create($producto);
            $mensaje = 'El producto ha sido almacenado correctamente';
            $e = 0;
        } catch (\Throwable $th) {
            //throw $th;
            var_dump($th);
            die();
            $mensaje = 'El producto no se pudo almacenar';
            $e = 1;
        }
        return redirect()->route('admin.productos.index', ['e' => $e])->with('mensaje', $mensaje);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(tb_productos $Producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_productos $producto)
    {
        return view('admin.productos.editar', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_productos $Producto)
    {
        $e = null;
        try {
            $request->validate(
                [
                    'id',
                    'nombre' => 'required',
                    'precio' => 'required',
                    'categoria' => 'required',
                    'descripcion' => 'required',
                    'stock' => 'required',
                    'imagen' => 'required|mimetypes:image/jpg,image/JPG,image/PNG,image/JPEG,image/jpeg,image/png|image|max:2048'
                ]
            );
            $producto = $request->all();
            if ($request->hasFile('imagen')) {
                $archivo = $request->file('imagen');
                $nombre_real = Str::Random(5) . $archivo->getClientOriginalName();
                $ruta = 'public/storage/imagenes/productos/';
                $archivo->move(
                    base_path($ruta),
                    $nombre_real
                );
                $producto['imagen'] = '/storage/imagenes/productos/' . $nombre_real;
            }else{
                unset($producto['imagen']);
            }
            $Producto->update( $producto );
            $mensaje = 'El producto ha sido editado correctamente.';
            $e = 0;
        } catch (\Throwable $th) {
            //throw $th;
            var_dump($th);
            die();
            $mensaje = 'Error al actualizar.';
            $e = 1;
        }
        return redirect()->route('admin.productos.index', ['e' => $e])->with('mensaje', $mensaje);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_productos $Producto)
    {
        $e = null;
        try {
            // $ruta_img = $Producto->imagen;
            // $archivo = $request->file('imagen');
            // File::delete($ruta_img,$archivo);
            // Storage::delete($ruta_img);
            $Producto->delete();
            $e = 0;
            $mensaje = 'El producto ha sido eliminado correctamente';
        } catch (\Throwable $th) {
            //throw $th;
            $e = 1;
            $mensaje = 'Error al eliminar';
        }
        return redirect()->route('admin.productos.index', ['e' => $e])->with('mensaje', $mensaje);
    }
}
