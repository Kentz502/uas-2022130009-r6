<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use Illuminate\Http\Request;

class WeaponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $weapon = Weapon::paginate(20);
         return view('weapon.index', compact('weapon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('weapon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validated([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:50',
            'damage' => 'required|integer|min:0',
            'fire_rate' => 'required|integer|min:0',
            'photo' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $data = $request->except(['photo']);

        Weapon::create($data);

        return redirect()->route('weapon.index')->width('success', 'Weapon created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Weapon $weapon)
    {
        return view('weapon.show', compact('weapon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('weapon.edit', compact('weapon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Weapon $weapon)
    {
        $data = $request->except(['_token', '_method']);


        $weapon->update($data);

        $request->validated([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:50',
            'damage' => 'required|integer|min:0',
            'fire_rate' => 'required|integer|min:0',
            'photo' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $weapon = Weapon::where('id', $weapon->id);
        $weapon->update($request->except(['_token', '_method']));

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->hashName();
            $filePath = $file->storeAs('weapon', $filename);
            $weapon->update(['photo' => $filePath]);
        }
        return redirect()->route('weapon.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Weapon $weapon)
    {
        $weapon->delete();
        return redirect()->route('weapon.index')->width('success', 'Weapon deleted successfully!');
    }
}