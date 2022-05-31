<?php

use App\Http\Controllers\Admin\clientesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductosController;
use App\Http\Controllers\Admin\proveedoresController;
Route::get('', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index'])->name('/');

Route::get('admin/producto/pdf',[ProductosController::class, 'pdf'])->name('reporte__producto');
Route::resource('admin/productos',ProductosController::class)->names('admin.productos');

Route::resource('admin/proveedores',proveedoresController::class)->names('admin.proveedores');
Route::get('admin/proveedore/pdf',[proveedoresController::class, 'GenerarPDF'])->name('reporte__proveedores');

Route::resource('admin/clientes',clientesController::class)->names('admin.clientes');
Route::get('admin/cliente/pdf',[clientesController::class, 'generar_pdf'])->name('reporte__clientes');
