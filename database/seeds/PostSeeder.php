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
    }
}
