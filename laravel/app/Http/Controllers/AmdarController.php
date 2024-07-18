<?php

namespace App\Http\Controllers;

use App\Models\Amdar;
use Illuminate\Http\Request;
use App\Models\StokDarah; 

class AmdarController extends Controller
{
    public function create()
    {
        return view('formAmbilDarah');
    }

    public function store(Request $request)
{
    $request->validate([
        'gol_darah' => 'required|string',
        'jumlah' => 'required|integer',
        'keterangan' => 'nullable|string',
    ]);

    // Kurangi stok darah
    $stok = StokDarah::where('gol_darah', $request->gol_darah)->first();
    if ($stok && $stok->jumlah >= $request->jumlah) {
        $stok->jumlah -= $request->jumlah; // Kurangi jumlah darah
        $stok->save();

        Amdar::create($request->all());

        $message = 'Selamat, transaksi sukses';

    } else {
        $message = 'Maaf, transaksi gagal karena tidak cukup/tidak tersedia';
    }

    return redirect()->route('formAmbilDarah')->with('message', $message);
}
   
}
