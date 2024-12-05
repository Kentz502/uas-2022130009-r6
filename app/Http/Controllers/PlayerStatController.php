<?php

namespace App\Http\Controllers;

use App\Models\PlayerStat;
use Illuminate\Http\Request;

class PlayerStatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PlayerStat $playerstat)
    {
        $playerstats = PlayerStat::paginate(20);
        return view('playerstat.index', compact('playerstats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('playerstat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'kills' => 'required|integer|min:0',
            'deaths' => 'required|integer|min:0',
            'assists' => 'required|integer|min:0',
            'rank' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $data = $request->except(['photo']);

        PlayerStat::create($data);

        return redirect()->route('playerstats.index')->with('success', 'PlayerStat created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PlayerStat $playerstat)
    {
        return view("playerstat.show", compact('playerstat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PlayerStat $playerstat)
    {
        return view("playerstat.edit", compact('playerstat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PlayerStat $playerstat)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'kills' => 'required|integer|min:0',
            'deaths' => 'required|integer|min:0',
            'assists' => 'required|integer|min:0',
            'rank' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $playerstat->update($request->except(['_token', '_method']));

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->hashName();
            $filePath = $file->storeAs('playerstat', $filename);
            $playerstat->update(['photo' => $filePath]);
        }
        return redirect()->route('playerstats.index')->with('success', 'PlayerStat updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlayerStat $playerstat)
    {
        $playerstat->delete();
        return redirect()->route('playerstats.index')->with('success', 'PlayerStat deleted successfully!');
    }
}
