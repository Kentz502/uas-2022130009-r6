<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maps = Map::paginate(20);
        return view('map.index', compact('maps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('map.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'location' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $data = $request->except(['photo']);

        Map::create($data);

        return redirect()->route('maps.index')->with('success', 'Map created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Map $map)
    {
        return view('map.show', compact('map'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Map $map)
    {
        return view('map.edit', compact('map'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Map $map)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'location' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $map->update($request->except(['_token', '_method']));

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->hashName();
            $filePath = $file->storeAs('weapon', $filename);
            $map->update(['photo' => $filePath]);
        }
        return redirect()->route('maps.index')->with('success', 'Map updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Map $map)
    {
        $map->delete();
        return redirect()->route('maps.index')->with('success', 'Map deleted successfully!');
    }
}
