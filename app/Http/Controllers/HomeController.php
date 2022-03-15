<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $depenseCarburant = DB::table('carburants')->sum('montant');
        $depenseAchat = DB::table('achat_pieces')->sum('montantT');
        $depensePanne = DB::table('pannes')->sum('cout');
        $tracteur = DB::table('tracteurs')->count();
        $results = DB::table('carburants')
        ->select('date', 'quantite', 'montant', 'kilometre', 'periode', 'commentaire', 'marque')
        ->join('tracteurs', 'tracteurs.id', '=', 'carburants.tracteur_id')
        ->orderBy('date')
        ->paginate(10);

        return view('home', compact('depenseCarburant', 'depenseAchat', 'depensePanne', 'tracteur', 'results'));
    }
}
