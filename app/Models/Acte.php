<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acte extends Model
{
    use HasFactory;

    protected $table = 'actes'; // Nom de la table associée
    protected $primaryKey = 'id_a'; // Clé primaire de la table

    // Colonnes pouvant être assignées en masse
    protected $fillable = [
        'cout',
        'description',
    ];
}
