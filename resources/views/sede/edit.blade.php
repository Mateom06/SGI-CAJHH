@extends('layout.plantilla')
@section ('contenido')
<div class="row">
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <h4>Editar Sede</h4>
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
{{Form::open(array('action'=>array('App\Http\Controllers\SedeController@update', $sede->id),'method'=>'patch'))}}
<div class="row g-3">
 <div class="col-md-4">
 <label for="nombre" class="form-label">Nombre de la Sede</label>
 <input type="text" name="nombre" id="nombre"
class="form-control"
 value="{{$sede->Nombre}}">
 </div>
 <div class="col-md-4">
 <label for="colegio" class="form-label">Colegio</label>
 <input type="text" name="colegio" id="colegio" class="form-control"
value="{{$sede->Colegio}}">
 </div>
 <div class="col-4">
 <label for="direccion" class="form-label">Direccion</label>
 <input type="text" name="direccion" id="direecion" class="form-control"
value="{{$sede->Direccion}}">
 </div>
 <div class="col-6">
 <label for="correo" class="form-label">Correo</label>
 <input type="text" name="correo" id="correo" class="form-control"
value="{{$sede->Correo}}">
 </div>
 <div class="col-md-6">
 <label for="telefono" class="form-label">Telefono</label>
 <input type="text" name="telefono" id="telefono" class="form-control"
value="{{$sede->Telefono}}">
 </div>
 
 <div class="col-12">
 <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span> Actualizar
 </button>
<a class="btn btn-info" type="reset" href="{{url('sede')}}">
 <span class="glyphicon glyphicon-home"></span> Regresar </a>
 </div>
 </div>
{!!Form::close()!!}
@endsection
