<?php

namespace App\enums;

enum StatusTable: string
{
    case Not_Ready = 'NotReady';
    case Ready = 'Ready';

    public function label(): string
    {
        return match ($this) {
            self::Not_Ready => 'Non pronto',
            self::Ready => 'Pronto',
        };
    }
}
