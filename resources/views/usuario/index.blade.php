@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-9">
        <a href="{{url('usuario/create')}}" class="pull-right">        
            <button class="btn btn-success">Crear Usuario</button> </a>
        
            <a href="{{url('imprimirusuarios')}}" class="pull-right">
        <button class="btn btn-success"><i class="fas fa-file-pdf"></i> Imprimir Pdf</button> </a>
        </div></div>
            <p>Estás en gestion de usuarios </p>
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

        <td>
        <a href="{{URL::action('App\Http\Controllers\UsuarioController@edit',$usu->id)}}" class="edit" title="Edit" data-toggle="tooltip"> <i class="material-icons">&#xE254;</i></a>
        
        <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$usu->id}}" class="delete" title="Delete" data-toggle="tooltip">
            <i class="material-icons">&#xE872;</i>
        </a>
</td>
        
    </tr>
    @include('usuario.modal')

@endforeach
</tbody> </table>
</div></div>
@endsection