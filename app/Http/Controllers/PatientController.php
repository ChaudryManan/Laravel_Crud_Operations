<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    // Show all patients
    public function index()
    {
        $patients = Patient::all();
        return view('patients.list', compact('patients'));
    }

    // Show add form
    public function create()
    {
        return view('patients.create');
    }

    // Store data in database
    public function store(Request $request)
    {
        Patient::create([
            'name' => $request->name,
            'age' => $request->age,
            'condition' => $request->condition
        ]);

        return redirect()->route('patients.index');
    }

    // Show edit form
    public function edit(string $id)
{
    $patient = Patient::findOrFail($id);
    return view('patients.create', compact('patient'));
}

    // Update data
    public function update(Request $request, string $id)
    {
        $patient = Patient::findOrFail($id);

        $patient->update([
            'name' => $request->name,
            'age' => $request->age,
            'condition' => $request->condition
        ]);

        return redirect()->route('patients.index');
    }

    // Delete patient
    public function destroy(string $id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();

        return redirect()->route('patients.index');
    }
}