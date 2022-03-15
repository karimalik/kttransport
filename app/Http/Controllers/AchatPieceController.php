<?php

namespace App\Http\Controllers;

use App\Models\AchatPiece;
use Illuminate\Http\Request;

class AchatPieceController extends Controller
{
    public function __construct(){
       return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $achats = AchatPiece::all();

        return view('achats.listAll', compact('achats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('achats.newAchat');
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
        $montantT = $request->quantite * $request->prixU;

        $data = [
            'dateAchat' =>$request->dateAchat,
            'designation' => $request->designation,
            'quantite' => $request->quantite,
            'prixU' => $request->prixU,
            'montantT' => $montantT
        ];

        AchatPiece::create($data);

        return redirect()->route('achats.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AchatPiece  $achatPiece
     * @return \Illuminate\Http\Response
     */
    public function show(AchatPiece $achat)
    {
        //
        return view('achats.showAchat', compact('achat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AchatPiece  $achatPiece
     * @return \Illuminate\Http\Response
     */
    public function edit(AchatPiece $achat)
    {
        //
        return view('achats.editAchat', compact('achat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AchatPiece  $achatPiece
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AchatPiece $achat)
    {
        //
        $montantT = $request->prixU * $request->quantite;

        $data = [
            'dateAchat' =>$request->dateAchat,
            'designation' => $request->designation,
            'quantite' => $request->quantite,
            'prixU' => $request->prixU,
            'montant' => $request->montant,
            'montantT' => $montantT
        ];

        $achat->update($data);

        return redirect()->route('achats.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AchatPiece  $achatPiece
     * @return \Illuminate\Http\Response
     */
    public function destroy(AchatPiece $achat)
    {
        //
        $achat->delete();

        return redirect()->route('achats.index');
    }
}
