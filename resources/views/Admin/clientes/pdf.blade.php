<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Cliente | Reporte</title>
</head>
<body>
     <div class="card">
        <div class="card-header">
            <h2 class="card-title">Reporte de clientes | Esquina Verde</h2>
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
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

