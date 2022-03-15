<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchatPiece extends Model
{
    use HasFactory;

    protected $fillable = [
        'dateAchat',
        'designation',
        'quantite',
        'prixU',
        'montantT',
    ];
}
