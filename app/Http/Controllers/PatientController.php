<?php
namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
        public function index()
{
    $patients = Patient::paginate(10); // 10 items per page
    return view('patients.index', compact('patients'));
        return view('patients.show', ['patient' => $patient]);

    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:patients',
            'age'   => 'required|integer',
            'weight'=> 'required|numeric',
            'height'=> 'required|numeric',
        ]);

        Patient::create($request->all());
        return redirect()->route('patients.index')->with('success', 'Patient added successfully.');
    }

    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:patients,email,'.$patient->id,
            'age'   => 'required|integer',
            'weight'=> 'required|numeric',
            'height'=> 'required|numeric',
        ]);

        $patient->update($request->all());
        return redirect()->route('patients.index')->with('success', 'Patient updated successfully.');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index')->with('success', 'Patient deleted successfully.');
    }
}
