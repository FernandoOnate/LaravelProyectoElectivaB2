@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>I n i c i o</h1>
@stop
@section('content')
<style>
    .btn-pdf{
        background-color: #A10D03;
        color: white;
    }
    .btn-pdf:hover{
        color: white;
        background-color: #D81002;
    }
</style>
<div class="container">
    <h2>Números de la situación de registros actuales</h2>
    <div class="row">
        <div class="card col-md-5">
            <div class="card-header">
                <h3>Productos</h3>
            </div>
            <div class="card-body">
                <p>Cantidad de productos registrados: <em><b>{{$numero_productos}}</b></em></p>
                <a href="{{ route('admin.productos.index') }}"class="btn btn-primary">Ver productos</a>
                <a href="{{route('reporte__producto')}}" target="__blank" class="btn btn-pdf"><i class="fas fa-file-pdf"></i> Reporte productos</a>
            </div>
        </div>
        <div class="card col-md-5 ml-3">
            <div class="card-header">
                <h3>Clientes</h3>
            </div>
            <div class="card-body">
                <p>Cantidad de clientes registrados: <b><em>{{$numero_clientes}}</em></b></p>
                <a href="{{ route('admin.clientes.index') }}"class="btn btn-primary">Ver clientes</a>
                <a href="{{route('reporte__clientes')}}" target="__blank" class="btn btn-pdf"><i class="fas fa-file-pdf"></i> Reporte clientes</a>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="card col-md-5">
            <div class="card-header">
                <h3>Proveedores</h3>
            </div>
            <div class="card-body">
                <p>Cantidad de proveedores registrados: <em><b>{{$numero_proveedores}}</b></em>
                </p>
                <a href="{{ route('admin.proveedores.index') }}"class="btn btn-primary">Ver proveedores</a>
                <a href="{{route('reporte__proveedores')}}" target="__blank" class="btn btn-pdf"><i class="fas fa-file-pdf"></i> Reporte proveedores</a>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
