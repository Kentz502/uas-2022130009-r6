<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $operators = Operator::paginate(20);
        return view('operator.index', compact('operators'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('operator.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'primary_type' => 'required|string|in:Defender,Attacker',
            'primary_weapon' => 'required|string|max:50',
            'secondary_weapon' => 'required|string|max:50',
            'ability' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $data = $request->except(['photo']);

        Operator::create($data);

        return redirect()->route('operators.index')->with('success', 'Operator created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Operator $operator)
    {
        return view('operator.show', compact('operator'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Operator $operator)
    {
        return view('operator.edit', compact('operator'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Operator $operator)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'primary_type' => 'required|string|in:Defender,Attacker',
            'primary_weapon' => 'required|string|max:50',
            'secondary_weapon' => 'required|string|max:50',
            'ability' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $operator->update($request->except(['_token', '_method']));

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->hashName();
            $filePath = $file->storeAs('operator', $filename);
            $operator->update(['photo' => $filePath]);
        }
        return redirect()->route('operators.index')->with('success', 'Operator updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Operator $operator)
    {
        $operator->delete();
        return redirect()->route('operators.index')->with('success', 'Operator deleted successfully!');
    }
}
