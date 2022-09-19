<?php

namespace App\Http\Controllers;

use App\Drdeit;
use Illuminate\Http\Request;

class DrdeitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$Drdeit = Drdeit::all();
        //return view('drq', compact('Drdeit'));
        return view('drq');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$sections = sections::all();
        return view('single');
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
     * @param  \App\Drdeit  $drdeit
     * @return \Illuminate\Http\Response
     */
    public function show(Drdeit $drdeit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Drdeit  $drdeit
     * @return \Illuminate\Http\Response
     */
    public function edit(Drdeit $drdeit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Drdeit  $drdeit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drdeit $drdeit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Drdeit  $drdeit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drdeit $drdeit)
    {
        //
    }
}
