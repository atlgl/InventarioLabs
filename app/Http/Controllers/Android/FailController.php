<?php

namespace App\Http\Controllers\Android;

use App\Fail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        return Fail::all();
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
        
        $f=Fail::create(
        [
            'desc'=>$request->input('desc'),
            'inventory_id'=>$request->input('inventory_id'),
            'failtype'=>$request->input('failtype'),
            'failstate'=>$request->input('failstate')
        ]);
        return json_encode(['mensaje'=>'Guardado Correctamente','datos'=>$f]);
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fail  $fail
     * @return \Illuminate\Http\Response
     */
    public function show(Fail $fail)
    {
        //
        return Fail::find($fail->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fail  $fail
     * @return \Illuminate\Http\Response
     */
    public function edit(Fail $fail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fail  $fail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fail $fail)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fail  $fail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fail $fail)
    {
        //
        $f=Fail::find($fail->id);
        $f->delete();
        
        return json_encode(['mensaje'=>'Eliminado correctamente']);
    }
}
