<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=10.0">
    <head>
        <meta charset="utf-8">
        <title> PPDB Online SMP Cendekia BAZNAS </title>
        <!-- Font -->
        <link rel="stylesheet" type="text/css" href= "https://fonts.googleapis.com/css?family=Open+Sans">

        <!-- Styles -->
        <style>
        html, body {
                background-color: #fff;
            }
            .top-right-title {
                position: absolute;
                right: 0px;
                left:55px;
                top: 200px;
            }
            .top-right-link {
                position: absolute;
                right: 0px;
                left:1050px;
                top: 10px;
                padding-right: 0.75rem 100;
            }
            .top-right-button {
                position: absolute;
                right: 0px;
                left:55px;
                top: 450px;
            }
            .top-right-image1 {
                position: absolute;
                right: 0px;
                left:600px;
                padding-top: 80px;
                padding-left: 50px;
                align-items: right;
            }
            .top-right-title2 {
                position: relative;
                top: 180px;
            }
            .top-right-title3 {
                position: relative;
                top: 1200px;
            }
            .buttom-left-image2 {
                position: absolute;
                right: 0px;
                left:20px;
                top: 1060px;
            }
            .title {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: bold;
                font-size: 50px;
                line-height: 65px;
                display: flex;
                align-items: center;             
            }
            .tittle1 {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: bold;
                font-size: 40px;
                line-height: 50px;
                display: flex;
                align-items: center; 
            }
            .title2 {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: bold;
                font-size: 40px;
                line-height: 50px;
            }
            .link {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: normal;
                font-size: 20px;
                line-height: 76px;
                align-items: center;  
                color: #2C786C;
            }
            .content {
                text-align: center;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .imagelogo {
                position: absolute;
                width: 237.43px;
                height: 64px;
                left: 35px;
                top: 35px;
            }

            .button{
                font-size: 18px;
                width: 269px;
                height: 72px;
                left: 62px;
                line-height: 55px;
                top: 633px;
                color : #ffffff; 
            }
            .text{
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: normal;
                font-size: 20px;
                line-height: 28px;
                display: flex;
                align-items: center;
            }
            .card {
                /* Add shadows to create the "card" effect */
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
            }

                /* On mouse-over, add a deeper shadow */
            .card:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }

                /* Add some padding inside the card container */
            .container {
                /*padding: 2px 16px;*/
            }

            .card1left {
                position: absolute;
                width: 650px;
                height: 800px;
                left: 105px;
                top: 1800px;

                background: #FFFFFF;
                box-shadow: 0px 0px 32px rgba(0, 0, 0, 0.16);
                border-radius: 24px;
            }
            .card2right {
                position: absolute;
                width: 620px;
                height: 800px;
                left: 810px;
                top: 1800px;

                background: #FFFFFF;
                box-shadow: 0px 0px 32px rgba(0, 0, 0, 0.16);
                border-radius: 24px;
            }
            .icon-card {
                position: absolute;
                width: 136px;
                height: 136px;
                left: 220px;
                top: 20px;

                transform: matrix(-1, 0, 0, 1, 0, 0);
            }
            .card-title {
                position: absolute;
                width: 123px;
                height: 51px;
                left: 250px;
                top: 110px;

                font-family: 'Open Sans';
                font-style: bold;
                font-weight: 500;
                font-size: 30px;
                line-height: 51px;

                display: flex;
                align-items: center;
            }
            .card-content {
                position: absolute;
                width: 600px;
                height: 48px;
                left: 47px;
                top: 360px;

                font-family: 'Open Sans';
                font-style: normal;
                font-weight: normal;
                font-size: 25px;
                line-height: 38px;
                display: flex;
                align-items: center;
            }
            .img-timeline1 {
                position: absolute;
                top: 2870px;
                left: 60px;
            }
            .img-timeline2 {
                position: absolute;
                top: 2870px;
                left: 315px;
            }
            .img-timeline3 {
                position: absolute;
                top: 2870px;
                left: 570px;
            }
            .img-timeline4 {
                position: absolute;
                top: 2870px;
                left: 815px;
            }
            .img-timeline5 {
                position: absolute;
                top: 2870px;
                left: 1080px;
            }
            .img-timeline6 {
                position: absolute;
                top: 2850px;
                left: 1340px;
            }
            .line-timeline {
                position: absolute;
                top: 3000px;
                left: 90px;
            }
            .text-timeline{
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: bold;
                font-size: 25px;
                line-height: 28px;
                display: flex;
                align-items: center;
                color: #004445;
            }
            .text-timeline1 {
                position: absolute;
                top: 3050px;
                left: 35px;
            }
            .text-timeline2 {
                position: absolute;
                top: 3050px;
                left: 295px;
            }
            .text-timeline3 {
                position: absolute;
                top: 3050px;
                left: 565px;
            }
            .text-timeline4 {
                position: absolute;
                top: 3050px;
                left: 820px;
            }
            .text-timeline5 {
                position: absolute;
                top: 3050px;
                left: 1060px;
            }
            .text-timeline6 {
                position: absolute;
                top: 3050px;
                left: 1320px;
            }
            .cal-timeline{
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: normal;
                font-size: 22px;
                line-height: 28px;
                display: flex;
                align-items: center;
                color: #000000;
            }
            .cal-timeline1 {
                position: absolute;
                top: 3150px;
                left: 20px;
            }
            .cal-timeline2 {
                position: absolute;
                top: 3150px;
                left: 315px;
            }
            .cal-timeline3 {
                position: absolute;
                top: 3150px;
                left: 565px;
            }
            .cal-timeline4 {
                position: absolute;
                top: 3150px;
                left: 785px;
            }
            .cal-timeline5 {
                position: absolute;
                top: 3150px;
                left: 1050px;
            }
            .cal-timeline6 {
                position: absolute;
                top: 3150px;
                left: 1340px;
            }
            
        </style>
    </head>
    <body>
        <body id="page-top">
        <!-- Logo -->
            <div class="imagelogo"><img src="{{url('/images/logo.png')}}" style= "width: 80%; height: 80%"></div>

        <!-- navbar atas -->
            <div class="top-right-link">                    
                <a class="link" href="#tentangSCB" style="padding-right: 20px">Tentang SCB</a>                  
                <a class="link" href="#kontak">Kontak</a>
            </div>

        <!-- Title pertama -->
            <div class="top-right-title">
            <div class="title m-b-md">
                Penerimaan<br>
                Peserta Didik Baru<br>
                SMP Cendekia Baznas
            </div>
            </div>

        <!-- button daftar sekarang -->
            <div class="button">
            <div class="top-right-button">
                    <button style="background-color: #2C786C; padding-left: 20px; padding-right: 20px; border-radius: 12px;
                    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.24), 0px 0px 2px rgba(0, 0, 0, 0.12);">
                        <a class="button" href="#daftar">DAFTAR SEKARANG</a>
                    </button>
            </div>
            </div>

        <!-- gambar paling atas -->
            <div class="top-right-image1"><img src="{{url('/images/foto3.png')}}" style= "width: 90%; height: 90%"></div>
            
        <!-- gambar kedua -->
            <div class="buttom-left-image2"><img src="{{url('/images/foto2.png')}}" style= "width: 45%; height: 45%"></div>

        <!-- title 2 --> 
            <p class="tittle1" style="padding-top: 900px;padding-left: 750px;">Penerimaan Peserta Didik Baru<br>Tahun Pelajaran 2019/2020</p>
            
            <p class="text"style="padding-top: 0.75px;padding-left: 750px">SEKOLAH CENDEKIA BAZNAS (SCB) merupakan sekolah bebas biaya dan berasrama bagi dhuafa untuk putra dan putri Indonesia, yang berada di bawah pengelolaan Badan Amil Zakat Nasional (BAZNAS).<br></p>
            <p class="text"style="padding-top: 5px;padding-left: 750px">SCB memiliki motto membangun karakter-mengoptimalkan potensi. Setiap siswa menempuh pendidikan formal (kurikulum dinas pendidikan), pembinaan karakter islam, qur’an hadist serta pengembangan potensi sesuai minat dan bakat.<br></p>
            <p class="text"style="padding-top: 5px;padding-left: 750px">SCB membuka pendaftaran calon Peserta Didik Baru Angkatan III Tahun Pelajaran 2019/2020. Masa pendaftaran dimulai 31 Oktober – 28 Desember 2019</p>
        
        <!-- title 3 -->
            <div class="content">
            <div class="title2">
            <div class="top-right-title2">
                <a>Persyaratan Pendaftaran</a>
            </div>
            </div>
            </div>
        
        <!-- cards -->
            <div class="card">
            <div class="card-hover">
            <div class="container">
            <div class="card1left">
            <div class="icon-card"><img src="{{url('/images/umum.png')}}"></div>
            <h2 class="card-title">Umum</h2>
            <p class="card-content" style="padding-top: 95px; line-height: 45px;">1. Beragama<br>
            2. Berasal dari keluarga dhuafa<br>
            3. Lulus SD/sederajat, usia maksimal 14 tahun<br>&nbsp &nbsp pada 31 Juli 2019<br>
            4. Berbadan sehat dan tidak memiliki penyakit<br>&nbsp &nbsp menular<br>
            5. Tidak memiliki anggota keluarga yang<br>&nbsp &nbsp sedang atau pernah mendapatkan beasiswa di<br>&nbsp &nbsp Sekolah Cendekia Baznas<br>
            6. Bersedia mengikuti seluruh tahapan seleksi<br>&nbsp &nbsp sesuai dengan ketentuan yang berlaku<br>
            7. Tidak mengundurkan diri saat lolos seleksi</p>
            </div>
            </div>
            </div>
            </div>

            <div class="card">
            <div class="card-hover">
            <div class="container">
            <div class="card2right">
            <div class="icon-card"><img src="{{url('/images/khusus.png')}}"></div>
            <h2 class="card-title">Khusus</h2>
            <p class="card-content" style="padding-top: 30px; line-height: 45px;">1. Rata-rata nilai rapor kelas IV-V mininimal<br> &nbsp &nbsp 7.0 pada
            mata pelajaran: Bahasa Indonesia,<br>&nbsp &nbsp IPA, dan Matematika<br>2. Berkas yang diperlukan:<br>
            &nbsp &nbsp • Fotokopi rapor kelas IV-V yang telah<br>&nbsp &nbsp &nbsp dilegalisasi<br>
            &nbsp &nbsp • Fotokopi SKTM<br>
            &nbsp &nbsp • Fotokopi sertifikat prestasi<br>
            &nbsp &nbsp • Fotokopi Kartu Keluarga<br></p>
            </div>
            </div>
            </div>
            </div>

        <!-- title 4 -->
            <div class="content">
            <div class="title2">
            <div class="top-right-title3">
                <a style="top: 1500px;">Alur dan Timeline</a>
            </div>
            </div>
            </div>

        <!-- gambar timeline -->
            <div class="img-timeline1">
            <img src="{{url('/images/daftar.png')}}" style= "width: 70%; height: 70%">
            </div>

            <div class="img-timeline2">
            <img src="{{url('/images/survei-1.png')}}" style= "width: 70%; height: 70%">
            </div>

            <div class="img-timeline3">
            <img src="{{url('/images/tes-akademik.png')}}" style= "width: 68%; height: 68%">
            </div>

            <div class="img-timeline4">
            <img src="{{url('/images/survei.png')}}" style= "width: 69%; height: 69%">
            </div>

            <div class="img-timeline5">
            <img src="{{url('/images/tes quran.png')}}" style= "width: 68%; height: 68%">
            </div>

            <div class="img-timeline6">
            <img src="{{url('/images/announce.png')}}" style= "width: 94%; height: 94%">
            </div>

        <!-- line -->
            <div class= line-timeline>
                <img src="{{url('/images/line.png')}}" style= "width: 94%; height: 90%">
            </div>

        <!-- teks timeline -->   
            <div class=text-timeline>
                <div class=text-timeline1>
                    <p>Pendaftaran &<br>
                    Seleksi Berkas</p>
                </div>

                <div class=text-timeline2>
                    <p>Pengumuman<br>
                    Seleksi Berkas</p>
                </div>

                <div class=text-timeline3>
                    <p>&nbsp &nbsp &nbsp Tes<br>
                    Akademik</p>
                </div>

                <div class=text-timeline4>
                    <p>&nbsp&nbsp&nbspSurvei<br>
                    &nbsp Faktual</p>
                </div>

                <div class=text-timeline5>
                    <p>Psikotes & Tes<br>
                    &nbspBaca Alquran</p>
                </div>

                <div class=text-timeline6>
                    <p>Pengumuman<br>
                    &nbsp &nbsp &nbsp &nbsp Hasil</p>
                </div> 
            </div>

            <!-- calendar timeline -->   
            <div class=cal-timeline>
                <div class=cal-timeline1>
                    <p>31 Okt - 28 Des 2019</p>
                </div>

                <div class=cal-timeline2>
                    <p>10 Jan 2020</p>
                </div>

                <div class=cal-timeline3>
                    <p>19 Jan 2020</p>
                </div>

                <div class=cal-timeline4>
                    <p>2 - 23 Februari 2020 </p>
                </div>

                <div class=cal-timeline5>
                    <p>14 - 23 Maret 2020</p>
                </div>

                <div class=cal-timeline6>
                    <p>13 April 2020</p>
                </div> 
            </div>
        </body>
    </body>
</html>