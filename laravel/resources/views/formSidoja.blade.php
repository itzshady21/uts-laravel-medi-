@extends('template.header')

@section('content')
<div class="card mt-4">
    <div class="card-header">
        <h4>Input Data</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('simpanSidoja') }}">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="">-Pilih</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="form-group">
                <label for="gol_darah">Gol Darah</label>
                <select class="form-control" id="gol_darah" name="gol_darah">
                    <option value="">-Pilih</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
            </div>
            <div class="form-group">
                <label for="berat_badan">Berat Badan</label>
                <input type="text" class="form-control" id="berat_badan" name="berat_badan">
            </div>
            <div class="form-group">
                <label for="tekanan_darah">Tekanan Darah</label>
                <input type="text" class="form-control" id="tekanan_darah" name="tekanan_darah">
            </div>
            <div class="form-group">
                <label for="kadar_hb">Kadar Hb</label>
                <input type="text" class="form-control" id="kadar_hb" name="kadar_hb">
            </div>
            <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <select type="number" class="form-control" id="jumlah" name="jumlah" required>
                    <option value="">-Pilih</option>
                    <option value="1">1 Kantong</option>
                    <option value="2">2 Kantong</option>
                    <option value="3">3 Kantong</option>
                    </select>
        </div>
            <button type="submit" class="btn btn-primary mt-3">Kirim</button>

    </form>
</div>
@endsection
