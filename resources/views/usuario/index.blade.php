@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-9">
        <a href="{{url('usuario/create')}}" class="pull-right">
            <button class="btn btn-success">Crear Usuario</button> </a></div></div>


 
<p>{{ Auth::user()->name }}</p>          
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
        <td>
        <!--ACTUALIZAR-->
        <a href="{{URL::action('App\Http\Controllers\UsuarioController@edit',$usu->id)}}">
        <button class="btn btn-primary">Actualizar</button></a>
            
        <!--ELIMINAR-->
        <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$usu->id}}">
        <button type="button" class="btn btn-danger"> Eliminar</button>
        </a>        
        </td>
    </tr>
    @include('usuario.modal')

@endforeach
</tbody> </table>
</div></div>
@endsection