@extends('adminlte::page')

@section('title', 'Crear Proveedores')

@section('content_header')
    <h1>Sección de crear proveedores | Esquina Verde</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.proveedores.store'])!!}
            <div class="form-group">
                {!! Form::label('nombre','Razón social del proveedor:') !!}
                {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Supplier Name']) !!}
                @error('nombre')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('nit','NIT del proveedor:') !!}
                {!! Form::number('nit',null,['class'=>'form-control','placeholder'=>'Supplier NIT']) !!}
                @error('nit')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('correo','Correo del proveedor:') !!}
                {!! Form::email('correo',null,['class'=>'form-control','placeholder'=>'Supplier eMail']) !!}
                @error('correo')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('insumo','Insumo del proveedor:') !!}
                {!! Form::text('insumo',null,['class'=>'form-control','placeholder'=>'Supplier input']) !!}
                @error('insumo')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('telefono','Teléfono del proveedor:') !!}
                {!! Form::number('telefono',null,['class'=>'form-control','placeholder'=>'Supplier phone']) !!}
                @error('telefono')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            {!! Form::submit('Crear proveedor',['class'=>'btn btn-primary btn-sm'])!!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>  </script>
@stop
