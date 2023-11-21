@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h4>Registrar Activo</h4>
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
{!!Form::open(array('url'=>'inventario','method'=>'POST','autocomplete'=>'off')
)!!}
{{Form::token()}}
<div class="row">
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="serial">Serial</label>
            <input type="text" name="serial"
id="serial" class="form-control"
            placeholder="Digite el serial del activo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="modelo">Modelo</label>
        <input type="text" name="modelo" id="modelo" class="form-control"
placeholder="Modelo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" class="form-control"
placeholder="Marca del activo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="valor">Valor</label>
        <input type="double" name="valor" id="valor" class="form-control"
placeholder="Valor">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="fechaAquisicion">Fecha de Aquisicion</label>
        <input type="date" name="fechaAdquisicion" id="fechaAdquisicion" class="form-control"
placeholder="Fecha de Aquisicion">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="fechaSalida">Fecha de Salida</label>
        <input type="date" name="fechaSalida" id="fechaSalida" class="form-control"
placeholder="Fecha de Salida">
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <button class="btn btn-primary" type="submit"><span
class="glyphicon glyphicon-ok"></span> Guardar</button>
            <button class="btn btn-danger" type="reset"><span
class="glyphicon glyphicon-remove"></span> Vaciar Campos</button>
        <a class="btn btn-info" type="reset" href="{{url('persona')}}">
<span class="glyphicon glyphicon-home"></span> Regresar </a>
        </div>
    </div>
</div>
{!!Form::close()!!}
@endsection