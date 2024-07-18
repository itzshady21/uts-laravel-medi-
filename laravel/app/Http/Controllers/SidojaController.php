<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SidojaModel;
use App\Models\StokDarah; 

class SidojaController extends Controller
{
    public function formSidoja(){
        $paket['judul'] = "Input Data";
        return view("formSidoja",$paket);                
    }
    public function dataSidoja(){
        $paket['judul'] = "Lihat Data";
        $paket['data_sidoja'] = SidojaModel::All();//SELECT * FROM tbl_sidoja
        // dd($paket['data_sidoja']);
        return view("dataSidoja",$paket);                
    }
    public function simpanSidoja(Request $request){
        // dd($request);
        $data = new SidojaModel;
        $data->nama = $request->nama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->alamat = $request->alamat;
        $data->gol_darah = $request->gol_darah;
        $data->berat_badan = $request->berat_badan;
        $data->tekanan_darah = $request->tekanan_darah;
        $data->kadar_hb = $request->kadar_hb;
        $data->jumlah = $request->jumlah;
        $data->save();

        $stok = StokDarah::where('gol_darah', $request->gol_darah)->first();
        if ($stok) {
            $stok->jumlah += $request->jumlah; // Tambah jumlah darah
            $stok->save();
        } else {
            StokDarah::create([
                'gol_darah' => $request->gol_darah,
                'jumlah' => $request->jumlah,
            ]);
        }
    

        return redirect()->route('dataSidoja');
    }
    public function editData($id){
        $data['judul'] = "Edit Data";
        $data = SidojaModel::find($id);
        return view('formEditData', compact('data'));
    }
    public function updateData(Request $request, $id){
        $data = SidojaModel::find($id);
        $data->nama = $request->nama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->alamat = $request->alamat;
        $data->gol_darah = $request->gol_darah;
        $data->berat_badan = $request->berat_badan;
        $data->tekanan_darah = $request->tekanan_darah;
        $data->kadar_hb = $request->kadar_hb;
        $data->jumlah = $request->jumlah;
        $data->save();
        return redirect()->route('dataSidoja');
    }
    public function hapusData($id){
        $data = SidojaModel::find($id);
        if ($data) {
            $data->delete();
        }
        return redirect()->route('dataSidoja');
    }
    public function formStokDarah()
{
    $stokDarah = StokDarah::all();

    return view('formStokDarah', compact('stokDarah'));
}
    public function Sidoja()
{
    $countAPlus = StokDarah::where('gol_darah', 'A+')->sum('jumlah');
    $countAMinus = StokDarah::where('gol_darah', 'A-')->sum('jumlah');
    $countBPlus = StokDarah::where('gol_darah', 'B+')->sum('jumlah');
    $countBMinus = StokDarah::where('gol_darah', 'B-')->sum('jumlah');
    $countOPlus = StokDarah::where('gol_darah', 'O+')->sum('jumlah');
    $countOMinus = StokDarah::where('gol_darah', 'O-')->sum('jumlah');
    $countABPlus = StokDarah::where('gol_darah', 'AB+')->sum('jumlah');
    $countABMinus = StokDarah::where('gol_darah', 'AB-')->sum('jumlah');

    return view('Sidoja', compact('countAPlus', 'countAMinus', 'countBPlus', 'countBMinus', 'countOPlus', 'countOMinus', 'countABPlus', 'countABMinus'));
}

    public function dashboard() {
        $stokDarah = StokDarah::all();
        $golonganDarah = [];
        $jumlah = [];
    
        foreach ($stokDarah as $stok) {
            $golonganDarah[] = $stok->gol_darah;
            $jumlah[] = $stok->jumlah;
        }
    
        return view('dashboard', compact('golonganDarah', 'jumlah'));
    }
    
    
    
}
