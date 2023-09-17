<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consultation;
use PDF;

class PdfController extends Controller
{
    public function geraPdf(){
    
        $nomeFuncionario = \Auth::user()->id;
        $dataHoraEmissao = now()->format('d/m/Y H:i:s');
        $consultations = Consultation::all();

        $pdf = PDF::loadView('pdf.pdf', compact('consultations', 'nomeFuncionario', 'dataHoraEmissao'));

        return $pdf->setPaper('a4')->stream('Consultas');

    }
}
