@extends('admin.layouts.app')

@section('title', 'Home Page | Keistimewaan SiKecil')
@section('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
@endsection
@section('content')

    <div id="content">
        <div>
            <div>
                <h1>Anak Berkebutuhan Khusus</h1>
                <p>Anak Berkebutuhan Khusus adalah anak yang mengalami hambatan dalam perkembangan perilakunya. Perilaku
                    anak diantaranya komunikasi dan sosial. </p>
                <h2>Autis</h2>
                <p>Anak yang memiliki hambatan dalam perilaku serta komunikasi sejak dini . </p>
                <h2>Hiperaktif</h2>
                <p>Anak yang memiliki perilaku aktif dan tidak sabaran saat akan bermain bersama teman-teman. </p>
                <h2>Gifted</h2>
                <p>Anak yang memiliki fokus terhadap minatnya, sehingga ketika minat tersebut diganggu maka anak tersebut
                    akan memberontak. </p>

            </div>
        </div>
    </div>
@include('includes.footer')

@endsection
