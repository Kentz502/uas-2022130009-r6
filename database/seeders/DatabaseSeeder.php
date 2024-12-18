<?php

namespace Database\Seeders;

use App\Models\Map;
use App\Models\Operator;
use App\Models\PlayerStat;
use App\Models\User;
use App\Models\Weapon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(OperatorTableSeeder::class);
        $this->call(MapTableSeeder::class);
        $this->call(WeaponTableSeeder::class);
        $this->call(PlayerStatTableSeeder::class);
    }
}
