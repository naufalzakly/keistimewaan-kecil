@extends('layouts.app')

@section('title', 'ABK Index Page')
@section('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
@endsection

@section('content')
<div class="content">
    <div>
        <div> <img src="images/baby.jpg" alt=""> </div>
        <div id="services">
            <div> <h3 class="first">Gejala dan Kategori Anak Berkebutuhan Khusus</h3>
                <form method="GET" action="{{ route('abk.index') }}">
                    <table id="exampleTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gejala</th>
                                <th>Bobot</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="section">
                            @foreach ($gejala as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->bobot }}</td>
                                    <td class="d-flex">
                                        <input type="checkbox" name="gejala[]" value="{{ $item->id }}">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button class="d-grid gap-2 col-3 mx-auto btn btn-primary me-md-2" type="submit" value="Submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="scatterplotMatrix" style="width: 1000px; height: 700px;"></div>
    </div>
</div>
@include('includes.footer')
@endsection

@section('js')
    <div id="gejalaData" data-json="{{ $gejala->toJson() }}" style="display: none;"></div>

    <script>
        $(document).ready(function() {
            $('#exampleTable').DataTable();
        });

        document.addEventListener('DOMContentLoaded', function() {
            const gejalaData = JSON.parse(document.getElementById('gejalaData').getAttribute('data-json'));

            const traces_autis = [];
            const traces_hiperaktif = [];
            const traces_gifted = [];
            const autisName = 'Autis';

            gejalaData.forEach(item => {
                
                if (item.categori === 'Autis') {
                    traces_autis.push({
                        x: [item.id], // Text label for x-axis
                        y: [item.bobot], // Numeric value for y-axis
                        mode: 'markers',
                        type: 'scatter',
                        name: autisName
                        
                    });
                } else if (item.categori === 'Hiperaktif') {
                    traces_hiperaktif.push({
                        x: [item.id], // Text label for x-axis
                        y: [item.bobot], // Numeric value for y-axis
                        mode: 'markers',
                        type: 'scatter',
                        name: "Hiperaktif"
                    });
                } else if (item.categori === 'Gifted') {
                    traces_gifted.push({
                        x: [item.id], // Text label for x-axis
                        y: [item.bobot], // Numeric value for y-axis
                        mode: 'markers',
                        type: 'scatter',
                        name: "Gifted"
                    });
                }
            });

            const data = [...traces_autis, ...traces_hiperaktif, ...traces_gifted];

            const layout = {
                title: 'Scatterplot Matrix',
                showlegend: true,
                height: 700,
                width: 1000,
            };

            Plotly.newPlot('scatterplotMatrix', data, layout);
        });

    </script>

@endsection
