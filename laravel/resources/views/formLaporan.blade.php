@extends('template.header')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Laporan Donor Darah dan Ambil Darah</h2>

    <form action="{{ route('laporan.get') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="start_date">Tanggal Mulai</label>
            <input type="date" name="start_date" id="start_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="end_date">Tanggal Selesai</label>
            <input type="date" name="end_date" id="end_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Lihat Laporan</button>
    </form>

    @if(isset($dataDonorDarah) && isset($dataAmbilDarah))
        <h3 class="mt-5">Data Donor Darah</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Golongan Darah</th>
                    <th>Jumlah</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataDonorDarah as $data)
                    <tr>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->gol_darah }}</td>
                        <td>{{ $data->jumlah }}</td>
                        <td>{{ $data->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3 class="mt-5">Data Ambil Darah</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Golongan Darah</th>
                    <th>Jumlah</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataAmbilDarah as $data)
                    <tr>
                        <td>{{ $data->gol_darah }}</td>
                        <td>{{ $data->jumlah }}</td>
                        <td>{{ $data->keterangan }}</td>
                        <td>{{ $data->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
