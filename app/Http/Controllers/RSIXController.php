<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class RSIXController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Example data, replace with real data from models
        $operators = [
            (object) ['id' => 1, 'name' => 'Thatcher', 'description' => 'Attacker'],
            (object) ['id' => 2, 'name' => 'Thermite', 'description' => 'Attacker'],
            (object) ['id' => 3, 'name' => 'Glaz', 'description' => 'Attacker'],
            (object) ['id' => 4, 'name' => 'Blitz', 'description' => 'Attacker'],
            (object) ['id' => 5, 'name' => 'Smoke', 'description' => 'Defender'],
            (object) ['id' => 6, 'name' => 'Pulse', 'description' => 'Defender'],
            (object) ['id' => 7, 'name' => 'Kapkan', 'description' => 'Defender'],
            (object) ['id' => 8, 'name' => 'Bandit', 'description' => 'Defender'],
        ];
        $weapons = [
            (object) ['id' => 1, 'name' => 'AR33', 'description' => 'Description of Weapon 1'],
            (object) ['id' => 2, 'name' => '556XI', 'description' => 'Description of Weapon 2'],
            (object) ['id' => 3, 'name' => 'OTS-03', 'description' => 'Description of Weapon 2'],
            (object) ['id' => 4, 'name' => 'P12', 'description' => 'Description of Weapon 2'],
            (object) ['id' => 5, 'name' => 'FMG-9', 'description' => 'Description of Weapon 2'],
            (object) ['id' => 6, 'name' => '9X19VSN	', 'description' => 'Description of Weapon 2'],
            (object) ['id' => 7, 'name' => 'UMP45', 'description' => 'Description of Weapon 2'],
            (object) ['id' => 8, 'name' => 'MP7', 'description' => 'Description of Weapon 2'],
        ];
        $maps = [
            (object) ['id' => 1, 'name' => 'Club House', 'description' => 'This map depicts an assault on a biker gang clubhouse. Featuring a full bar, gaming tables and leather furniture, this mixed interior/exterior layout offers a host of interesting tactical possibilities for both attacker and defender.'],
            (object) ['id' => 2, 'name' => 'Coastline', 'description' => 'Team Rainbow has been called to safeguard the seashore of Ibiza, Spain. Stationed on Ibiza’s rocky shore, course through Balearic ruins and navigate booming bars to neutralize the threat. Get ready for a surround flow of combat laced with chaotic rushes as you explore a paradise gone wrong.'],
            (object) ['id' => 3, 'name' => 'Border', 'description' => 'Team Rainbow has been called in to assist the local law enforcement and regain control of the border. A mix of old and new buildings with open air pathways make this the most destructible and open planned map to date'],
        ];
        $playerStats = [
            (object) ['id' => 1, 'name' => 'Kenji', 'stat' => 'Top Player Stats'],
            (object) ['id' => 2, 'name' => 'Onixd502', 'stat' => 'Top Player Stats']
        ];
        $tournaments = [
            (object) ['id' => 1, 'name' => 'Bravo Tournament', 'description' => 'Bravo Tournament'],
            (object) ['id' => 2, 'name' => 'Charlie Tournament', 'description' => 'Charlie Tournament'],
        ];

        // Send data to the view
        return view('index', compact('operators', 'weapons', 'maps', 'playerStats', 'tournaments'));
    }
}
