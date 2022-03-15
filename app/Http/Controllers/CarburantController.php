<?php

namespace App\Http\Controllers;

use App\Models\Carburant;
use App\Models\Tracteur;
use Illuminate\Http\Request;

class CarburantController extends Controller
{
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
        $carburants = Carburant::all();
        return view('carburants.listAll',compact('carburants'));
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
        return view('carburants.newCarburant', compact('tracteurs'));
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
        $montant = ($request->quantite) * 575;
        $data = [
            'date' => $request->date,
            'quantite' => $request->quantite,
            'montant' => $montant,
            'periode' => $request->periode,
            'kilometre' => $request->kilometre,
            'commentaire' => $request->commentaire,
            'tracteur_id' => $request->tracteur_id,
        ];

        Carburant::create($data);

        return redirect()->route('carburants.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Carburant $carburant)
    {
        //
        return view('carburants.showCarburant', compact('carburant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Carburant $carburant)
    {
        //
        $tracteurs = Tracteur::all();
        return view('carburants.editCarburant', compact('carburant', 'tracteurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carburant $carburant)
    {
        //
        $montant = ($request->quantite) * 575;
        $data = [
            'date' => $request->date,
            'quantite' => $request->quantite,
            'montant' => $montant,
            'periode' => $request->periode,
            'kilometre' => $request->kilometre,
            'commentaire' => $request->commentaire,
            'tracteur_id' => $request->tracteur_id,
        ];

        $carburant->update($data);

        return redirect()->route('carburants.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carburant $carburant)
    {
        //
        $carburant->delete();

        return redirect()->route('carburants.index');
    }
}
