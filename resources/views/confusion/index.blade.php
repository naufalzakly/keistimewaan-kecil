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
            <h3 class="first"style="color: black;margin: 0px 500px;">Confsuion Matrix</h3>
            <br><br><br>
            <a class="btn btn-primary btn-sm" href="{{ route('rekap.index') }}" role="button">Rekaputalasi</a>
            <a class="btn btn-primary btn-sm" href="{{ route('analisa.index') }}" role="button">Data Training</a>
            <div class="table-responsive">
                <table class="table table-bordered align-middle" >
                    <thead class="table-dark">
                        <tr style="text-align: center;">
                            <th>K-fold</th>
                            <th>TP</th>
                            <th> TN</th>
                            <th>FP</th>
                            <th>FN</th>
                            <th>Akurasi</th>
                            <th>Total Akurasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="text-align: center;">
                            <td>1</td>
                            <td>97</td>
                            <td>0</td>
                            <td>0</td>
                            <td>3</td>
                            <td>97%</td>
                            <td rowspan="5">98%</td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>2</td>
                            <td>98</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>98%</td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>3</td>
                            <td>98</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>98%</td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>4</td>
                            <td>99</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>99%</td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>5</td>
                            <td>100</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>100%</td>
                        </tr>
                    </tbody>
                                
                </table>
            </div>
        </div>

    </div>
</div>
@include('includes.footer')
@endsection
