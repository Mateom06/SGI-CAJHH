<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\UsuarioFormRequest;

class UsuarioController extends Controller
{
    public $SelectRol;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');

    }

    public function index()
        {
            //$usuario=Usuario::orderBy('id','ASC')->paginate(10);
            $usuario = DB::table('usuarios as us')
    ->select('us.id', 'us.documento_identidad', 'us.nombres', 'us.apellidos', 'us.correo', 'us.telefono', 'rl.name as rol_name')
    ->join('roles as rl', 'us.idRol', '=', 'rl.id')
    ->orderBy('id','ASC')->paginate(10);

            $roles=Role::orderBy('id','ASC')->get();
            

            return view('usuario.index',['usuario' => $usuario, 'roles' => $roles]);
        }        
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $request->user()->authorizeRoles('admin');
        $roles=Role::orderBy('id','ASC')->get();

        return view ('usuario.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioFormRequest $request)
    {

        $usuarios=new Usuario;
        $usuarios->documento_identidad=$request->get('documento_identidad');
        $usuarios->nombres=$request->get('nombres');
        $usuarios->apellidos=$request->get('apellidos');
        $usuarios->correo=$request->get('correo');
        $usuarios->telefono=$request->get('telefono');
        $usuarios->idRol=$request->get('SelectRol');
        $usuarios->save();
        return Redirect::to('usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario=Usuario::findOrFail($id);
        $roles=Role::orderBy('id','ASC')->get();
        return view("usuario.edit",["usuario"=>$usuario,"roles" => $roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuarios=Usuario::findOrFail($id);
        $usuarios->documento_identidad=$request->get('documento_identidad');
        $usuarios->nombres=$request->get('nombres');
        $usuarios->apellidos=$request->get('apellidos');
        $usuarios->correo=$request->get('correo');
        $usuarios->telefono=$request->get('telefono');
        $usuarios->idRol=$request->get('SelectRol');
        $usuarios->update();
         return Redirect::to('usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarios=Usuario::findOrFail($id);
        //dd($usuarios);
        $usuarios->delete();
        return Redirect::to('usuario');
    }
}