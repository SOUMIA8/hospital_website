<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Medecin extends Model
{
    use HasFactory;

    // Nom de la table
    protected $table = 'medecin';

    // Nom de la clé primaire
    protected $primaryKey = 'id_m';

    // Les attributs qui sont assignables en masse.
    protected $fillable = [
        'Nom_m',
        'Prenom_m',
        'specialite',
        'CIN_m',
        'Email_m',
        'Telephone'
    ];

    // public function rendezVous()
    // {
    //     return $this->hasMany(Appo::class, 'nom_medecin_', 'Nom_m');
    // }
}


