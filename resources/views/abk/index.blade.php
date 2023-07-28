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
            <div > <h3 class="first">Perhitungan Klasifikasi Anak Berkebutuhan Khusus KNN</h3>
                <table id="exampleTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gejala</th>
                            <th>Nilai Bobot</th>
                            
                        </tr>
                    </thead>
                    @if ($gejala_dipilih == null)
                    <tbody class="section"></tbody>
                    @else
                    
                    <tbody class="section">
                        @if ($gejala_dipilih)
                            @foreach ($gejala_dipilih as $item)
                                
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->bobot }}</td>
                                </tr>
                            @endforeach
                        @endif
                    @endif
                    </tbody>

                </table >
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>ABK</th>
                                <th>Gejala</th>
                                <th>Nilai Pembilang</th>
                                <th>Nilai Penyebut</th>
                                <th>Total</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="10">1</td>
                                <td rowspan="10" >Autis</td>
                                <td>Kontak Mata sangat kurang</td>
                                @php
                                    $autisValue = 0;
                                @endphp

                                @foreach ($abkk as $item)
                                    @if ($item->abk->pluck('name')->implode(',') == 'Autis')
                                        @php
                                            $autisValue = $total_pembilang;
                                        @endphp
                                        @break
                                    @endif
                                @endforeach
                                    <td class="section" rowspan="10">{{ $autisValue }}</td>
                                @php
                                    $penyebut = 0;
                                    $total=0;
                                @endphp

                                @foreach ($total_penyebut as $item)
                                    @if ($item->abk->pluck('name')->implode(',') == 'Autis')
                                        @php
                                            $penyebut += $item->bobot;
                                            $total = $autisValue / $penyebut;
                                        @endphp
                                   @endif
                                @endforeach
                                <td rowspan="10" >{{ $penyebut }}</td>
                                <td rowspan="10" >{{ $total }}</td>
                                @if ($total == null )
                                    <td rowspan="10" > Anak Anda Tidak Memiliki Gejala Autis</td>
                                @elseif ($total >= 1 )
                                    <td rowspan="10" >Anak Anda Kategori Autis</td>
                                @elseif ($total < 1 )
                                    <td rowspan="10" >Anak Anda bukan Kategori Autis</td>
                                @endif
                            </tr>

                            <tr>
                                <td>Ekspresi Muka sangat kurang hidup	</td>
                            </tr>
                            <tr>
                                <td>Gerak Gerik kurang tertuju	</td>
                            </tr>
                            <tr>
                                <td>Diajak berbicara sangat kurang memperhatikan</td>
                            </tr>
                            <tr>
                                <td>Bila bisa berbicara, tidak dipakai untuk komunikasi</td>
                            </tr>
                            <tr>
                                <td>Konsentrasi kurang</td>
                            </tr>
                            <tr>
                                <td>Sangat kurang dalam menyimak</td>
                            </tr>
                            <tr>
                                <td>jarang mengikuti instruksi</td>
                            </tr>
                            <tr>
                                <td>Terdapat Gerakan yang khusus berulang ulang</td>
                            </tr>
                        </tbody>

                        <tbody>
                            <tr>
                                <td rowspan="10" >2</td>
                                <td rowspan="10">Hyperaktif</td>
                                    <td>Kontak Mata kurang	</td>
                                @php
                                    $hyperaktifValue = 0;
                                @endphp

                                @foreach ($abkk as $item)
                                    @if ($item->abk->pluck('name')->implode(',') == 'Hiperaktif')
                                        @php
                                            $hyperaktifValue = $total_pembilang;
                                        @endphp
                                        @break
                                    @endif
                                @endforeach
                                <td class="section" rowspan="10">{{ $hyperaktifValue }}</td>
                                @php
                                    $penyebut = 0;
                                    $total=0;
                                @endphp
                                @foreach ($total_penyebut as $item)
                                    @if ($item->abk->pluck('name')->implode(',') == 'Hiperaktif')
                                        @php
                                            $penyebut += $item->bobot;
                                            $total = $hyperaktifValue / $penyebut;
                                        @endphp
                                   @endif
                                @endforeach
                                <td rowspan="10" >{{ $penyebut }}</td>
                                <td rowspan="10" >{{ $total }}</td>
                                @if ($total == null )
                                    <td rowspan="10" > Anak Anda Tidak Memiliki Gejala Hiperaktif</td>
                                @elseif ($total >= 1 )
                                    <td rowspan="10" >Anak Anda Kategori Hiperaktif</td>
                                @elseif ($total < 1 )
                                    <td rowspan="10" >Anak Anda bukan Kategori Hiperaktif</td>
                                @endif
                            </tr>
                            <tr>
                                <td>Ekspresi kurang hidup</td>
                            </tr>
                            <tr>
                                <td>Gerak gerik sangat kurang tertuju	</td>
                            </tr>
                            <tr>
                                <td>Diajak berbicara kurang memperhatikan</td>
                            </tr>
                            <tr>
                                <td>Berbicara terlambat</td>
                            </tr>
                            <tr>
                                <td>Konsentrasi nya sangat kurang</td>
                            </tr>
                            <tr>
                                <td>Tidak mau diajak bermain</td>
                            </tr>
                            <tr>
                                <td>Kurang dalam menyimak</td>
                            </tr>
                            <tr>
                                <td>Sering tidak mengikuti instruksi</td>
                            </tr>
                            <tr>
                                <td>Sering bergerak seolah diatur motor bergerak</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td rowspan="10" >2</td>
                                <td rowspan="10">Gifted</td>
                                <td> Kontak Mata bagus pada satu objek</td>
                                @php
                                    $giftedValue = 0;
                                @endphp

                                @foreach ($abkk as $item)
                                    @if ($item->abk->pluck('name')->implode(',') == 'Gifted')
                                        @php
                                            $giftedValue = $total_pembilang;
                                        @endphp
                                        @break
                                    
                                    @endif
                                @endforeach
                                <td class="section" rowspan="10">{{ $giftedValue }}</td>
                                @php
                                    $penyebut = 0;
                                @endphp
                                @foreach ($total_penyebut as $item)
                                    @if ($item->abk->pluck('name')->implode(',') == 'Gifted')
                                        @php
                                            $penyebut += $item->bobot;
                                            $total = ($giftedValue != 0) ? ($giftedValue / $penyebut) : 0;
                                        @endphp
                                   @endif
                                @endforeach
                                
                                <td rowspan="10" >{{ $penyebut }}</td>
                                <td rowspan="10">{{ $total }}</td>
                                @if ($total == null )
                                    <td rowspan="10" > Anak Anda Tidak Memiliki Gejala Gifted</td>
                                @elseif ($total >= 1 )
                                    <td rowspan="10" >Anak Anda Kategori Gifted</td>
                                @elseif ($total < 1 )
                                    <td rowspan="10" >Anak Anda bukan Kategori Gifted</td>
                                @endif
                            </tr>
                            <tr>
                                <td>Ekspresi muka bagus pada satu objek</td>
                            </tr>
                            <tr>
                                <td>Gerak gerik bagus tertuju pada satu objek	</td>
                            </tr>
                            <tr>
                                <td>Diajak berbicara bagus pada satu objek</td>
                            </tr>
                            <tr>
                                <td>Berbicara tepat waktu, tapi menggunakan Bahasa yang sering diperhatikan</td>
                            </tr>
                            <tr>
                                <td>Konsentrasi yang tinggi pada satu objek</td>
                            </tr>
   
                            <tr>
                                <td>Ketika bermain tidak ingin diganggu</td>
                            </tr>
                            <tr>
                                <td>Bisa menyimak jika menarik bagi anak</td>
                            </tr>
                            <tr>
                                <td>Mengikuti instruksi Ketika anak tertarik</td>
                            </tr>
                            <tr>
                                <td>Bergerak sesuai apa yang dimau anaknya</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
              
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

