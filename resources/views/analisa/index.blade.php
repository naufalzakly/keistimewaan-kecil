@extends('layouts.app')

@section('title', 'Analisa Data Index Page')
@section('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
@endsection

@section('content')
<div class="analisa">
    <div>
        <div>
            <br><br><br>
            <div > 
                <h2 style="color: black;margin: 0px 500px;">Data Training</h2>
                <a class="btn btn-primary btn-sm" href="{{ route('rekap.index') }}" role="button">Rekaputalasi</a>
                <a class="btn btn-primary btn-sm" href="{{ route('confusion.index') }}" role="button">Confusion Matrix</a>
                <br><br>
                <div class="table-responsive">
                    <table id="exampleTable" class="table table-bordered align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>KA1</th>
                                <th>KA2</th>
                                <th>KA3</th>
                                <th>KA4</th>
                                <th>KA5</th>
                                <th>KA6</th>
                                <th>KA7</th>
                                <th>KA8</th>
                                <th>KA9</th>
                                <th>KA10</th>
                                <th>KH1</th>
                                <th>KH2</th>
                                <th>KH3</th>
                                <th>KH4</th>
                                <th>KH5</th>
                                <th>KH6</th>
                                <th>KH7</th>
                                <th>KH8</th>
                                <th>KH9</th>
                                <th>KH10</th>
                                <th>KG1</th>
                                <th>KG2</th>
                                <th>KG3</th>
                                <th>KG4</th>
                                <th>KG5</th>
                                <th>KG6</th>
                                <th>KG7</th>
                                <th>KG8</th>
                                <th>KG9</th>
                                <th>KG10</th>
                            </tr>
                        </thead>
                            <tbody >
                                @foreach ($analisis as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->KA1 }}</td>
                                        <td>{{ $item->KA2 }}</td>
                                        <td>{{ $item->KA3 }}</td>
                                        <td>{{ $item->KA4 }}</td>
                                        <td>{{ $item->KA5 }}</td>
                                        <td>{{ $item->KA6 }}</td>
                                        <td>{{ $item->KA7 }}</td>
                                        <td>{{ $item->KA8 }}</td>
                                        <td>{{ $item->KA9 }}</td>
                                        <td>{{ $item->KA10 }}</td>
                                        <td>{{ $item->KH1 }}</td>
                                        <td>{{ $item->KH2 }}</td>
                                        <td>{{ $item->KH3 }}</td>
                                        <td>{{ $item->KH4 }}</td>
                                        <td>{{ $item->KH5 }}</td>
                                        <td>{{ $item->KH6 }}</td>
                                        <td>{{ $item->KH7 }}</td>
                                        <td>{{ $item->KH8 }}</td>
                                        <td>{{ $item->KH9 }}</td>
                                        <td>{{ $item->KH10 }}</td>
                                        <td>{{ $item->KH1 }}</td>
                                        <td>{{ $item->KH2 }}</td>
                                        <td>{{ $item->KH3 }}</td>
                                        <td>{{ $item->KH4 }}</td>
                                        <td>{{ $item->KH5 }}</td>
                                        <td>{{ $item->KH6 }}</td>
                                        <td>{{ $item->KH7 }}</td>
                                        <td>{{ $item->KH8 }}</td>
                                        <td>{{ $item->KH9 }}</td>
                                        <td>{{ $item->KH10 }}</td>
                                    </tr>
                                 @endforeach
                            </tbody>
                    </table>
                </div>
              
            </div>
            
        </div>

    </div>
</div>
@include('includes.footer')
@endsection
