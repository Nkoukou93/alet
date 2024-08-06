<?php

namespace App\Enums;

enum StatutPsy: string{

    case APPROVE = 'Approuvé';

    case EN_ATTENTE = 'En attente';

    case REFUSE = 'Refusé';
    public static function values():array{
        return array_map(fn($element)=>$element->value,self::cases());
    }

    public static function random(): self {
        return self::cases()[array_rand(self::cases())];
    }

}