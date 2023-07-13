@extends('layouts.app')

@section('title', 'ABK Index Page')
@section('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
@endsection

@section('content')
<div class="content">
    <div>
        <div> <img src="images/professionals.jpg" alt=""> </div>
        <div id="services">

            <!-- <div > <h3 class="first">Gejala dan Kategori Anak Berkebutuhan Khusus</h3>
                <table id="exampleTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gejala</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="section">
                        @foreach ($abk as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td class="d-flex">
                                    <button class="btn btn-primary me-3">Tambah</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> -->

            <div > <h3 class="first">Perhitungan Klasifikasi Anak Berkebutuhan Khusus KNN</h3>
                <table id="exampleTable2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gejala</th>
                            <th>Nilai Bobot</th>
                            <th>Total Bobot</th>
                            <th>Hasil</th>
                        </tr>
                    </thead>
                    @if ($abk->isEmpty())
                    <tbody class="section"></tbody>
                    @else
                    <tbody class="section">
                        @foreach ($abk as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->bobot }}</td>
                            <td>2</td>
                            <td>4</td>
                        </tr>
                    @endforeach
                    </tbody>
                    @endif

                </table>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#exampleTable').DataTable();
        });
        $(document).ready(function() {
            $('#exampleTable2').DataTable();
        });
    </script>
@endsection


