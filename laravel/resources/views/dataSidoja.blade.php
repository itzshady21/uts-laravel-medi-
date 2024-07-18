@extends('template.header')
@section('content')

<div class="card mt-4">
    <div class="card-header">
        <h4>Data Pendonor</h4>
    </div>

<table class="table table-bordered table-hovered">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Jenis Kelamin</td>
        <td>Tanggal Lahir</td>
        <td>Alamat</td>
        <td>Gol Darah</td>
        <td>Berat Badan</td>
        <td>Tekanan Darah</td>
        <td>Kadar Hb</td>
        <td>Jumlah</td>

    </tr>
    @foreach($data_sidoja AS $urai)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $urai->nama }}</td>
        <td>{{ $urai->jenis_kelamin }}</td>
        <td>{{ $urai->tanggal_lahir }}</td>
        <td>{{ $urai->alamat }}</td>
        <td>{{ $urai->gol_darah }}</td>
        <td>{{ $urai->berat_badan }}</td>
        <td>{{ $urai->tekanan_darah }}</td>
        <td>{{ $urai->kadar_hb }}</td>
        <td>{{ $urai->jumlah }}</td>
        <td>
            <a href="{{ route('editData', $urai->id) }}" ><button class="btn btn-primary btn-sm">Edit</button></a>
            <form action="{{ route('hapusData', $urai->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('Delete')
              <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini')"
              class="btn btn-danger btn-sm">Hapus</button>  

            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection