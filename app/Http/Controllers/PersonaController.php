<?php

namespace App\Http\Controllers;

use App\Persona;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		return Persona::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		
		Persona::create([
			'nombre'=>$request->input('nombre'),
			'apellidos'=>$request->input('apellidos'),
            'fechanac'=>$request->input('fechanac'),
            'estadocivil'=>$request->input('estadocivil')
            
		]);
		return json_encode(array('error'=>'ok','mensaje'=>'Guardado'));
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
        //
        
        $p=Persona::find($id);
        $p->nombre=$request->input('nombre');
        $p->apellidos=$request->input('apellidos');
        $p->fechanac=$request->input('fechanac');
        $p->estadocivil=$request->input('estadocivil');    
        $p->save();    
				
		return json_encode(array('error'=>'ok','mensaje'=>'Actualizado'));
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
        $p=Persona::findOrFail($id);
        $p->delete();
		return json_encode(array('error'=>'ok','mensaje'=>'Eliminado'));
    }
}
