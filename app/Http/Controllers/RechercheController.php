<?php

namespace App\Http\Controllers;

use App\Models\Carburant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RechercheController extends Controller
{
    public function __construct() {

        $this->middleware('auth');
    }

    //
    public function index()
    {
        return view('recherche.recherche');
    }

    public function recherche(Request $request)
    {
        $dateD = $request->dateD;
        $dateF = $request->dateF;

        $results = DB::table('carburants')
                        ->select('date', 'quantite', 'montant', 'kilometre', 'periode', 'commentaire', 'marque')
                        ->join('tracteurs', 'tracteurs.id', '=', 'carburants.tracteur_id')
                        ->where('date', '>=', $dateD, 'and', 'date', '<=', $dateF)
                        ->get();

        $rechercheSum = DB::table('carburants')
                           ->where('date', '>=', $dateD, 'and', 'date', '<=', $dateF)
                           ->sum('montant');

        // dd($sommeT);

        return view('recherche.result', compact('results', 'rechercheSum'));
    }
}
