<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'username' => 'karol',
            'first_name' => 'Karol',
            'last_name' => 'Leonardi',
            'Role' => 'waiter',
        ]);
        User::factory()->create([
            'username' => 'angelo',
            'first_name' => 'Angelo',
            'last_name' => 'Leonardi',
            'Role' => 'owner',
        ]);
        User::factory()->create([
            'username' => 'pasquale',
            'first_name' => 'Karol',
            'last_name' => 'Leonardi',
            'Role' => 'barman',
        ]);
        User::factory()->create([
            'username' => 'federica',
            'first_name' => 'Karol',
            'last_name' => 'Leonardi',
            'Role' => 'cashier',
        ]);
    }
}
