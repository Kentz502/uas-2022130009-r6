<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WeaponTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('weapons')->delete();

        \DB::table('weapons')->insert(array (
            0 =>
            array (
                'name' => 'AR33',
                'type' => 'Assault Rifle',
                'damage' => '41',
                'fire_rate' => '749',
            ),
            1 =>
            array (
                'name' => '556XI',
                'type' => 'Assault Rifle',
                'damage' => '47',
                'fire_rate' => '690',
            ),
            2 =>
            array (
                'name' => 'OTS-03',
                'type' => 'Sniper Rifle',
                'damage' => '71',
                'fire_rate' => '380',
            ),
            3 =>
            array (
                'name' => 'P12',
                'type' => 'Pistol',
                'damage' => '44',
                'fire_rate' => '550',
            ),
            4 =>
            array (
                'name' => 'FMG-9',
                'type' => 'Submachine Gun',
                'damage' => '34',
                'fire_rate' => '800',
            ),
            5 =>
            array (
                'name' => '9X19VSN',
                'type' => 'Submachine Gun',
                'damage' => '34',
                'fire_rate' => '750',
            ),
            6 =>
            array (
                'name' => 'UMP45',
                'type' => 'Submachine Gun',
                'damage' => '38',
                'fire_rate' => '600',
            ),
            7 =>
            array (
                'name' => 'MP7',
                'type' => 'Submachine Gun',
                'damage' => '32',
                'fire_rate' => '900',
            ),
        ));
    }
}
