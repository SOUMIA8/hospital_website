<?php
namespace App\Http\Controllers;

use App\Models\Facture;
use Illuminate\Http\Request;
use App\Models\Appo;
use App\Models\Patient;
use App\Models\Acte;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class FactureController extends Controller
{
    public function index()
    {
        $appos = Appo::all();
        $factures = [];

        foreach ($appos as $appo) {
            $acte = $appo->acte(); // Obtenir l'acte correspondant
            $total = $acte ? $acte->cout : 0;
            $factures[] = [
                'appo' => $appo,
                'total' => $total,
            ];
        }
        return view('factures.index', compact('factures'));
    }
    public function generatePDF($id)
    {

        $appo = Appo::findOrFail($id);
        $acte = $appo->acte(); // Obtenir l'acte correspondant
        $total = $acte ? $acte->cout : 0;

        $pdf = PDF::loadView('factures.pdf', compact('appo', 'total'));
        return $pdf->download('facture.pdf');
    }
}
