<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ComponenteProcesado extends Model
{
    use HasFactory;

    protected $table = 'componentes_procesados';

    protected $fillable = [
        'unidad_transfusional_fk',
        'tipo_proceso',
        'resultado',
        'fecha_proceso',
        'nueva_fecha_caducidad',
        'user_fk',
    ];

    protected $casts = [
        'fecha_proceso' => 'datetime',
        'nueva_fecha_caducidad' => 'datetime',
    ];

    public function unidadTransfusional()
    {
        return $this->belongsTo(UnidadTransfusional::class, 'unidad_transfusional_fk');
    }
}
