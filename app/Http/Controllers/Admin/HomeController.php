<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\tb_clientes;
use App\Models\Admin\tb_productos;
use App\Models\Admin\tb_proveedores;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //productos
        $productos = tb_productos::all();
        $numero_productos = $productos->count();

        //clientes
        $clientes = tb_clientes::all();
        $numero_clientes = $clientes->count();
        //proveedores
        $proveedores = tb_proveedores::all();
        $numero_proveedores = $proveedores->count();

        return view('Admin.index',compact('numero_productos','numero_clientes', 'numero_proveedores'));
    }
}
