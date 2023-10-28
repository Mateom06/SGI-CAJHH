<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use Illuminate\Support\Facades\Redirect;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventario=Inventario::orderBy('id','DESC')->paginate(10);
        return view('inventario.index',compact('inventario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('inventario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inventarios=new Inventario;
        $inventarios->serial=$request->get('serial');
        $inventarios->modelo=$request->get('modelo');
        $inventarios->marca=$request->get('marca');
        $inventarios->valor=$request->get('valor');
        $inventarios->fechaAdquisicion=$request->get('fechaAdquisicion');
        $inventarios->fechaSalida=$request->get('fechaSalida');
        $inventarios->save();
        return Redirect::to('inventario');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $inventario=Inventario::findOrFail($id);
        return view("inventario.edit",["inventario"=>$inventario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $inventarios=Inventario::findOrFail($id);
        $inventarios->serial=$request->get('serial');
        $inventarios->modelo=$request->get('modelo');
        $inventarios->marca=$request->get('marca');
        $inventarios->valor=$request->get('valor');
        $inventarios->fechaAdquisicion=$request->get('fechaAdquisicion');
        $inventarios->fechaSalida=$request->get('fechaSalida');

        $inventarios->update();
        return Redirect::to('inventario');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inventarios=Inventario::findOrFail($id);
        $inventarios->delete();
        return Redirect::to('inventario');
    }
}
