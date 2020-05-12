<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
                top: 900px;
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
                left: 30px;
                top: 1600px;
                background: #FFFFFF;
                box-shadow: 0px 0px 32px rgba(0, 0, 0, 0.16);
                border-radius: 24px;
            }
            .card2right {
                position: absolute;
                width: 620px;
                height: 800px;
                left: 700px;
                top: 1600px;
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
                top: 2700px;
                left: 60px;
            }
            .img-timeline2 {
                position: absolute;
                top: 2700px;
                left: 285px;
            }
            .img-timeline3 {
                position: absolute;
                top: 2700px;
                left: 510px;
            }
            .img-timeline4 {
                position: absolute;
                top: 2700px;
                left: 730px;
            }
            .img-timeline5 {
                position: absolute;
                top: 2700px;
                left: 965px;
            }
            .img-timeline6 {
                position: absolute;
                top: 2690px;
                left: 1200px;
            }
            .line-timeline {
                position: absolute;
                top: 2850px;
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
                top: 2900px;
                left: 35px;
            }
            .text-timeline2 {
                position: absolute;
                top: 2900px;
                left: 250px;
            }
            .text-timeline3 {
                position: absolute;
                top: 2900px;
                left: 510px;
            }
            .text-timeline4 {
                position: absolute;
                top: 2900px;
                left: 725px;
            }
            .text-timeline5 {
                position: absolute;
                top: 2900px;
                left: 940px;
            }
            .text-timeline6 {
                position: absolute;
                top: 2900px;
                left: 1160px;
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
                top: 3000px;
                left: 20px;
            }
            .cal-timeline2 {
                position: absolute;
                top: 3000px;
                left: 280px;
            }
            .cal-timeline3 {
                position: absolute;
                top: 3000px;
                left: 512px;
            }
            .cal-timeline4 {
                position: absolute;
                top: 3000px;
                left: 690px;
            }
            .cal-timeline5 {
                position: absolute;
                top: 3000px;
                left: 940px;
            }
            .cal-timeline6 {
                position: absolute;
                top: 3000px;
                left: 1180px;
            }
            .warning-card {
                position: absolute;
                width: 1200px;
                height: 124px;
                left: 80px;
                top: 3200px;
                background: #FAF5E4;
                border-radius: 24px;
            }
            .warning-icon {
                position: absolute;
                width: 64px;
                height: 64px;
                left: 40px;
                top: 35px;
            }
            .bg-footer {
                position: absolute;
                width: 1200px;
                height: 124px;
                left: 0px;
                top: 3450px;
            }
            .footer {
                position: absolute;
                width: 300px;
                height: 57px;
                left: -70px;
                top: 3630px;
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: bold;
                font-size: 30px;
                display: flex;
                align-items: center;
                text-align: center;
                color: #F8B400;
            }
            .icon-phone {
                position: absolute;
                left: 40px;
                right: 93.95px;
                top: 70.93px;
                bottom: 6.56px;
            }
            .icon-phone1 {
                position: absolute;
                left: 40px;
                right: 93.95px;
                top: 130px;
                bottom: 6.56px;
            }
            .icon-phone2 {
                position: absolute;
                left: 40px;
                right: 93.95px;
                top: 190px;
                bottom: 6.56px;
            }
            .no-hp {
                position: absolute;
                left: 160px;
                top: 95px;
                bottom: 6.56px;
            }
            .no-hp1 {
                position: absolute;
                left: 160px;
                top: 150px;
                bottom: 6.56px;
            }
            .no-hp2 {
                position: absolute;
                left: 160px;
                top: 210px;
                bottom: 6.56px;
            }
            .icon-web {
                position: absolute;
                left: 550px;
                right: 80px;
                top: 90px;
                bottom: 6.56px;
            }
            .icon-twitter {
                position: absolute;
                left: 620px;
                right: 80px;
                top: 90px;
                bottom: 6.56px;
            }
            .icon-line {
                position: absolute;
                left: 690px;
                right: 80px;
                top: 90px;
                bottom: 6.56px;
            }
            .icon-fb {
                position: absolute;
                left: 760px;
                right: 80px;
                top: 90px;
                bottom: 6.56px;
            }
            .icon-ig {
                position: absolute;
                left: 830px;
                right: 80px;
                top: 90px;
                bottom: 6.56px;
            }
            .address {
                position: absolute;
                left: 970px;
                top: 100px;
                bottom: 6.56px;
            }
            .responsive {
                width: 100%;
                max-width: 400px;
                height: auto;
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
           <div class="responsive"><div class="top-right-image1"><img src="{{url('/images/foto3.png')}}" style= "width: 90%; height: 90%"></div></div>
            
        <!-- gambar kedua -->
            <div class="buttom-left-image2"><img src="{{url('/images/foto2.png')}}" style= "width: 45%; height: 45%"></div>

        <!-- title 2 --> 
            <p class="tittle1" style="padding-top: 700px;padding-left: 715px;">Penerimaan Peserta Didik Baru<br>Tahun Pelajaran 2019/2020</p>
            
            <p class="text"style="padding-top: 0.75px;padding-left: 715px">SEKOLAH CENDEKIA BAZNAS (SCB) merupakan sekolah bebas biaya dan berasrama bagi dhuafa untuk putra dan putri Indonesia, yang berada di bawah pengelolaan Badan Amil Zakat Nasional (BAZNAS).<br></p>
            <p class="text"style="padding-top: 5px;padding-left: 715px">SCB memiliki motto membangun karakter-mengoptimalkan potensi. Setiap siswa menempuh pendidikan formal (kurikulum dinas pendidikan), pembinaan karakter islam, qur’an hadist serta pengembangan potensi sesuai minat dan bakat.<br></p>
            <p class="text"style="padding-top: 5px;padding-left: 715px">SCB membuka pendaftaran calon Peserta Didik Baru Angkatan III Tahun Pelajaran 2019/2020. Masa pendaftaran dimulai 31 Oktober – 28 Desember 2019</p>
        
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
            <img src="{{url('/images/daftar.png')}}" style= "width: 70%; height: 70%;">
            </div>

            <div class="img-timeline2">
            <img src="{{url('/images/survei-1.png')}}" style= "width: 70%; height: 70%;">
            </div>

            <div class="img-timeline3">
            <img src="{{url('/images/tes-akademik.png')}}" style= "width: 68%; height: 68%;">
            </div>

            <div class="img-timeline4">
            <img src="{{url('/images/survei.png')}}" style= "width: 69%; height: 69%;">
            </div>

            <div class="img-timeline5">
            <img src="{{url('/images/tes quran.png')}}" style= "width: 68%; height: 68%;">
            </div>

            <div class="img-timeline6">
            <img src="{{url('/images/announce.png')}}" style= "width: 100%; height: 100%;">
            </div>

        <!-- line -->
            <div class= line-timeline>
                <img src="{{url('/images/line.png')}}" style= "width: 95%; height: 90%;">
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

            <!-- warning footer -->
            <div class="warning-card">
            <div class="warning-icon"><img src="{{url('/images/alert-2.png')}}"></div>
            <a class="text-timeline" style="color: #000000; font-weight: normal; padding-left: 125px; padding-top: 40px;">
            Tidak ada pungutan biaya apapun mulai proses seleksi, kedatangan calon peserta didik, 
            hingga pendidikan selama berada di SMP Cendekia BAZNAS
            </div>

            <!-- footer -->
            <div class="bg-footer"><img src="{{url('/images/ijo.png')}}" style="width: 112.4%; height: 450%;"></div>
            <div class="footer">
                <!-- Narahubung -->
                <a>Narahubung</a>
                <div class="icon-phone">
                    <img src="{{url('/images/phone.png')}}" style= "width: 50px; height: 50px;">
                </div>
                <div class="cal-timeline no-hp" style= "color: #ffffff">
                    (0251)&nbsp8591072
                </div>
                <div class="icon-phone1">
                    <img src="{{url('/images/phone.png')}}" style= "width: 50px; height: 50px;">
                </div>
                <div class="cal-timeline no-hp1" style= "color: #ffffff">
                    0857&nbsp8277&nbsp1555&nbsp(Norma)
                </div>
                <div class="icon-phone2">
                    <img src="{{url('/images/phone.png')}}" style= "width: 50px; height: 50px;">
                </div>
                <div class="cal-timeline no-hp2" style= "color: #ffffff">
                    0811&nbsp1372&nbsp017&nbsp(Aiman)
                </div>
                
                <!-- Sosial Media -->
                <a style="padding-left: 300px;">Sosial&nbsp&nbspMedia</a>
                <div class="icon-web">
                    <a href="https://www.cendekiabaznas.sch.id/"><img src="{{url('/images/web.png')}}" style= "width: 50px; height: 50px;"></a>
                </div>
                <div class="icon-twitter">
                    <a href="#"><img src="{{url('/images/twitterlogo.png')}}" style= "width: 50px; height: 50px;"></a>
                </div>
                <div class="icon-line">
                    <a href="#"><img src="{{url('/images/linelogo.png')}}" style= "width: 50px; height: 50px;"></a>
                </div>
                <div class="icon-fb">
                    <a href="#"><img src="{{url('/images/facebooklogo.png')}}" style= "width: 50px; height: 50px;"></a>
                </div>
                <div class="icon-ig">
                    <a href="#"><img src="{{url('/images/instagramlogo.png')}}" style= "width: 50px; height: 50px;"></a>
                </div>

                <!-- Informasi Sekolah -->
                <a style="padding-left: 210px;">Informasi&nbsp&nbspSekolah</a>
                <div class="cal-timeline address" style= "color: #ffffff; align-items:left">
                    <p style="padding-top: 50px; text-align: left">Sekolah&nbspCendekia&nbspBAZNAS<br>
                    Jln.&nbspK.H.&nbspUmar&nbspCirangkong,&nbspRT.&nbsp18&nbspRW.&nbsp07,<br> 
                    Ds.&nbspCemplang,&nbspKec.&nbspCibungbulang,&nbspKab.<br>
                    Bogor&nbsp16630</p><br>
                </div>

            </div>      
        </body>
    <
/body>
</html>
