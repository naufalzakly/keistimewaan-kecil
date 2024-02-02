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
                <form method="POST" action="{{ route('abk.index') }}">
                @csrf
                    <table id="exampleTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gejala</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="section">
                            @foreach ($gejala as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td class="d-flex">
                                        <input type="checkbox" name="gejala[{{ $item->id }}]" value="{{ $item->bobot }}">
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
            const x_autis = [];
            const y_autis = [];
            const x_hiperaktif = [];
            const y_hiperaktif = [];
            const x_gifted = [];
            const y_gifted = [];
            gejalaData.forEach(item => {
                if (item.categori === 'Autis') {
                    x_autis.push(item.id);
                    y_autis.push(item.bobot);
                } else if (item.categori === 'Hiperaktif' ) {
                    x_hiperaktif.push(item.id);
                    y_hiperaktif.push(item.bobot);

                } else if (item.categori === 'Gifted') {
                    x_gifted.push(item.id);
                    y_gifted.push(item.bobot);
                }
            });
            const traces_autis = {
                x: x_autis,
                y: y_autis,
                mode: 'lines+markers',
                type: 'scatter',
                name: 'Autis',
            };

            const traces_hiperaktif = {
                x: x_hiperaktif,
                y: y_hiperaktif,
                mode: 'lines+markers',
                type: 'scatter',
                name: 'Hiperaktif',
            };

            const traces_gifted = {
                x: x_gifted,
                y: y_gifted,
                mode: 'lines+markers',
                type: 'scatter',
                name: 'Gifted',
            };
            const data = [traces_autis, traces_hiperaktif, traces_gifted];

            const layout = {
                title: 'Scatterplot Matrix',
                showlegend: true,
                xaxis: {title: 'Data'},
                yaxis: {title: 'Bobot'},
                height: 700,
                width: 1000,
                legend: {
                    y: 0.5,
                    yref: 'paper',
                    font: {
                        family: 'Arial, sans-serif',
                        size: 20,
                        color: 'grey',
                    }
                },
            };

            Plotly.newPlot('scatterplotMatrix', data, layout);
        });

    </script>

@endsection
