<?php

namespace App\Http\Controllers;

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
            (object) ['id' => 1, 'name' => 'Map 1', 'description' => 'Description of Map 1'],
            (object) ['id' => 2, 'name' => 'Map 2', 'description' => 'Description of Map 2']
        ];
        $playerStats = [
            (object) ['id' => 1, 'name' => 'Player 1', 'stat' => 'Top Player Stats'],
            (object) ['id' => 2, 'name' => 'Player 2', 'stat' => 'Top Player Stats']
        ];

        // Send data to the view
        return view('index', compact('operators', 'weapons', 'maps', 'playerStats'));
    }
}
