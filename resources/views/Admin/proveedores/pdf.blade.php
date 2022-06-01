<?php $dtz = new DateTimeZone("America/Bogota");
$dt = new DateTime("now", $dtz);?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Proveedores | Reporte</title>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Reporte de proveedores | Esquina Verde</h2>
            <div class="card-body">
                <p>Fecha: {{$dt->format('F j, Y, g:i a') /*date('F j, Y, g:i a')*/}}</p>
                <table id="supplier" class="table table-striped" style="text-align:center;">
                    <caption>Total de proveedores listados: {{$cuenta}}</caption>
            <thead class="bg-cyan">
                <tr>
                    <th>ID</th>
                    <th>Razón social</th>
                    <th>NIT</th>
                    <th>Correo</th>
                    <th>Insumo</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proveedores as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->nit}}</td>
                    <td>{{$item->correo}}</td>
                    <td>{{$item->insumo}}</td>
                    <td>{{$item->telefono}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
            </div>
        </div>
    </div>
</body>
</html>
