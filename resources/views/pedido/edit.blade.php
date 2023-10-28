@extends('layout.plantilla')
@section ('contenido')
<div class="row">
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <h4>Editar pedido</h4>
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
{{Form::open(array('action'=>array('App\Http\Controllers\PedidoController@update', $pedido->id),'method'=>'patch'))}}
<div class="row g-3">
 <div class="col-md-4">
 <label for="descripcion" class="form-label">Descripcion Del Pedido</label>
 <input type="text" name="descripcion" id="descripcion"
class="form-control"
 value="{{$pedido->Descripcion}}">
 </div>
 <div class="col-md-4">
 <label for="fechaPedido" class="form-label">Fecha Del Pedido</label>
 <input type="text" name="fechaPedido" id="fechaPedido" class="form-control"
value="{{$pedido->fechaPedido}}">
 </div>
 <div class="col-4">
 <label for="fechaEntrega" class="form-label">Fecha De Entrega</label>
 <input type="text" name="fechaEntrega" id="fechaEntrega" class="form-control"
value="{{$pedido->fechaEntrega}}">
 </div>
 <div class="col-6">
 <label for="comentarios" class="form-label">Comentarios</label>
 <input type="text" name="comentarios" id="comentarios" class="form-control"
value="{{$pedido->Comentarios}}">
 </div>
 <div class="col-12">
 <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span> Actualizar
 </button>
<a class="btn btn-info" type="reset" href="{{url('pedido')}}">
 <span class="glyphicon glyphicon-home"></span> Regresar </a>
 </div>
 </div>
{!!Form::close()!!}
@endsection