<?php

namespace App\Http\Controllers\Android;

use App\Lost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return Lost::all();
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
     * @param  \App\Lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function show(Lost $lost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function edit(Lost $lost)
    {
        //
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
        //
    }
}
