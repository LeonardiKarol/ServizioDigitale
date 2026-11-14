<?php

namespace App\enums;

enum StatusTable: string
{
    case NotReady = 'NotReady';
    case Ready = 'Ready';

    public function label(): string
    {
        return match ($this) {
            self::NotReady => 'Non pronto',
            self::Ready => 'Pronto',
        };
    }
}
