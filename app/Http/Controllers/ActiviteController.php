<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Tracteur;
use App\Models\Chauffeur;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    public function __construct() {

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activites = Activite::all();
        return view('activite.listAll', compact('activites'));
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
        $chauffeurs = Chauffeur::all();
        return view('activite.newActivite', compact('tracteurs', 'chauffeurs'));
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
        $data = [
            'date' => $request->date,
            'pieds20' => $request->pieds20,
            'pieds40' => $request->pieds40,
            'siteChargement' => $request->siteChargement,
            'siteLivraison' => $request->siteLivraison,
            'heureChargement' => $request->heureChargement,
            'heureDechargement' => $request->heureDechargement,
            'commentaire' => $request->commentaire,
            'numero_conteneur' => $request->numero_conteneur,
            'tracteur_id' => $request->tracteur_id,
            'chauffeur_id' => $request->chauffeur_id,
        ];

        Activite::create($data);

        return redirect()->route('activites.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function show(Activite $activite)
    {
        //
        return view('activite.showActivite', compact('activite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function edit(Activite $activite)
    {
        //
        $tracteurs = Tracteur::all();
        $chauffeurs = Chauffeur::all();
        
        return view('activite.editAcitivite', compact('activite', 'tracteurs', 'chauffeurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activite $activite)
    {
        //
        $data = [
            'date' => $request->date,
            'remorque' => $request->remorque,
            'siteChargement' => $request->siteChargement,
            'siteLivraison' => $request->siteLivraison,
            'heureChargement' => $request->heureChargement,
            'heureDechargement' => $request->heureDechargement,
            'commentaire' => $request->commentaire,
            'numero_conteneur' => $request->numero_conteneur,
            'tracteur_id' => $request->tracteur_id,
            'chauffeur_id' => $request->chauffeur_id,
        ];

        $activite->update($data);

        return redirect()->route('activites.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activite $activite)
    {
        //
        $activite->delete();

        return redirect()->route('activites.index');
    }
}
