<?php

namespace App\Http\Controllers;

use App\drcal;
use Illuminate\Http\Request;

class DrcalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$drcal = drcal::all();
       // return view('.drcal', compact('drcal'));
        return view('.drcal');
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
     * @param  \App\drcal  $drcal
     * @return \Illuminate\Http\Response
     */
    public function show(drcal $drcal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\drcal  $drcal
     * @return \Illuminate\Http\Response
     */
    public function edit(drcal $drcal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\drcal  $drcal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, drcal $drcal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\drcal  $drcal
     * @return \Illuminate\Http\Response
     */
    public function destroy(drcal $drcal)
    {
        //
    }
}
