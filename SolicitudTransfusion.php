<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SolicitudTransfusion extends Model
{
    use HasFactory;

    protected $table = 'solicitudes_transfusion';

    protected $fillable = [
        'paciente_fk',
        'tipo_solicitud',
        'fecha_solicitud',
        'numero_muestra',
        'estado',
        'user_solicita_fk',
        'observaciones',
    ];

    protected $casts = [
        'fecha_solicitud' => 'datetime',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'paciente_fk');
    }

    public function solicitante()
    {
        return $this->belongsTo(User::class, 'user_solicita_fk');
    }
}
