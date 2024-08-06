<?php

namespace App\Enums;

enum RdvStatut: string
{
    case ACCEPTE = 'Accaepté';
    case REFUSE = 'Refusé';
    case REPORTE = 'Reporté';
    case ANNULE ="Annulé";

    public static function values():array
    {
        return array_map(fn($element)=>$element->value,self::cases());
    }

    public static function random(): self
    {
        return self::cases()[array_rand(self::cases())];
    }

    
}