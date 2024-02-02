@extends('layouts.app')

@section('title', 'Hasil Index Page')
@section('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
@endsection

@section('content')
<div class="content">
    <div> @csrf
        <div> <img src="images/professionals.jpg" alt=""> </div>
        <div id="services">
                <div class="row">
                    <h3 class="first">Perhitungan Klasifikasi Anak Berkebutuhan Khusus KNN</h3>
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle">
                                @csrf
                                <thead class="table-dark">
                                    <tr>
                                        <th>Data Train Ke-</th>
                                        <th>Hasil</th>
                                        <th> Rank</th>
                                        <th> Class</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($distances as $index => $result)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $result }}</td>
                                        <td>{{ isset($rank[$index]) ? $rank[$index] : '-' }}</td>
                                        @if ( $loop->iteration >= 1 && $loop->iteration <= 170)
                                            <td>Autis</td>
                                        @elseif ( $loop->iteration >= 171 &&  $loop->iteration <= 340)
                                            <td>Hyperaktif</td>
                                        @elseif ( $loop->iteration >= 340 && $loop->iteration <= 500)
                                            <td>Gifted</td>
                                        @endif
                               
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h3 class="first">Nilai Terdekat dengan K = 5</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle" >
                                <thead class="table-dark">
                                    <th>Data Ke</th>
                                    <th>Hasil KNN</th>
                                    <th>Rank</th>
                                    <th> Class</th>
                                </thead>
                                <tbody>
                                @foreach ($distances as $index => $result)
                                    <tr>
                                
                                        @if (isset($rank[$index]) && $rank[$index] >= 1 && $rank[$index] <= 5)
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $result}}</td>

                                            <td>{{ isset($rank[$index]) ? $rank[$index] : '-' }}</td>
                                            <td>
                                                @if ($rank[$index] >= 1 && $rank[$index] <= 170)
                                                    Autis
                                                @elseif ($rank[$index] >= 171 && $rank[$index] <= 340)
                                                    Hyperaktif
                                                @elseif ($rank[$index] >= 341 && $rank[$index] <= 500)
                                                    Gifted
                                                
                                                @endif
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                                
                            </table>
                            <h2 style="color: black;">Prediksi: Anak {{ $mostFrequentClass }}</h2>
                            @php
                                $valuee = 0; // Initialize the variable to store the sum
                            @endphp

                            @foreach ($selectedCheckboxes as $value)
                                @php
                                    $valuee += $value; // Accumulate the sum
                                @endphp
                            @endforeach
                            <br>
                            <h2 style="color: black;">Certainty Factor:</h2>
                            <h3 style="color: black;">Total Bobot: {{ $valuee }}</h3>

                            @if ($valuee < 1.5)
                                <h3 style="color: black;">Prediksi: Anak Tidak  {{ $mostFrequentClass }} </h3>
                            @elseif ($valuee > 1.5)
                                <h3 style="color: black;">Prediksi: Anak   {{ $mostFrequentClass }} </h3>
                            @endif

                        </div>
                    </div>
                </div>
        </div>

    </div>
</div>
@include('includes.footer')
@endsection
