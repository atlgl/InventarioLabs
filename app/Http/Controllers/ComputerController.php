<?php

namespace App\Http\Controllers;

use App\Computer;
use App\Mark;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('computer.index',['computer'=>Computer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('computer.create',['marks'=>Mark::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Computer::create([
            'modelname'=>$request['modelname'],
            'desc'=>$request['description'],
            'mark_id'=>$request['marca']
        ]);
        return redirect('/computer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function show(Computer $computer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function edit(Computer $computer)
    {
        //
        return view('computer.edit',['computer'=>$computer,'marc'=>Mark::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Computer $computer)
    {
        $c=Computer::find($computer->id);
        $c->modelname=$request['name'];
        $c->desc=$request['description'];
        $c->mark_id=$request['marca'];
        $c->save();
        
        return redirect('/computer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Computer $computer)
    {
        $c=Computer::findOrFail($computer->id);
        $c->delete();
        return redirect('/computer');
    }
}
