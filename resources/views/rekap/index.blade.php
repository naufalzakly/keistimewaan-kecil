@extends('layouts.app')

@section('title', 'Confusion Matrix Index Page')
@section('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
@endsection

@section('content')
<div class="analisa">
    <div>
        <div>
        <br><br><br>
            <h3 class="first"style="color: black;margin: 0px 500px;">Rekaputalasi KNN</h3>
            <br><br><br>
            <a class="btn btn-primary btn-sm" href="{{ route('analisa.index') }}" role="button">Data Training</a>
            <a class="btn btn-primary btn-sm" href="{{ route('confusion.index') }}" role="button">Confusion Matrix</a>

            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    @csrf
                    <thead class="table-dark">
                        <tr>
                            <th>K-fold</th>
                            <th>Hasil</th>
                            <th>Keterangan</th>
                            </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="{{ asset('images/kfold1.png') }}" alt="" style="width: 100%;"></td>
                            <td rowspan="5">Menggunakan 20 Data Testing dan 20 data Training</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="{{asset('images/kfold2.png')}}"alt="" style="width: 100%;"></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="{{asset('images/kfold3.png')}}"alt="" style="width: 100%;"></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><img src="{{asset('images/kfold4.png')}}"alt="" style="width: 100%;"></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><img src="{{asset('images/kfold5.png')}}"alt="" style="width: 100%;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@include('includes.footer')
@endsection
