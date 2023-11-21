<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Pedidos </title>
    <!-- Theme style -->
<link rel="stylesheet"
href="{{public_path('dist/css/adminlte.min.css')}}">
</head>

    <body>
        <div class="container">
        <div class="row">
        <div class="col">
        <img src="{{public_path('img/logo1.jpeg')}}" alt="" width='90px'>
        </div>
        <div class="col-md-12 col-xs-12">
         <h4 class="text-center">Colegio Ana Julia Holguin de Hurtado</h4>
         <h2 class="text-center">Pedidos</h2>
        </div>
        
    <div class="row">
        <div class="table-responsive">
        <table class="table table-striped table-hover">
        <thead>
        <th>Id</th>
        <th>Descripcion</th>
        <th>Fecha de Pedido</th>
        <th>Fecha de Entrega</th>
        <th>Comentarios</th>
        </thead>
        <tbody>

        @foreach($pedido as $ped)
        <tr>
        <td>{{ $ped->id }}</td>
        <td>{{ $ped->Descripcion }}</td>
        <td>{{ $ped->fechaPedido }}</td>
        <td>{{ $ped->fechaEntrega }}</td>
        <td>{{ $ped->Comentarios }}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    </div>
    </div>
</body>
</html>