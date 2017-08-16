<?php

namespace App\Http\Controllers;

use App\Lab;
use App\Inventory;
use App\Software;
use App\Installed;
use Illuminate\Http\Request;

class InstalledController extends Controller
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
        
        if($request['agregartodos'])
        {
            $lab=Lab::find($request['labid']);
            foreach($lab->inventory as $i)
            {
                Installed::create([
                    'inventory_id'=>$i->id,
                    'software_id'=>$request['softwareid']
                ]);
            }
            return view('installed.index',['lab'=>$lab,'software'=>Software::all()]); 
        }
        else{
        Installed::create([
            'inventory_id'=>$request['inventoryid'],
            'software_id'=>$request['softwareid']
        ]);
        $lab=Lab::find($request['labid']);
        return view('installed.index',['lab'=>$lab,'software'=>Software::all()]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Installed  $installed
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $lab=Lab::find($id);
        return view('installed.index',['lab'=>$lab,'software'=>Software::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Installed  $installed
     * @return \Illuminate\Http\Response
     */
    public function edit(Installed $installed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Installed  $installed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Installed $installed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Installed  $installed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Installed $installed)
    {
        //
        if($request['installedid']){
            $i=Installed::findOrFail($request['installedid']);
            $lab=Lab::find($i->inventory['lab_id']);
            $i->delete();
            return view('installed.index',['lab'=>$lab,'software'=>Software::all()]);
        }
        
    }
}
