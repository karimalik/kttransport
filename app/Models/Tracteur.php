<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracteur extends Model
{
    use HasFactory;

    protected $fillable = [
        'marque',
        'immatriculation',
        'type',
    ];

    public function chauffeurs()
    {
        return $this->hasMany(Chauffeur::class);
    }

    public function carburants()
    {
        $this->hasMany(Carburant::class);
    }

    public function activite()
    {
        return $this->hasOne(Activite::class);
    }

    public function pannes(){
        return $this->hasOne(Panne::class);
    }
}
