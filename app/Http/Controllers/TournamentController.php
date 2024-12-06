<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use App\Models\Operator;
use App\Models\Map;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    // Display a listing of tournaments
    public function index()
    {
        $tournaments = Tournament::with('operator', 'map')->get();
        return view('tournament.index', compact('tournaments'));
    }

    // Show the form for creating a new tournament
    public function create()
    {
        $operators = Operator::all();
        $maps = Map::all();
        return view('tournament.create', compact('operators', 'maps'));
    }

    // Store a newly created tournament
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tournament_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'game_mode' => 'required|string|max:50',
            'status' => 'required|string|max:50',
            'prize_pool' => 'required|integer|min:0',
            'operator_id' => 'required|exists:operators,id',
            'map_id' => 'required|exists:maps,id',
        ]);

        Tournament::create($validated);
        return redirect()->route('tournaments.index')->with('success', 'Tournament created successfully!');
    }

    // Show the form for editing a specific tournament
    public function edit($id)
    {
        $tournament = Tournament::findOrFail($id);
        $operators = Operator::all();
        $maps = Map::all();
        return view('tournament.edit', compact('tournament', 'operators', 'maps'));
    }

    public function show(Tournament $tournament)
    {
        return view('tournament.show', compact('tournament'));
    }

    // Update a specific tournament
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'tournament_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'game_mode' => 'required|string|max:50',
            'status' => 'required|string|max:50',
            'prize_pool' => 'required|integer|min:0',
            'operator_id' => 'required|exists:operators,id',
            'map_id' => 'required|exists:maps,id',
        ]);

        $tournament = Tournament::findOrFail($id);
        $tournament->update($validated);
        return redirect()->route('tournaments.index')->with('success', 'Tournament updated successfully!');
    }

    // Delete a specific tournament
    public function destroy($id)
    {
        $tournament = Tournament::findOrFail($id);
        $tournament->delete();
        return redirect()->route('tournaments.index')->with('success', 'Tournament deleted successfully!');
    }
}
