<?php

namespace App\Http\Controllers;

use App\Champions;
use Illuminate\Http\Request;

class ChampionsController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->only('create', 'edit');
        $this->middleware('firstuser')->only('create');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $champions = Champions::all();
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
        $request->validate([
            'name' => 'required | max:20',
            'health_points' => 'required | max:10000',
            'type' => 'required',
            'role' => 'required'
        ]);

        Champions::create($request->all());
        return redirect()->route('champion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Champions  $champions
     * @return \Illuminate\Http\Response
     */
    public function show(Champions $champ)
    {
        return view('championShow', compact('champ'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Champions  $champions
     * @return \Illuminate\Http\Response
     */
    public function edit(Champions $champ)
    {
        return view('adminCreateChampion', compact('champ'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Champions  $champions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Champions $champ)
    {
        $request->validate([
            'name' => 'required | max:20',
            'health_points' => 'required | max:10000',
            'type' => 'required',
            'role' => 'required'
        ]);
        
        $champ->name = $request->name;
        $champ->health_points = $request->health_points;
        $champ->type = $request->type;
        $champ->role = $request->role;
        $champ->save();

        return redirect()->route('champion.show', $champ->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Champions  $champions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Champions $champ)
    {
        $champ->delete();
        return redirect()->route('champion.index');
    }
}
