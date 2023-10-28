<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pedido=Pedido::orderBy('id','DESC')->paginate(10);
         return view('pedido.index',compact('pedido'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('pedido.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedido=new Pedido;
        $pedido->Descripcion=$request->get('descripcion');
        $pedido->fechaPedido=$request->get('fechaPedido');
        $pedido->fechaEntrega=$request->get('fechaEntrega');
        $pedido->Comentarios=$request->get('comentarios');
        

        $pedido->save ();

     return Redirect::to('pedido');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $pedido=Pedido::findOrFail($id);
     return view("pedido.edit",["pedido"=>$pedido]);
    }
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
 {
      $pedido=Pedido::findOrFail($id);
      $pedido->Descripcion=$request->get('descripcion');
      $pedido->fechaPedido=$request->get('fechaPedido');
      $pedido->fechaEntrega=$request->get('fechaEntrega');
      $pedido->Comentarios=$request->get('comentarios');
      $pedido->update();
     return Redirect::to('pedido');
 
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ped=Pedido::findOrFail($id);
        $ped->delete();
        return Redirect::to('pedido');
    }
}
