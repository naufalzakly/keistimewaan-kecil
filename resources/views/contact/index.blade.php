@extends('layouts.app')

@section('title', 'Contactus Page | Keistimewaan SiKecil')

@section('content')
    <div class="content">
        <div>
            <div> <img src="images/calling.jpg" alt=""> </div>
            <div>
                <div id="sidebar">
                    <h3>Visi Misi Paud Ananda</h3>
                    <ul>
                        <li id="vision"> <span>Contact Person</span>
                            <br>
                            <p>E-mail: paudananda@gmail.com</p>
                            <br>
                            <p>No Telpon: 081330054060</p>
                            
                        </li>
                        <li id="mission"> <span>Alamat</span>
                            <p>Pauda Ananda</p>
                            <br>
                            <p>Jl. Masjid Bagandan 238 Pamekasan</p>
                            
                        </li>
                    </ul>
                </div>
                <div id="contact">
                    <h4 class="first"> Vision Paud Ananda </h4>
                    <br>
                        <ul>
                            <li>
                                Menjadi lembaga pendidikan pra sekolah yang bermutu,kondusif dan diridhoi oleh ALLAH Ta'ala
                            </li>
                        </ul>
                    <h4>Mission Paud Ananda</h4>
                    <br>
                        <ul>
                            <li>Membekali perkembangan anak didik dengan keimanan, kecerdasan, dan keterampilan.</li>
                            <br>
                            <li>Mengembangkan potensi anak sedini mungkin.</li>
                            <br>
                            <li>Membentuk semua komponen sekolah menjadi bagian untuk kemajuan masyarakat/lingkungan </li>
                        </ul>
           
                    
                </div>
            </div>
        </div>
    </div>
@include('includes.footer')
@endsection
