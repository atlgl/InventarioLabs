<?php

namespace App\Http\Controllers;

use App\Lab;
use App\Inventory;
use App\Lost;
use Illuminate\Http\Request;

class LostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return $request;
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
        $l=Lost::create([
            'desc'=>$request['desclost'],
            'inventory_id'=>$request['inventoryid']
        ]);
        
        $lab=Lab::find($request['labid']);
        return view('lost.index',['labs'=>$lab]);
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return $id;
        $lab=Lab::find($id);
        return view('lost.index',['labs'=>$lab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function edit(Lab $lost)
    {
        //
        return $lost;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lost $lost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lost $lost)
    {
        
        $l=Lost::findOrFail($lost->id);
        $lab=Lab::find($lost->inventory['lab_id']);
        $l->delete();
        return view('lost.index',['labs'=>$lab]);
        
    }
}
