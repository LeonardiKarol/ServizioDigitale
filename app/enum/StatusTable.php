<?php

namespace App\enums;

enum StatusTable: string
{
    case To_Pay = 'ToPay';
    case Paid = 'Paid';

    public function label(): string
    {
        return match ($this) {
            self::To_Pay => 'Da pagare',
            self::Paid => 'Pagato',
        };
    }
}
