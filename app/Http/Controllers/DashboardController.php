<?php

namespace App\Http\Controllers;

use App\Models\Patient;

class DashboardController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('dashboard', compact('patients'));
    }
}
