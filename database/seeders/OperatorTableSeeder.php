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
                'photos' => 'public/thatcher.jpg',
            ),
            1 =>
            array (
                'name' => 'Thermite',
                'primary_weapon' => '556XI',
                'secondary_weapon' => '5.7 USG',
                'primary_type' => 'Attacker',
                'ability' => 'EXOTHERMIC CHARGE',
                'photos' => 'public/thermite.jpg',
            ),
            2 =>
            array (
                'name' => 'Glaz',
                'primary_weapon' => 'OTS-03',
                'secondary_weapon' => 'PMM',
                'primary_type' => 'Attacker',
                'ability' => 'FLIP SIDE',
                'photos' => 'public/glaz.jpg',
            ),
            3 =>
            array (
                'name' => 'Blitz',
                'primary_weapon' => 'G52 TACTICAL SHIELD',
                'secondary_weapon' => 'P12',
                'primary_type' => 'Attacker',
                'ability' => 'G52 TACTICAL SHIELD',
                'photos' => 'public/blitz.jpg',
            ),
            4 =>
            array (
                'name' => 'Smoke',
                'primary_weapon' => 'FMG-9',
                'secondary_weapon' => 'P226 MK 25',
                'primary_type' => 'Defender',
                'ability' => 'REMOTE GAS GRENADE',
                'photos' => 'public/smoke.jpg',
            ),
            5 =>
            array (
                'name' => 'Pulse',
                'primary_weapon' => 'UMP45',
                'secondary_weapon' => '5.7 USG',
                'primary_type' => 'Defender',
                'ability' => 'CARDIAC SENSOR',
                'photos' => 'public/pulse.jpg',
            ),
            6 =>
            array (
                'name' => 'Kapkan',
                'primary_weapon' => '9X19VSN',
                'secondary_weapon' => 'PMM',
                'primary_type' => 'Defender',
                'ability' => 'ENTRY DENIAL DEVICE',
                'photos' => 'public/kapkan.jpg',
            ),
            7 =>
            array (
                'name' => 'Bandit',
                'primary_weapon' => 'MP7',
                'secondary_weapon' => 'P12',
                'primary_type' => 'Defender',
                'ability' => 'SHOCK WIRE',
                'photos' => 'public/bandit.jpg',
            ),
        ));
    }
}
