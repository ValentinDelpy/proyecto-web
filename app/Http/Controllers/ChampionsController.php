<?php

namespace App\Http\Controllers;

use App\Champions;
use Illuminate\Http\Request;

class ChampionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $champions = Champions::all();
        dd($champions);
        return view('indexUser', compact('champions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminCreateChampion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Champions::create($request->all());
        return view('adminCreateChampion');
        alert('Champion ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Champions  $champions
     * @return \Illuminate\Http\Response
     */
    public function show(Champions $champions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Champions  $champions
     * @return \Illuminate\Http\Response
     */
    public function edit(Champions $champions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Champions  $champions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Champions $champions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Champions  $champions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Champions $champions)
    {
        //
    }
}
