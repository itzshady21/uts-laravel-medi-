@extends('template.header')

@section('content')
<div class="container">
    <h2 class="mt-4 mb-4">Stok Darah</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Golongan Darah</th>
                <th scope="col">Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>A+</td>
                <td>{{ $stokDarah->where('gol_darah', 'A+')->sum('jumlah') }}</td>
            </tr>
            <tr>
                <td>A-</td>
                <td>{{ $stokDarah->where('gol_darah', 'A-')->sum('jumlah') }}</td>
            </tr>
            <tr>
                <td>B+</td>
                <td>{{ $stokDarah->where('gol_darah', 'B+')->sum('jumlah') }}</td>
            </tr>
            <tr>
                <td>B-</td>
                <td>{{ $stokDarah->where('gol_darah', 'B-')->sum('jumlah') }}</td>
            </tr>
            <tr>
                <td>O+</td>
                <td>{{ $stokDarah->where('gol_darah', 'O+')->sum('jumlah') }}</td>
            </tr>
            <tr>
                <td>O-</td>
                <td>{{ $stokDarah->where('gol_darah', 'O-')->sum('jumlah') }}</td>
            </tr>
            <tr>
                <td>AB+</td>
                <td>{{ $stokDarah->where('gol_darah', 'AB+')->sum('jumlah') }}</td>
            </tr>
            <tr>
                <td>AB-</td>
                <td>{{ $stokDarah->where('gol_darah', 'AB-')->sum('jumlah') }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
