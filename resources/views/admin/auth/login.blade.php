@extends('layouts.app')

@section('title', 'Login Data Index Page')
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
            <div > 
                
                <form method="POST" action="{{ route('admin.dashboard') }}">
                    @csrf

                    <label for="email" for="exampleDropdownFormEmail2">Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="email@example.com" required>

                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                            <label class="form-check-label" for="dropdownCheck2">
                                Remember me
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                            
            </div>
            
        </div>

    </div>
</div>
@include('admin.includes.footer')
@endsection
