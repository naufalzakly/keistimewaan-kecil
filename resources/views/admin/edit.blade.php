@extends('admin.layouts.app')

@section('title', 'Edit Gejala')
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
                <div>
                    <form method="POST" action="{{ route('admin.update', ['id' => $gejala->id]) }}">
                        @csrf
                        @method('PUT') <!-- Use PUT method for updates -->

                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" id="nama" name="name" class="form-control" value="{{ $gejala->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="bobot">Bobot:</label>
                            <input type="number" id="bobot" name="bobot" class="form-control" step="0.01" value="{{ $gejala->bobot }}" required>
                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori:</label>
                            <input type="text" id="kategori" name="categori" class="form-control" value="{{ $gejala->categori }}" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@include('admin.includes.footer')
@endsection
