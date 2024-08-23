<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\User;

class ExperienceController extends Controller
    {
        public function index()
        {
            $experiences = Experience::with('user')->get();
            return view('experiences.index', compact('experiences'));
        }
        public function create()
    {
        $users = User::all(); // Ambil semua user
        return view('experiences.create', compact('users'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'company' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        Experience::create($request->all());

        return redirect()->route('experiences.index');
    }
    public function show($id)
    {

        $experience = Experience::findOrFail($id);
        return view('experiences.show', compact('experience'));    }

        public function edit($id)
        {
            $experience = Experience::findOrFail($id);
            return view('experiences.edit', compact('experience'));
        }
        
        public function update(Request $request, $id)
        {
            $request->validate([
                'company' => 'required|string|max:255',
                'position' => 'required|string|max:255',
                'description' => 'nullable|string',
                'start_date' => 'required|date',
                'end_date' => 'nullable|date',
            ]);
        
            $experience = Experience::findOrFail($id);
            $experience->update($request->all());
        
            return redirect()->route('experiences.index')->with('success', 'Experience updated successfully');
        }
        
    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('experiences.index');
    }
    }
