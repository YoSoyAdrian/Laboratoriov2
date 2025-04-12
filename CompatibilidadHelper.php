<?php

namespace App\Helpers;

class CompatibilidadHelper
{
    public static function esCompatible(string $donanteGrupo, string $donanteRh, string $receptorGrupo, string $receptorRh): bool
    {
        if ($donanteGrupo === 'O' && $donanteRh === '-') {
            return true; // Donante universal
        }

        $compatibilidad = [
            'O+' => ['O+', 'A+', 'B+', 'AB+'],
            'O-' => ['O-', 'O+', 'A-', 'A+', 'B-', 'B+', 'AB-', 'AB+'],
            'A-' => ['A-', 'A+', 'AB-', 'AB+'],
            'A+' => ['A+', 'AB+'],
            'B-' => ['B-', 'B+', 'AB-', 'AB+'],
            'B+' => ['B+', 'AB+'],
            'AB-' => ['AB-', 'AB+'],
            'AB+' => ['AB+'],
        ];

        $key = $donanteGrupo . $donanteRh;

        return in_array($receptorGrupo . $receptorRh, $compatibilidad[$key] ?? []);
    }
}
