<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MapTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('maps')->delete();

        \DB::table('maps')->insert(array (
            0 =>
            array (
                'name' => 'Club House',
                'description' => 'This map depicts an assault on a biker gang clubhouse. Featuring a full bar, gaming tables and leather furniture, this mixed interior/exterior layout offers a host of interesting tactical possibilities for both attacker and defender.',
                'location' => 'Hanover, Germany',
            ),
            1 =>
            array (
                'name' => 'Coastline',
                'description' => 'Team Rainbow has been called to safeguard the seashore of Ibiza, Spain. Stationed on Ibiza’s rocky shore, course through Balearic ruins and navigate booming bars to neutralize the threat. Get ready for a surround flow of combat laced with chaotic rushes as you explore a paradise gone wrong.',
                'location' => 'Ibiza, Spain',
            ),
            2 =>
            array (
                'name' => 'Border',
                'description' => 'Team Rainbow has been called in to assist the local law enforcement and regain control of the border. A mix of old and new buildings with open air pathways make this the most destructible and open planned map to date',
                'location' => 'Middle East',
            ),
        ));
    }
}
