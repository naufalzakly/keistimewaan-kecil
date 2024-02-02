@extends('admin.layouts.app')

@section('title', 'Login Data Index Page')
@section('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
@endsection
@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif
@section('content')
<div class="analisa">
    <div>
        <div>
            <br><br><br>
            <div >
                <a class="btn btn-primary btn-sm" href="{{ route('admin.create') }}" role="button">Tambah</a>

                <table class="table table-bordered align-middle">
                    @csrf
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Gejala</th>
                            <th>Bobot</th>
                            <th>Class</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($gejala as $item)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{$item->name }}</td>
                        <td>{{$item->bobot }}</td>
                        <td>{{$item->categori }}</td>
                        <td>
                            <a href="{{ route('admin.edit', $item->id) }}"class="btn btn-warning">Edit</a>
                            
                            <form action="{{ route('admin.destroy', ['id' => $item->id]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                            
            </div>
            
        </div>

    </div>
</div>
@include('admin.includes.footer')
@endsection
