@extends('layouts.app')

@section('title', 'ABK Index Page')
@section('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
@endsection

@section('content')
<div class="content">
    <div>
        <div> <img src="images/baby.jpg" alt=""> </div>
        <div id="services">

            <div > <h3 class="first">Gejala dan Kategori Anak Berkebutuhan Khusus</h3>
                <form method="GET" action="{{ route('abk.index') }}" >
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
                                        
                                        <input type="checkbox" name="gejala[]" value="{{$item->id}}">
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
</div>
@include('includes.footer')
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#exampleTable').DataTable();
        });
    </script>
@endsection
 
