<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\tb_productos;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $productos = tb_productos::all();
        $numero_productos = $productos->count();
        return view('Admin.index',compact('numero_productos'));
    }
}
