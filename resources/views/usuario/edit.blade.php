@extends('layout.plantilla')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h4>Editar Usuario</h4>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
{{Form::open(array('action'=>array('App\Http\Controllers\UsuarioController@update', $usuario->id),'method'=>'patch'))}}

<div class="row g-3">
    <div class="col-md-4">
        <label for="documento_identidad" class="form-label">Documento Identidad</label>
    <input type="number" name="documento_identidad" id="documento_identidad"
class="form-control"

        value="{{$usuario->documento_identidad}}">     
    </div>
    <div class="col-md-4">
        <label for="nombres" class="form-label">Nombres</label>
        <input type="text" name="nombres" id="nombres" class="form-control"

        value="{{$usuario->nombres}}">
    </div>
    <div class="col-4">
        <label for="apellidos" class="form-label">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" class="form-control"

        value="{{$usuario->apellidos}}">
    </div>
    <div class="col-6">
        <label for="correo" class="form-label">Correo</label>
        <input type="text" name="correo" id="correo" class="form-control"

        value="{{$usuario->correo}}">
    </div>
    <div class="col-md-6">  
        <label for="telefono" class="form-label">Telefono</label>
        <input type="int" name="telefono" id="telefono" class="form-control"

        value="{{$usuario->telefono}}">
    </div>
    <div class="col-12">

        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphiconrefresh"></span> Actualizar</button>

        <a class="btn btn-info" type="reset" href="{{url('usuario')}}">
            <span class="glyphicon glyphicon-home"></span> Regresar </a>
    </div>
    </div>
{!!Form::close()!!}
@endsection