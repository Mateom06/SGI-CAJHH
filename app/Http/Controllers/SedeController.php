<?php

namespace App\Http\Controllers;

use App\Models\Sede;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sede=Sede::orderBy('id','DESC')->paginate(10);
         return view('sede.index',compact('sede'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('sede.create');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $sede=new Sede;
        $sede->Nombre=$request->get('nombre');
        $sede->Colegio=$request->get('colegio');
        $sede->Direccion=$request->get('direccion');
        $sede->Correo=$request->get('correo');
        $sede->Telefono=$request->get('telefono');

        $sede->save ();

     return Redirect::to('sede');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function show(Sede $sede)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
 {
      $sed=Sede::findOrFail($id);
       return view("sede.edit",["sede"=>$sed]);
 }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
 {
      $sed=Sede::findOrFail($id);
      $sed->Nombre=$request->get('nombre');
      $sed->Colegio=$request->get('colegio');
       $sed->Direccion=$request->get('direccion');
       $sed->Correo=$request->get('correo');
      $sed->Telefono=$request->get('telefono');
      $sed->update();
 return Redirect::to('sede');
 
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sed=Sede::findOrFail($id);
        $sed->delete();
        return Redirect::to('sede');
    }
}
