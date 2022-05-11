@extends('adminlte::page')

@section('title', 'Crear Productos')

@section('content_header')
    <h1>Sección de crear productos | Esquina Verde</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.productos.store','enctype'=>'multipart/form-data','files'=>'true','method'=>'POST'])!!}
            @csrf
            <div class="form-group">
                {!! Form::label('nombre','Nombre del producto:') !!}
                {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Product Name']) !!}
                @error('nombre')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('precio','Precio del producto:') !!}
                {!! Form::number('precio',null,['class'=>'form-control','placeholder'=>'Product Price']) !!}
                @error('precio')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('categoria','Categoria del producto:') !!}
                {!! Form::text('categoria',null,['class'=>'form-control','placeholder'=>'Product Category']) !!}
                @error('categoria')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('descripcion','Descripción del producto:') !!}
                {!! Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Product description']) !!}
                @error('descripcion')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('stock','Stock o cantidad del producto:') !!}
                {!! Form::number('stock',null,['class'=>'form-control','placeholder'=>'Product Stock']) !!}
                @error('stock')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('Imágen del producto:') !!}
                {!! Form::file('imagen',['accept'=>'image/*']) !!}
                @error('imagen')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            {!! Form::submit('Crear producto',['class'=>'btn btn-primary btn-sm'])!!}
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
