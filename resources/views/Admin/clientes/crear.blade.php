@extends('adminlte::page')

@section('title', 'Crear Clientes')

@section('content_header')
    <h1>Sección de crear clientes | Esquina Verde</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.clientes.store'])!!}
            <div class="form-group">
                {!! Form::label('nombre','Nombre del cliente:') !!}
                {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Customer Name']) !!}
                @error('nombre')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('apellidos','Apellidos del cliente:') !!}
                {!! Form::text('apellidos',null,['class'=>'form-control','placeholder'=>'Customer Last Name']) !!}
                @error('apellidos')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('telefono','Teléfono del cliente:') !!}
                {!! Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Customer Phone']) !!}
                @error('telefono')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('correo','Correo del cliente:') !!}
                {!! Form::email('correo',null,['class'=>'form-control','placeholder'=>'Customer eMail']) !!}
                @error('correo')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('codigo','Código del cliente:') !!}
                {!! Form::text('codigo',null,['class'=>'form-control','placeholder'=>'Customer ID']) !!}
                @error('codigo')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('clave','Clave del cliente:') !!}
                {!! Form::password('clave',['class'=>'form-control','placeholder'=>'Customer Password']) !!}
                @error('clave')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            {!! Form::submit('Crear cliente',['class'=>'btn btn-primary btn-sm'])!!}
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
