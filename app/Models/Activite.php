<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'pieds20',
        'pieds40',
        'siteChargement',
        'siteLivraison',
        'heureChargement',
        'heureDechargement',
        'commentaire',
        'numero_conteneur',
        'tracteur_id',
        'chauffeur_id',
    ];

    public function chauffeur()
    {
        return $this->belongsTo(Chauffeur::class);
    }

    public function tracteur()
    {
        return $this->belongsTo(Tracteur::class);
    }
}
