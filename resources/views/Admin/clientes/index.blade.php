@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Sección de clientes registrados | Esquina Verde</h1>
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
        <a href="{{route('admin.clientes.create')}}" class="btn btn-primary">Crear un nuevo cliente</a>
    </div>
    <div class="card-body">
        <table id="client" class="table table-striped" style="text-align:center;">
            <thead class="bg-cyan">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Código del cliente</th>
                    <th>Clave</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->apellidos}}</td>
                    <td>{{$item->telefono}}</td>
                    <td>{{$item->correo}}</td>
                    <td>{{$item->codigo}}</td>
                    <td>{{$item->clave}}</td>
                    <td width="15px"><a href="{{route('admin.clientes.edit',$item)}}" class="btn btn-primary btn-sm">Editar</a></td>
                    <td width="15px">
                        <form action="{{route('admin.clientes.destroy',$item)}}" method="post">
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
    $('#client').DataTable({
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
