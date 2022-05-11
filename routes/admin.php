<?php

use App\Http\Controllers\Admin\clientesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductosController;
use App\Http\Controllers\Admin\proveedoresController;

Route::get('', [HomeController::class, 'index']);
Route::resource('admin/productos',ProductosController::class)->names('admin.productos');
Route::resource('admin/proveedores',proveedoresController::class)->names('admin.proveedores');
Route::resource('admin/clientes',clientesController::class)->names('admin.clientes');
