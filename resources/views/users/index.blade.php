<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Inicio</title>
  </head>
  <body>
    <div class="container">
        <h1 class="mt-4">Bienvenido!, vea nuestros productos más recientes</h1>
        <div class="row">
            @foreach($productos as $item)
            <div class="card shadow col-md-3 text-center m-2">
                <div class="card-header">
                    <h4 class="title">{{$item->nombre}}</h4>
                </div>
                <div class="card-body">
                    <figure>
                        <figcaption>{{$item->descripcion}}</figcaption><br>
                        <img src="{{$item->imagen}}" alt="Imagen del producto" width="200px">
                        <br><br>
                        <p>Precio: ${{$item->precio}}</p>
                        <button class="btn btn-primary btn-sm">Comprar</button>
                    </figure>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
