<?php

namespace App\Http\Controllers;

use App\Models\Panne;
use App\Models\Tracteur;
use Illuminate\Http\Request;

class PanneController extends Controller
{
    public function __construct(){
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
        $pannes = Panne::all();

        return view('pannes.listAll', compact('pannes'));
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

        return view('pannes.newPanne', compact('tracteurs'));
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
        $empdata = [
            'date' => $request->date,
            'panneDeclare' => $request->panneDeclare,
            'action' => $request->action,
            'statut' => $request->statut,
            'cout' => $request->cout,
            'commentaire' => $request->commentaire,
            'tracteur_id' => $request->tracteur_id,
        ];

        Panne::create($empdata);

        return redirect()->route('pannes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Panne  $panne
     * @return \Illuminate\Http\Response
     */
    public function show(Panne $panne)
    {
        //
        return view('pannes.showPanne', compact('panne'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Panne  $panne
     * @return \Illuminate\Http\Response
     */
    public function edit(Panne $panne)
    {
        //
        $tracteurs = Tracteur::all();

        return view('pannes.editPanne', compact('tracteurs', 'panne'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Panne  $panne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Panne $panne)
    {
        //
        $empdata = [
            'date' => $request->date,
            'panneDeclare' => $request->panneDeclare,
            'action' => $request->action,
            'statut' => $request->statut,
            'cout' => $request->cout,
            'commentaire' => $request->commentaire,
            'tracteur_id' => $request->tracteur_id,
        ];

        $panne->update($empdata);

        return redirect()->route('pannes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Panne  $panne
     * @return \Illuminate\Http\Response
     */
    public function destroy(Panne $panne)
    {
        //
        $panne->delete();
        
        return redirect()->route('pannes.index');
    }
}
