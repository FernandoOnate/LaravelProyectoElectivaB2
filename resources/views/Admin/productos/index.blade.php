@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Sección de productos | Esquina Verde</h1>
@stop

@section('content')
@if(session('mensaje') and isset($_GET['e']))
    @if($_GET['e']==0)
        @php
            $class = 'alert-success';
        @endphp
        @elseif($_GET['e']==1)
            @php
                $class = 'alert-danger';
            @endphp
        @else
    @endif
<div class="alert {{$class}}">
    <strong>{{session('mensaje')}}</strong>
</div>
@endif
<div class="card">
    <div class="card-header">
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
        <a href="{{route('admin.productos.create')}}" class="btn btn-primary">Crear un nuevo producto</a>
        <a href="{{route('reporte__producto')}}" target="__blank" class="btn btn-pdf"><i class="fas fa-file-pdf"></i> Generar reporte</a>
    </div>
    <div class="card-body">
        <table id="product" class="table table-striped" style="text-align:center;">
            <thead class="bg-cyan">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Categoría</th>
                    <th>Descripcion</th>
                    <th>Stock</th>
                    <th>Imagen</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->precio}}</td>
                    <td>{{$item->categoria}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>{{$item->stock}}</td>
                    <td>
                        <img src="{{$item->imagen}}" width="70px" alt="Imgen del producto">
                    </td>
                    <td width="15px">
                        <a href="{{route('admin.productos.edit',$item)}}" class="btn btn-primary btn-sm"></i>Editar</a>
                    </td>
                    <td width="15px">
                        <form action="{{route('admin.productos.destroy',$item)}}" method="post">
                            @method('delete')
                            @csrf
                            <input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
@section('js')
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
    $('#product').DataTable({
        responsive: true,
        autoWidth:false,
        'language':{
            'search':'Buscar:',
            'lengthMenu':'Mostrar _MENU_ filas por tabla',
            'info':'Mostrando página _PAGE_ de _PAGES_',
            'paginate':{
                'previous':'Anterior',
                'next':'Siguiente',
                'first':'Primero',
                'last':'Último'
            }
        }
    });
} );
</script>
@stop
