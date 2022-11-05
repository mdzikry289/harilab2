<?php

namespace App\Http\Controllers;

use App\Models\SuperTeam;
use App\Http\Requests\StoreSuperTeamRequest;
use App\Http\Requests\UpdateSuperTeamRequest;
use App\Models\Blog;
use App\Models\Services;
use App\Models\Clients;

class SuperTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = SuperTeam::orderby('name')->get();
        $recent = Blog::all();
        $blog = Blog::all();
        $client = Clients::all();
        return view('about', [
            'pageTitle' => 'About Us',
            'team' => $team,
            'blog' => $blog,
            'recent' => $recent,
            'clients' => $client
        ]);
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
     * @param  \App\Http\Requests\StoreSuperTeamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSuperTeamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuperTeam  $superTeam
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = SuperTeam::find($id);
        $blog = Blog::all();
        $recent = Blog::all();
        $clients = Clients::all();
        $services = Services::all();
        $ts = SuperTeam::where('team_id', $id)
        ->join('services', 'services.team_id', '=', 'super_teams.id')
        ->get();
        return view('superteam_detail', [
            'pageTitle' => 'Superteam Detail',
            'ts' => $ts,
            'blog' => $blog,
            'team' => $team,
            'clients' => $clients,
            'recent' => $recent
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuperTeam  $superTeam
     * @return \Illuminate\Http\Response
     */
    public function edit(SuperTeam $superTeam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSuperTeamRequest  $request
     * @param  \App\Models\SuperTeam  $superTeam
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSuperTeamRequest $request, SuperTeam $superTeam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuperTeam  $superTeam
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuperTeam $superTeam)
    {
        //
    }
}
