<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlayerStatTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('player_stats')->delete();

        \DB::table('player_stats')->insert(array (
            0 =>
            array (
                'name' => 'Kenji',
                'kills' => '51',
                'deaths' => '60',
                'assists' => '23',
                'rank' => 'Copper',
            ),
            1 =>
            array (
                'name' => 'Onixd502',
                'kills' => '80',
                'deaths' => '121',
                'assists' => '103',
                'rank' => 'Silver',
            ),
            2 =>
            array (
                'name' => 'Dragonfly',
                'kills' => '531',
                'deaths' => '892',
                'assists' => '922',
                'rank' => 'Champion',
            ),
            3 =>
            array (
                'name' => 'Aura220',
                'kills' => '71',
                'deaths' => '60',
                'assists' => '78',
                'rank' => 'Gold',
            ),
            4 =>
            array (
                'name' => 'Laksi',
                'kills' => '41',
                'deaths' => '70',
                'assists' => '63',
                'rank' => 'Copper',
            ),
        ));
    }
}
