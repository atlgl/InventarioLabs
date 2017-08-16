<?php

namespace App\Http\Controllers;

use App\Lab;
use Illuminate\Http\Request;

class LabsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('laboratory.index',['datalab'=>Lab::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('laboratory.create');
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
        Lab::create([
            'name'=>$request['labname'],
            'desc'=>$request['labdescription']
        ]);
        return redirect('/lab');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Labs  $labs
     * @return \Illuminate\Http\Response
     */
    public function show(Lab $lab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Labs  $labs
     * @return \Illuminate\Http\Response
     */
    public function edit(Lab $lab)
    {
        return view('laboratory.edit',['labsdata'=>$lab]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Labs  $labs
     * @return \Illuminate\Https\Response
     */
    public function update(Request $request, Lab $lab)
    {
        //
        $l=Lab::find($lab->id);
        $l->name=$request['labname'];
        $l->desc=$request['labdescription'];
        $l->save();
        return redirect('/lab');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Labs  $labs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lab $lab)
    {
    
        $lb=Lab::find($lab->id);
        $lb->delete();
        
        return redirect('/lab');
        
    }
}
