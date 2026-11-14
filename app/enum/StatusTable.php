<?php

namespace App\enums;

enum StatusTable: string
{
    case ToPay = 'ToPay';
    case Paid = 'Paid';

    public function label(): string
    {
        return match ($this) {
            self::ToPay => 'Da pagare',
            self::Paid => 'Pagato',
        };
    }
}
