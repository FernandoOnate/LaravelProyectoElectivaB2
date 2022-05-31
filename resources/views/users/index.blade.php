<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Inicio</title>
  </head>
  <style>
      img{
          max-width: 100%;
      }
      body{
          text-align: center;
          align-content: center;
          align-items: center;
      }
      .card{
          margin-right: 0 !important;
      }
  </style>
  <body>
      <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand nav-link disabled" href="#">Esquina Verde</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Iniciar sesión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}">Cerrar sesión</a>
            </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
        <h1 class="mt-4">Bienvenido!, vea nuestros productos más recientes</h1>
        <div class="row">
            @foreach($productos as $item)
            <div class="card shadow col-md-3 text-center m-1">
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
