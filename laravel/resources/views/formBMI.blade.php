@extends('template.header')

@section('content')
<div class="card mt-4">
    <div class="card-header">
        <h4>Kalkulator BMI</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('bmi.calculate') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="weight">Berat (kg)</label>
                <input type="text" class="form-control" id="weight" name="weight" required>
                @error('weight')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="height">Tinggi (cm)</label>
                <input type="text" class="form-control" id="height" name="height" required>
                @error('height')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-3">Hitung BMI</button>
        </form>

        @if(isset($bmi))
            <h4 class="mt-4">BMI Anda: {{ number_format($bmi, 2) }}</h4>
            <p>
                @if($bmi < 18.5)
                    Berat badan Anda kurang.
                @elseif($bmi >= 18.5 && $bmi < 24.9)
                    Berat badan Anda ideal.
                @elseif($bmi >= 25 && $bmi < 29.9)
                    Berat badan Anda kelebihan berat badan.
                @else
                    Anda mengalami obesitas.
                @endif
            </p>
        @endif
    </div>
</div>
@endsection
