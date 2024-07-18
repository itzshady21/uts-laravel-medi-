@extends('template.header')

@section('content')

@if(session('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
@endif


<div class="card mt-4">
    <div class="card-header">
    <h2>Form Ambil Darah</h2>
    <form action="{{ route('amdar.store') }}" method="POST">
        @csrf
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
            <label for="jumlah">Jumlah</label>
            <select type="number" class="form-control" id="jumlah" name="jumlah" required>
                    <option value="">-Pilih</option>
                    <option value="1">1 Kantong</option>
                    <option value="2">2 Kantong</option>
                    <option value="3">3 Kantong</option>
                    </select>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection
