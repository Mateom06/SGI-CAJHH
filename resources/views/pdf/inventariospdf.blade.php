<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Inventario </title>
    <!-- Theme style -->
<link rel="stylesheet"
href="{{public_path('dist/css/adminlte.min.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col">
            <img src="{{public_path('img/logo1.jpeg')}}" alt="" width='150px'>
        </div>
        <div class="col-md-12 col-xs-12">
         <h4 class="text-center">Colegio Ana Julia Holguin de Hurtado</h4>
         <h2 class="text-center">Inventario</h2>
        </div>

    <div class="row">
        <div class="table-responsive">
        <table class="table table-striped table-hover">
        <thead>

        <th>Id</th>
        <th>Serial</th>
        <th>Modelo</th>
        <th>Marca</th>
        <th>Valor</th>
        <th>Fecha de Adquisicion</th>
        <th>Fecha de Salida</th>
        <th>Opciones</th>
      </thead>
      <tbody>
      @foreach($inventario as $inven)
    <tr>
        <td>{{ $inven->id }}</td>
        <td>{{ $inven->serial }}</td>
        <td>{{ $inven->modelo }}</td>
        <td>{{ $inven->marca}}</td>
        <td>{{ $inven->valor }}</td>
        <td>{{ $inven->fechaAdquisicion }}</td>
        <td>{{ $inven->fechaSalida }}</td>
        <td>
    
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
</body>
</html>