<?php

namespace App\Http\Controllers\Android;

use App\Installed;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return Installed::all();
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Installed  $installed
     * @return \Illuminate\Http\Response
     */
    public function show(Installed $installed)
    {
        //
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
    public function destroy(Installed $installed)
    {
        //
    }
}
