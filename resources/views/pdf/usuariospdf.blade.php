</html><!DOCTYPE html>
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
         <h2 class="text-center">Usuarios</h2>
        </div>

    <div class="row">
        <div class="table-responsive">
        <table class="table table-striped table-hover">
        <thead>
            <th>Id</th>
            <th>Documento Identidad</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo Electrónico</th>
            <th>Telefono</th>
            <th>Rol Asignado</th>
            <th>Opciones</th>
        </thead>
        <tbody>

        @foreach($usuario as $usu)
            <tr>
        <td>{{ $usu->id }}</td>
        <td>{{ $usu->documento_identidad }}</td>
        <td>{{ $usu->nombres }}</td>
        <td>{{ $usu->apellidos }}</td>
        <td>{{ $usu->correo }}</td>
        <td>{{ $usu->telefono }}</td>
        <td>{{ $usu->rol_name }}</td>
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