<?php

namespace App\enum;

enum Department: string
{
    case Cafeteria = 'cafeteria';
    case Lounge_Bar = 'LoungeBar';
    case Bakery = 'bakery';

    public function label(): string
    {
        return match ($this) {
            self::Cafeteria => 'Caffetteria',
            self::Lounge_Bar => 'Lounge Bar',
            self::Bakery => 'Pasticceria',
        };
    }    
}
