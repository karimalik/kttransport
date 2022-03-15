<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChauffeurRequest;
use App\Http\Requests\UpdateChauffeurRequest;
use App\Models\Chauffeur;

class ChauffeurController extends Controller
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
     * @param  \App\Http\Requests\StoreChauffeurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChauffeurRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chauffeur  $chauffeur
     * @return \Illuminate\Http\Response
     */
    public function show(Chauffeur $chauffeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chauffeur  $chauffeur
     * @return \Illuminate\Http\Response
     */
    public function edit(Chauffeur $chauffeur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChauffeurRequest  $request
     * @param  \App\Models\Chauffeur  $chauffeur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChauffeurRequest $request, Chauffeur $chauffeur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chauffeur  $chauffeur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chauffeur $chauffeur)
    {
        //
    }
}
