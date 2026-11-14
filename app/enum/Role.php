<?php

namespace App\enums;

enum Role: string
{
    case Owner = 'owner';
    case Cashier = 'cashier';
    case Waiter = 'waiter';
    case Barman = 'barman';
    case Coffee_maker = 'coffee maker';

    public function label(): string
    {
        return match ($this) {
            self::Owner => 'Titolare',
            self::Cashier => 'Cassiera',
            self::Waiter => 'Cameriere',
            self::Barman => 'Barman',
            self::Coffee_maker => 'Barista',
        };
    }
}
