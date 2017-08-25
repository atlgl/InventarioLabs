<?php

namespace App\Http\Controllers;

use App\Lab;
use App\Inventory;
use App\Computer;
use App\Fail;
use Illuminate\Http\Request;

class FailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('failure.index',['labs'=>Lab::all()]);
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
        Fail::create(
        [
            'desc'=>$request['description'],
            'inventory_id'=>$request['inventorieid'],
            'failtype'=>$request['failtype'],
            'failstate'=>$request['failstate']
        ]);
        
        return redirect('/fail');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fails  $fails
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $fail)
    {
        //
        return view('failure.create',['inventory'=>$fail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fails  $fails
     * @return \Illuminate\Http\Response
     */
    public function edit(Fail $fail)
    {
        //
        //return view($fail);
        return view('failure.edit',['fail'=>$fail]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fails  $fails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fail $fail)
    {
        //
        $f=Fail::findOrFail($fail->id);
        $f->desc=$request['descfail'];
        $f->inventory_id=$request['inventoryid'];
        $f->failtype=$request['failtype'];
        $f->failstate=$request['failstate'];
        $f->save();
        
        return redirect('/fail');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fails  $fails
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fail $fail)
    {
        //
        $f=Fail::findOrFail($fail->id);
        $f->delete();
        return redirect('/fail');
    }
}
