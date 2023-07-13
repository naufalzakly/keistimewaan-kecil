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
                        <li id="vision"> <span>Vision</span>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim venia.</p>
                        </li>
                        <li id="mission"> <span>Mission</span>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim venia.</p>
                        </li>
                    </ul>
                </div>
                <div id="contact">
                    <h4 class="first">Contact Person</h4>
                    <p>Hubungin Kami melalui Email, WhatsApps.</p>
                    <p>E-mail: <a href="#">paudananda@gmail.com</a></p>
                    <p>WhatsApps: 081330054060</p>
                    <h4>Alamat Paud Ananda</h4>
                    <p>Pauda Ananda</p>
                    <p>Jl. Masjid Bagandan 238 Pamekasan</p>
                    <p>Kecamatan Pamekasan kelurahan Jungcangcang </p>
                    
                </div>
            </div>
        </div>
    </div>
@include('includes.footer')
@endsection
