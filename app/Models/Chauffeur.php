<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'numeroCNI',
        'telephone',
        'tracteur_id'
    ];

    public function tracteur()
    {
        return $this->belongsTo(Tracteur::class);
    }
}
