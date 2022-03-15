<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carburant extends Model
{
    use HasFactory;

   protected $fillable = [
    'date',
    'quantite',
    'montant',
    'kilometre',
    'commentaire',
    'tracteur_id',
    'periode',
   ];

   public function tracteur()
   {
       return $this->belongsTo(Tracteur::class);
   }
}
