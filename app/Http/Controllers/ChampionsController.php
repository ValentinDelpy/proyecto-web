<?php

namespace App\Http\Controllers;

use App\Champions;
use App\Teams;
use App\Items;

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
        $teams = Teams::pluck('name', 'id');
        return view('champions.championForm',compact('teams'));
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

        $champion = new Champion([
            'name' => $request->name,
            'health_points' => $request->health_points,
            'type' => $request->type,
            'role' => $request->role,
        ]);

        $team = Teams::find($request->id);
        $team->champions()->save($champion);
        return redirect()->route('champion.index', $champion->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Champions  $champions
     * @return \Illuminate\Http\Response
     */
    public function show(Champions $champion)
    {
        return view('champions.championShow', compact('champion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Champions  $champions
     * @return \Illuminate\Http\Response
     */
    public function edit(Champions $champion)
    {
        return view('adminCreateChampion', compact('champion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Champions  $champions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Champions $champion)
    {
        $request->validate([
            'name' => 'required | max:20',
            'health_points' => 'required | max:10000',
            'type' => 'required',
            'role' => 'required'
        ]);
        
        $champion->name = $request->name;
        $champion->health_points = $request->health_points;
        $champion->type = $request->type;
        $champion->role = $request->role;
        $champion->save();

        return redirect()->route('champion.show', $champion->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Champions  $champions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Champions $champion)
    {
        $champion->delete();
        return redirect()->route('champion.index');
    }
}
