@extends('template.header')
@section('content')

<h3>Stok Darah</h3>
<table class="table table-bordered">
    <tr>
        <th>Golongan Darah</th>
        <th>Jumlah</th>
    </tr>
    <tr>
        <td>A+</td>
        <td>{{ $countAPlus }}</td>
    </tr>
    <tr>
        <td>A-</td>
        <td>{{ $countAMinus }}</td>
    </tr>
    <tr>
        <td>B+</td>
        <td>{{ $countBPlus }}</td>
    </tr>
    <tr>
        <td>B-</td>
        <td>{{ $countBMinus }}</td>
    </tr>
    <tr>
        <td>O+</td>
        <td>{{ $countOPlus }}</td>
    </tr>
    <tr>
        <td>O-</td>
        <td>{{ $countOMinus }}</td>
    </tr>
    <tr>
        <td>AB+</td>
        <td>{{ $countABPlus }}</td>
    </tr>
    <tr>
        <td>AB-</td>
        <td>{{ $countABMinus }}</td>
    </tr>
</table>

<!-- Diagram Bar -->
<div style="display: flex; justify-content: space-around;">
    <div style="width: 45%;">
        <canvas id="barChart"></canvas>
    </div>
    <div style="width: 25%;">
        <canvas id="pieChart"></canvas>
    </div>
</div>

<script>
    // Data untuk diagram
    var golonganDarah = ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'];
    var jumlahDonor = [
        {{ $countAPlus }},
        {{ $countAMinus }},
        {{ $countBPlus }},
        {{ $countBMinus }},
        {{ $countOPlus }},
        {{ $countOMinus }},
        {{ $countABPlus }},
        {{ $countABMinus }}
    ];

    // Diagram Bar
    var ctxBar = document.getElementById('barChart').getContext('2d');
    var barChart = new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: golonganDarah,
            datasets: [{
                label: 'Jumlah Donor',
                data: jumlahDonor,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)',
                    'rgba(255, 159, 64, 0.6)',
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)'
                ],
                hoverBackgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    // Diagram Pie
    var ctxPie = document.getElementById('pieChart').getContext('2d');
    var pieChart = new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: golonganDarah,
            datasets: [{
                label: 'Jumlah Donor',
                data: jumlahDonor,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)',
                    'rgba(255, 159, 64, 0.6)',
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)'
                ],
                hoverBackgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
                ]
            }]
        }
    });
</script>

@endsection
