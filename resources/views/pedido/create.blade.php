@extends('layout.plantilla')
@section('contenido')
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<h4>Ingresar Sede</h4>
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
{!!Form::open(array('url'=>'pedido','method'=>'POST','autocomplete'=>'off')
)!!}
{{Form::token()}}
<div class="row">
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
    <label for="descricion">Descripcion</label>
    <input type="text" name="descripcion" id="descripcion" class="form-control"
    placeholder="Descripcion del Pedido">
    </div>
    </div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
    <label for="fechaPedido">Fecha del Pedido</label>
<input type="date" name="fechaPedido" id="fechaPedido" class="form-control"
placeholder="Fecha del Pedido">
</div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="fechaEntrega">Fecha de Entrega</label>
<input type="date" name="fechaEntrega" id="fechaEntrega" class="form-control"
placeholder="Fecha de Entrega">
</div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="comentarios">Cometarios</label>
<input type="text" name="comentarios" id="comentarios" class="form-control"
placeholder="Comentarios">
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
<div class="form-group"> <br>
<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
<button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> Vaciar Campos</button>
<a class="btn btn-info" type="reset" href="{{url('pedido')}}">
<span class="glyphicon glyphicon-home"></span> Regresar </a>
</div>
</div>

{!!Form::close()!!}
@endsection




