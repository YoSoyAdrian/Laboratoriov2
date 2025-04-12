<?php

namespace App\Http\Controllers;

use App\Models\SolicitudTransfusion;
use Barryvdh\DomPDF\Facade\Pdf;

class EtiquetaPdfController extends Controller
{
    public function generar($id)
    {
        $solicitud = SolicitudTransfusion::with('paciente')->findOrFail($id);
        $pdf = Pdf::loadView('pdf.etiqueta', compact('solicitud'));
        return $pdf->stream("etiqueta_{$solicitud->numero_muestra}.pdf");
    }
}
