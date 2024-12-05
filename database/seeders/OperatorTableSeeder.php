<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OperatorTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('operators')->delete();

        \DB::table('operators')->insert(array (
            0 =>
            array (
                'name' => 'Thatcher',
                'primary_weapon' => 'AR33',
                'secondary_weapon' => 'P226 MK 25',
                'primary_type' => 'Attacker',
                'ability' => 'EMP GRENADE',
            ),
            1 =>
            array (
                'name' => 'Thermite',
                'primary_weapon' => '556XI',
                'secondary_weapon' => '5.7 USG',
                'primary_type' => 'Attacker',
                'ability' => 'EXOTHERMIC CHARGE',
            ),
            2 =>
            array (
                'name' => 'Glaz',
                'primary_weapon' => 'OTS-03',
                'secondary_weapon' => 'PMM',
                'primary_type' => 'Attacker',
                'ability' => 'FLIP SIDE',
            ),
            3 =>
            array (
                'name' => 'Blitz',
                'primary_weapon' => 'G52 TACTICAL SHIELD',
                'secondary_weapon' => 'P12',
                'primary_type' => 'Attacker',
                'ability' => 'G52 TACTICAL SHIELD',
            ),
            4 =>
            array (
                'name' => 'Smoke',
                'primary_weapon' => 'FMG-9',
                'secondary_weapon' => 'P226 MK 25',
                'primary_type' => 'Defender',
                'ability' => 'REMOTE GAS GRENADE',
            ),
            5 =>
            array (
                'name' => 'Pulse',
                'primary_weapon' => 'UMP45',
                'secondary_weapon' => '5.7 USG',
                'primary_type' => 'Defender',
                'ability' => 'CARDIAC SENSOR',
            ),
            6 =>
            array (
                'name' => 'Kapkan',
                'primary_weapon' => '9X19VSN',
                'secondary_weapon' => 'PMM',
                'primary_type' => 'Defe',
                'ability' => 'ENTRY DENIAL DEVICE   ',
            ),
            7 =>
            array (
                'name' => 'Bandit',
                'primary_weapon' => 'MP7',
                'secondary_weapon' => 'P12',
                'primary_type' => 'Defender',
                'ability' => 'SHOCK WIRE',
            ),
        ));
    }
}
