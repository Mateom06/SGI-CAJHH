@extends('layout.plantilla')
@section('contenido')


<div class="row">
    <div class="col-md-9">
    <a href="{{url('pedido/create')}}" class="pull-right">
    <button class="btn btn-success">Ingresar Pedido</button> </a>
    <a href="{{url('imprimirpedidos')}}" class="pull-right">
        <button class="btn btn-success"><i class="fas fa-file-pdf"></i> Imprimir pedidos</button> </a>
    </div></div>
    <center>
    <p>Gestión de pedidos</p>
    </center>
    <div class="row">
    <div class="table-responsive">
    <table class="table table-striped table-hover">
    <thead>
    <th>Id</th>
    <th>Descripción</th>
    <th>Fecha de Pedido</th>
    <th>Fecha de Entrega</th>
    <th>Comentarios</th>
   
    
    </thead>
    <tbody>
    @foreach($pedido as $ped)
    <tr>
    <td>{{ $ped->id }}</td>
    <td>{{ $ped->Descripcion }}</td>
    <td>{{ $ped->fechaPedido }}</td>
    <td>{{ $ped->fechaEntrega }}</td>
    <td>{{ $ped->Comentarios }}</td>
    
    <td>
        <a href="{{URL::action('App\Http\Controllers\PedidoController@edit',$ped->id)}}" class="edit" title="Edit" data-toggle="tooltip"> <i class="material-icons">&#xE254;</i></a>
        
        <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$ped->id}}" class="delete" title="Delete" data-toggle="tooltip">
            <i class="material-icons">&#xE872;</i>
        </a>
    </td>
    </tr>
    @include('pedido.modal')
    @endforeach
    </tbody> </table>
    </div></div>
@endsection