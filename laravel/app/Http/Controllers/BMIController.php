<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMIController extends Controller
{
    public function index()
    {
        return view('formBMI');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
        ]);

        $weight = $request->input('weight');
        $height = $request->input('height') / 100; // Konversi cm ke meter

        $bmi = $weight / ($height * $height);

        return view('formBMI', ['bmi' => $bmi]);
    }
}
