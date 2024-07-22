<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appo extends Model
{
    use HasFactory;

    protected $fillable = [
        'Date_heure_', 'nom_patient_', 'nom_medecin_', 'nom_secretaire_', 'nom_acte_'
        // Ajoutez ici tous les autres champs que vous souhaitez remplir
    ];

    protected $table = 'appo'; // Assurez-vous que la table correspond au nom de votre migration


    public function patient()
    {
        return $this->belongsTo(Patient::class, 'nom_patient_', 'Nom_p');
    }

    // public function medecin()
    // {
    //     return $this->belongsTo(Medecin::class, 'nom_medecin_', 'Nom_m');
    // }

    // public function acte()
    // {
    //     return $this->belongsTo(Acte::class, 'nom_acte_', 'description'); // Adjust the foreign key and local key as necessary
    // }
    // Définir d'autres relations si nécessaire, par exemple avec Patient, Medecin, Secretaire, etc.
}
