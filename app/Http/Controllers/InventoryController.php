<?php

namespace App\Http\Controllers;

use App\Lab;
use App\Computer;
use App\User;
use App\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('inventory.index',['lab'=>Lab::all(),'comps'=>Computer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('inventory.create',['computer'=>Computer::all(),'lab'=>Lab::all()]);
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
        Inventory::create([
            'computer_id'=>$request['computerid'],
            'lab_id'=>$request['labid'],
            'user_id'=>Auth::id(),
            'barcode'=>$request['barcode'],
            'inventorystate'=>$request['inventorystate']
        ]);
        return redirect('/inventory');
        //return view('inventory.create',['computer'=>Computer::all(),'lab'=>Lab::find($request['lab_id'])]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lab=Lab::find($id);
         return view('inventory.create',['labd'=>$lab,'computer'=>Computer::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        $i=Inventory::findOrFail($inventory->id);
        $i->delete();
        return redirect('/inventory');
    }
}
