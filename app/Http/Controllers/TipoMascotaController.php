<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use App\TipoMascota;

class TipoMascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Auth::user()->authorizeRoles('Administrador');
        $tipos = TipoMascota::all();
        return view('User.listaTipoMascota', compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Auth::user()->authorizeRoles('Administrador');
        return view('User.createTipoMascota');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Auth::user()->authorizeRoles('Administrador');
        try{
            $this->validate($request,[
                'Nombre'=>'required|unique:tipo_mascotas,NombreTipo'
            ]);
            TipoMascota::create([
                'NombreTipo' => $request->Nombre,
                'Estado'=> 1,
            ]);

            $success = "Tipo de mascota ingresado exitosamente";
            return redirect()->route('TipoMascota.index')->with('success',$success);

        }catch(QueryException $ex){
            $prb = "Ocurrio un problema inesperado";
            return redirect()->route('TipoMascota.create')->with('prb',$prb);
        }
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
        //
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
        Auth::user()->authorizeRoles('Administrador');
        try{
            $tipo = TipoMascota::find($id);

            $tipo->update([
                'Estado' => 2,
            ]);

            $success = "Tipo de mascota eliminado exitosamente";
            return redirect()->route('TipoMascota.index')->with('success',$success);
        }catch(Exception $ex){
            $prb = "Ocurrio un problema inesperado";
            return redirect()->route('TipoMascota.index')->with('prb',$prb);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
