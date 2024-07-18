<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SidojaModel;
use App\Models\Amdar;

class LaporanController extends Controller
{
    public function index()
    {
        return view('formLaporan');
    }

    public function getLaporan(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $startDate = $request->start_date;
        $endDate = $request->end_date;

        $dataDonorDarah = SidojaModel::whereBetween('created_at', [$startDate, $endDate])->get();
        $dataAmbilDarah = Amdar::whereBetween('created_at', [$startDate, $endDate])->get();

        return view('formLaporan', compact('dataDonorDarah', 'dataAmbilDarah'));
    }
}
