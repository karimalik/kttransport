<?php

namespace App\Http\Controllers;


use App\Models\Tracteur;
use Illuminate\Http\Request;

class TracteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tracteurs = Tracteur::all();
        
        return view('tracteurs.listAll', compact('tracteurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tracteurs.newTracteur');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTracteurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = [
            'marque' => $request->marque,
            'immatriculation' => $request->immatriculation,
            'type' => $request->type,
        ];

        Tracteur::create($data);

        return redirect()->route('tracteurs.index')->withSuccess('Enregistrement éffectuer avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tracteur  $tracteur
     * @return \Illuminate\Http\Response
     */
    public function show(Tracteur $tracteur)
    {
        //
        return view('tracteurs.showTracteur', compact('tracteur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tracteur  $tracteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Tracteur $tracteur)
    {
        //
        return view('tracteurs.editTracteur', compact('tracteur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTracteurRequest  $request
     * @param  \App\Models\Tracteur  $tracteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tracteur $tracteur)
    {
        //
        $data = [
            'marque' => $request->marque,
            'immatriculation' => $request->immatriculation,
            'type' => $request->type,
        ];

        $tracteur->update($data);

        return redirect()->route('tracteurs.index')->withSuccess('Mise à jour réussi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tracteur  $tracteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracteur $tracteur)
    {
        //
        $tracteur->delete();

        return redirect()->route('tracteurs.index')->withSuccess('Suppression réussi!');
    }
}
