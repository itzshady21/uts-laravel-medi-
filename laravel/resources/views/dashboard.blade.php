@extends('template.header')
@section('content')

<div class="mt-4">
    <div class="card-header">
        <h4>Dashboard</h4>
    </div>

    <div class="mt-5"></div>

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4" style="max-width: 18rem;">
                                <div class="card-header">Donor Darah</div>
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <p class="card-text">Klik di sini untuk memasukkan data donor darah.</p>
                                    <a class="small text-white stretched-link" href="{{ route('formSidoja') }}">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4"  style="max-width: 18rem;">
                                <div class="card-header">Data Pendonor</div>
                                <div class="card-body">
                                <h5 class="card-title"></h5>
                                    <p class="card-text">Klik di sini untuk melihat dan mengedit data pendonor.</p>
                                    <a class="small text-white stretched-link" href="{{ route('dataSidoja') }}">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4" style="max-width: 18rem;">
                                <div class="card-header">Stok Darah</div>
                                <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text">Klik di sini untuk melihat stok darah yang tersedia.</p>
                                        <a class="small text-white stretched-link" href="{{ route('formStokDarah') }}">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4" style="max-width: 18rem;">
                                <div class="card-header">Cek BMI</div>
                                <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text">Klik di sini untuk memeriksa BMI.</p>
                                        <a class="small text-white stretched-link" href="{{ route('bmi.index') }}">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Stok Darah</h5>
        </div>
        <div class="card-body text-center">
            <canvas id="pieChart" style="max-width: 400px; margin: auto;"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var golonganDarah = @json($golonganDarah);
    var jumlah = @json($jumlah);

    var ctx = document.getElementById('pieChart').getContext('2d');
    var pieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: golonganDarah,
            datasets: [{
                data: jumlah,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(255, 159, 64, 0.8)',
                    'rgba(100, 255, 100, 0.8)',
                    'rgba(200, 100, 255, 0.8)'
                ],
                borderColor: 'white',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom'
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw;
                        }
                    }
                }
            }
        }
    });
</script>


@endsection
