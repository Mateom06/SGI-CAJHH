<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Sedes </title>
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
        </div>

    <div class="row">
        <div class="table-responsive">
        <table class="table table-striped table-hover">
        <thead>
    
    <th>Id</th>
    <th>Nombre</th>
    <th>Colegio</th>
    <th>Direccion</th>
    <th>Correo</th>
    <th>Telefono</th>
    
    </thead>
    <tbody>
    @foreach($sede as $sed)
    <tr>
    <td>{{ $sed->id }}</td>
    <td>{{ $sed->Nombre }}</td>
    <td>{{ $sed->Colegio }}</td>
    <td>{{ $sed->Direccion }}</td>
    <td>{{ $sed->Correo }}</td>
    <td>{{ $sed->Telefono }}</td>
    
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
</body>
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
         <h2 class="text-center">Sedes</h2>
        </div>

    <div class="row">
        <div class="table-responsive">
        <table class="table table-striped table-hover">
        <thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>Colegio</th>
                <th>Direccion</th>
                <th>Correo</th>
                <th>Telefono</th>

            </thead>
            <tbody>
                @foreach($sede as $sed)
                <tr>
                    <td>{{ $sed->id }}</td>
                    <td>{{ $sed->Nombre }}</td>
                    <td>{{ $sed->Colegio }}</td>
                    <td>{{ $sed->Direccion }}</td>
                    <td>{{ $sed->Correo }}</td>
                    <td>{{ $sed->Telefono }}</td>
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