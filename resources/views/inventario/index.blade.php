@extends('layout.plantilla')

@section('contenido')
<div class="row">
    <div class="col-md-9">
        <a href="{{url('inventario/create')}}" class="pull-right">
            <button class="btn btn-success">Agregar activo</button> </a>
</div></div>
 <div class="row">
        <div class="table-responsive">
    <table class="table table-striped table-hover">
      <thead>
        <th>Id</th>
        <th>Serial</th>
        <th>Modelo</th>
        <th>Marca</th>
        <th>Valor</th>
        <th>Fecha de Adquisicion</th>
        <th>Fecha de Salida</th>
        <th>Opciones</th>
      </thead>
      <tbody>
      @foreach($inventario as $inven)
    <tr>
        <td>{{ $inven->id }}</td>
        <td>{{ $inven->serial }}</td>
        <td>{{ $inven->modelo }}</td>
        <td>{{ $inven->marca}}</td>
        <td>{{ $inven->valor }}</td>
        <td>{{ $inven->fechaAdquisicion }}</td>
        <td>{{ $inven->fechaSalida }}</td>
        <td>

        <a href="{{URL::action('App\Http\Controllers\InventarioController@edit',$inven->id)}}">
            <button class="btn btn-primary">Actualizar</button></a>
        
        <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$inven->id}}">
            <button type="button" class="btn btn-danger"> Eliminar</button></a>
        </td>
    </tr>
    @include('inventario.modal')

@endforeach
</tbody> </table>
</div></div>
@endsection