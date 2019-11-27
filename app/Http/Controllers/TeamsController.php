<?php

namespace App\Http\Controllers;

use App\Teams;
use App\Champions;
use App\Mail\TeamCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Teams::with('champions:id,name','user')->get();
        return view('teams.teamIndex', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $champions = Champions::pluck('name','id');
        return view('teams.teamForm', compact('champions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['user_id' => \Auth::id()]);
        $request->validate([
            'name' => 'required|string|min:5|max:32',
            'rank' => 'string|min:2|max:32',
            'region' => 'required|string|max:20',
        ]);

        $team = Teams::create($request->all());
        $team->champions()->attach($request->champion_id);

        return redirect()->route('team.show', $team->id)
            ->with(['message' => 'Team successfully created', 'type' => 'alert-success']);    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function show(Teams $team)
    {
        return view('teams.teamShow', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function edit(Teams $team)
    {
        $champions = Champions::pluck('name','id');
        $selected = $team->champions()->pluck('id');
        
        return view('teams.teamForm', compact('champions', 'team', 'selected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teams $team)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:32',
            'rank' => 'string|min:2|max:32',
            'region' => 'required|string|max:20',
        ]);

        $team->name = $request->name;
        $team->rank = $request->rank;
        $team->region = $request->region;
        $team->save();
        $team->champions()->sync($request->champion_id);
        return redirect()->route('team.show', $team->id)
            ->with(['message' => 'Team sucessfully created', 'type' => 'alert-success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teams $team)
    {
        $team->delete();
        return redirect()->route('team.index')->with(['message' => 'Team successfully deleted', 'type' => 'alert-warning']);
    }

    public function notificateTeamCreated(Teams $team){
        $team->load('user');
        //Envía correo al usuario
        Mail::to($team->user->email)->send(new TeamCreated($team));
        return redirect()->route('team.index');
    }

}
