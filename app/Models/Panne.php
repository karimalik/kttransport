<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panne extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'panneDeclare',
        'action',
        'cout',
        'commentaire',
        'tracteur_id',
    ];

    public function tracteur()
    {
        return $this->belongsTo(Tracteur::class);
    }
}
