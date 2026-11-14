<?php

namespace App\enums;

enum Departments: string
{
    case Cafeteria = 'cafeteria';
    case LoungeBar = 'LoungeBar';
    case Bakery = 'bakery';

    public function label(): string
    {
        return match ($this) {
            self::Cafeteria => 'Caffetteria',
            self::LoungeBar => 'Lounge Bar',
            self::Bakery => 'Pasticceria',
        };
    }    
}
