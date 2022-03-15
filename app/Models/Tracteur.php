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
}
