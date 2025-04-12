<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtiquetaPdfController;
use App\Livewire\SolicitudTransfusionForm;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    // Formulario Livewire para nueva solicitud
    Route::get('/solicitud-transfusion', SolicitudTransfusionForm::class)->name('solicitud.transfusion');

    // Generar etiqueta en PDF
    Route::get('/etiqueta/{id}', [EtiquetaPdfController::class, 'generar'])->name('etiqueta.pdf');

    // Generar PDF de brazalete
    Route::get('/brazalete/{id}', function ($id) {
        $solicitud = App\Models\SolicitudTransfusion::with('paciente')->findOrFail($id);
        $pdf = Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.brazalete', compact('solicitud'));
        return $pdf->stream("brazalete_{$solicitud->numero_muestra}.pdf");
    })->name('brazalete.pdf');

});
