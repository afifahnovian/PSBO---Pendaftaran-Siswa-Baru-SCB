<?php

use Illuminate\Database\Seeder;
use App\DataPost;
use Illuminate\Support\Facades\DB; 

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_posts')->delete();
        DataPost::create([
            'tipe_post' => 'status_ppdb',
            'isi_post' => '1'
        ]);
        DataPost::create([
            'tipe_post' => 'headline-1',
            'isi_post' => 'Penerimaan Peserta Didik Baru Tahun Pelajaran 2019/2020'
        ]);
        DataPost::create([
            'tipe_post' => 'headline-p',
            'isi_post' => 'SEKOLAH CENDEKIA BAZNAS (SCB) merupakan sekolah bebas biaya dan berasrama bagi dhuafa untuk putra dan putri Indonesia, yang berada di bawah pengelolaan Badan Amil Zakat Nasional (BAZNAS).
                           SCB memiliki motto membangun karakter-mengoptimalkan potensi. Setiap siswa menempuh pendidikan formal (kurikulum dinas pendidikan), pembinaan karakter islam, qur’an hadist serta pengembangan potensi sesuai minat dan bakat.
                           SCB membuka pendaftaran calon Peserta Didik Baru Angkatan III Tahun Pelajaran 2019/2020. Masa pendaftaran dimulai 31 Oktober – 28 Desember 2019'
        ]);
        DataPost::create([
            'tipe_post' => 'timeline_title_1',
            'isi_post' => 'Pendaftaran & Seleksi Berkas'
        ]);

        DataPost::create([
            'tipe_post' => 'timeline_title_2',
            'isi_post' => 'Pengumuman Seleksi Berkas'
        ]);

        DataPost::create([
            'tipe_post' => 'timeline_title_3',
            'isi_post' => 'Tes Akademik'
        ]);

        DataPost::create([
            'tipe_post' => 'timeline_title_4',
            'isi_post' => 'Survei Faktual'
        ]);

        DataPost::create([
            'tipe_post' => 'timeline_title_5',
            'isi_post' => 'Psikotes & Tes Baca Alquran'
        ]);

        DataPost::create([
            'tipe_post' => 'timeline_title_6',
            'isi_post' => 'Pengumuman Hasil'
        ]);

        DataPost::create([
            'tipe_post' => 'timeline-1',
            'isi_post' => '31 Okt – 28 Des 2019'
        ]);
        DataPost::create([
            'tipe_post' => 'timeline-2',
            'isi_post' => '31 Okt – 28 Des 2019'
        ]);
        DataPost::create([
            'tipe_post' => 'timeline-3',
            'isi_post' => '19 Jan 2020'
        ]);
        DataPost::create([
            'tipe_post' => 'timeline-4',
            'isi_post' => '2 – 23 Februari 2020'
        ]);
        DataPost::create([
            'tipe_post' => 'timeline-5',
            'isi_post' => '14 – 23 Maret 2020'
        ]);
        DataPost::create([
            'tipe_post' => 'timeline-6',
            'isi_post' => '13 April 2020'
        ]);

        //Footer Narahubung
        DataPost::create([
            'tipe_post' => 'narahubung-1',
            'isi_post' => '(0521) 8591072'
        ]);

        DataPost::create([
            'tipe_post' => 'narahubung-2',
            'isi_post' => '0857 8277 1555 (Norma)'
        ]);

        DataPost::create([
            'tipe_post' => 'narahubung-3',
            'isi_post' => '0811 1372 017 (Aiman)'
        ]);

        //Footer Sosmed
        DataPost::create([
            'tipe_post' => 'website-scb',
            'isi_post' => 'https://www.cendekiabaznas.sch.id/'
        ]);

        DataPost::create([
            'tipe_post' => 'twitter-scb',
            'isi_post' => 'https://twitter.com/edu_baznas'
        ]);

        DataPost::create([
            'tipe_post' => 'facebook-scb',
            'isi_post' => 'https://www.facebook.com/pendidikanbaznas'
        ]);
        DataPost::create([
            'tipe_post' => 'email-scb',
            'isi_post' => 'humas.scb@gmail.com'
        ]);

        DataPost::create([
            'tipe_post' => 'instagram-scb',
            'isi_post' => 'https://www.instagram.com/pendidikanbaznas/'
        ]);

        //Footer Alamat
        DataPost::create([
            'tipe_post' => 'alamat-scb',
            'isi_post' => 'Jln. K.H. Umar Cirangkong, RT. 18 RW. 07, Ds. Cemplang, Kec. Cibungbulang, Kab. Bogor 16630'
        ]);

        //Update Kontak PPDB
        DataPost::create([
            'tipe_post' => 'kontak1',
            'isi_post' => '+6285281428912'
        ]);

        DataPost::create([
            'tipe_post' => 'kontak2',
            'isi_post' => '+6285782507617'
        ]);
        
        //Syarat SMP
        DataPost::create([
            'tipe_post' => 'syaratsmp',
            'isi_post' => ' <h3>Persyaratan umum</h3>
                            <ol>
                                <li>Beragama Islam. </li>
                                <li>Berasal dari keluarga dhuafa atau tidak mampu. </li>
                                <li>Lulus SD/Sederajat, usia maksimal 14 tahun pada 31 Juli 2020. </li>
                                <li>Berbadan sehat dan tidak memiliki penyakit menular dan melampirkan surat dari dokter. </li>
                                <li>Bersedia mengikuti seluruh tahapan seleksi sesuai dengan ketentuan yang berlaku. </li>
                                <li>Tidak memiliki anggota keluarga yang sedang atau pernah mendapatkan beasiswa di Sekolah Cendekia BAZNAS. </li>
                                <li>Tidak mengundurkan diri saat dinyatakan lolos seleksi.</li>
                            </ol>
                            <br>
                            <h3> Persyaratan Khusus </h3>
                            <ol>
                            <li>Memiliki prestasi akademik dengan rata-rata nilai rapor kelas IV-V minimal 7.5 pada mata 
                            pelajaran; Bahasa Indonesia, Ilmu Pengetahuan Alam (IPA), Matematika.</li> 
                            <li>Mengisi formulir pendaftaran. </li>
                            <li>Siap bertempat tinggal di asrama. </li>
                            <li>Mengumpulkan berkas: </li>
                            <ul>
                            <li>Fotokopi kartu keluarga. </li>
                            <li>Fotokopi rapor kelas IV hingga V yang telah dilegalisasi oleh pihak sekolah asal. </li>
                            <li>Fotokopi Surat Keterangan Tidak Mampu (SKTM), fotokopi piagam atau sertifikat prestasi yang pernah di raih (bila ada).</li>
                            </ul>
                            </ol>'
        ]);

        DataPost::create([
            'tipe_post' => 'kontaksmp1',
            'isi_post' => '+6285281428912'
        ]);

        DataPost::create([
            'tipe_post' => 'kontaksmp2',
            'isi_post' => '+6285782507617'
        ]);

         //Syarat SMP
         DataPost::create([
            'tipe_post' => 'syarattahfidz',
            'isi_post' => ' <h3>Persyaratan umum</h3>
                            <ol>
                                <li>Beragama Islam. </li>
                                <li>Berasal dari keluarga dhuafa atau tidak mampu. </li>
                                <li>Lulus SD/Sederajat, usia maksimal 14 tahun pada 31 Juli 2020. </li>
                                <li>Berbadan sehat dan tidak memiliki penyakit menular dan melampirkan surat dari dokter. </li>
                                <li>Bersedia mengikuti seluruh tahapan seleksi sesuai dengan ketentuan yang berlaku. </li>
                                <li>Tidak memiliki anggota keluarga yang sedang atau pernah mendapatkan beasiswa di Sekolah Cendekia BAZNAS. </li>
                                <li>Tidak mengundurkan diri saat dinyatakan lolos seleksi.</li>
                            </ol>
                            <br>
                            <h3> Persyaratan Khusus </h3>
                            <ol>
                            <li>Memiliki prestasi akademik dengan rata-rata nilai rapor kelas IV-V minimal 7.5 pada mata 
                            pelajaran; Bahasa Indonesia, Ilmu Pengetahuan Alam (IPA), Matematika.</li> 
                            <li>Mengisi formulir pendaftaran. </li>
                            <li>Siap bertempat tinggal di asrama. </li>
                            <li>Mengumpulkan berkas: </li>
                            <ul>
                            <li>Fotokopi kartu keluarga. </li>
                            <li>Fotokopi rapor kelas IV hingga V yang telah dilegalisasi oleh pihak sekolah asal. </li>
                            <li>Fotokopi Surat Keterangan Tidak Mampu (SKTM), fotokopi piagam atau sertifikat prestasi yang pernah di raih (bila ada).</li>
                            <li>Surat Pernyataan Tahfidz yang dapat di download <a href=" "> disini.</a>
                            </ul>
                            </ol>'
        ]);

        DataPost::create([
            'tipe_post' => 'kontaktahfidz1',
            'isi_post' => '+6285281428912'
        ]);

        DataPost::create([
            'tipe_post' => 'kontaktahfidz2',
            'isi_post' => '+6285782507617'
        ]);
    }
}
