@extends('layout.plantilla')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h4>Editar Activo</h4>
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
{{Form::open(array('action'=>array('App\Http\Controllers\InventarioController@update', $inventario->id),'method'=>'patch'))}}

<div class="row g-3">
 <div class="col-md-4">
    <label for="serial" class="form-label">Serial</label>
    <input type="text" name="serial" id="serial"
class="form-control"
            value="{{$inventario->serial}}">
 </div>
 <div class="col-md-4">
    <label for="modelo" class="form-label">Modelo</label>
    <input type="text" name="modelo" id="modelo" class="form-control"
value="{{$inventario->modelo}}">
 </div>
 <div class="col-4">
    <label for="marca" class="form-label">Marca</label>
    <input type="text" name="marca" id="marca" class="form-control"
value="{{$inventario->marca}}">
    </div>
    <div class="col-6">
    <label for="valor" class="form-label">Valor</label>
    <input type="double" name="valor" id="valor" class="form-control"
value="{{$inventario->valor}}">
    </div>
    <div class="col-md-6">
        <label for="fechaAdquisicion" class="form-label">Fecha de Adquisicion</label>
        <input type="date" name="fechaAdquisicion" id="fechaAdquisicion" class="form-control"
value="{{$inventario->fechaAdquisicion}}">
    </div>
    <div class="col-md-6">
        <label for="fechaSalida" class="form-label">Fecha de Salida</label>
        <input type="date" name="fechaSalida" id="fechaSalida" class="form-control"
value="{{$inventario->fechaSalida}}">
    </div>

    <div class="col-12">
    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphiconrefresh"></span> Actualizar
    </button>
<a class="btn btn-info" type="reset" href="{{url('inventario')}}">
    <span class="glyphicon glyphicon-home"></span> Regresar </a>
 </div>
 </div>
{!!Form::close()!!}
@endsection