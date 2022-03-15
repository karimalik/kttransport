<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use Illuminate\Http\Request;
use App\Http\Requests\StoreChauffeurRequest;
use App\Http\Requests\UpdateChauffeurRequest;
use App\Models\Tracteur;

class ChauffeurController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $chauffeurs = Chauffeur::all();
        return view('chauffeurs.listAll', compact('chauffeurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tracteurs = Tracteur::all();
        return view('chauffeurs.newChauffeur', compact('tracteurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChauffeurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = [
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'numeroCNI' => $request->numeroCNI,
            'telephone' => $request->telephone,
            'tracteur_id' => $request->tracteur_id,
        ];

        // dd($data);

        Chauffeur::create($data);

        return redirect()->route('chauffeurs.index');
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
        return view('chauffeurs.showChauffeur', compact('chauffeur'));
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
        $tracteurs = Tracteur::all();
        return view('chauffeurs.editChauffeur', compact('chauffeur', 'tracteurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChauffeurRequest  $request
     * @param  \App\Models\Chauffeur  $chauffeur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chauffeur $chauffeur)
    {
        // 
        $data = [
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'numeroCNI' => $request->numeroCNI,
            'telephone' => $request->telephone,
            'tracteur_id' => $request->tracteur_id,
        ];

        $chauffeur->update($data);

        return redirect()->route('chauffeurs.index');
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
        $chauffeur->delete();

        return redirect()->route('chauffeurs.index');
    }
}
