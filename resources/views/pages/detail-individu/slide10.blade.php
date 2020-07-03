<fieldset>
    <div class="card slide slide_10" style="padding-left: 3%;padding-right: 3%; padding-top:1%; padding-bottom:1% ">
        <div class="slide-content">
            <div class="card-header">
                <h4 class="card-title"> {{__('Berkas Calon Siswa')}} </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>Berkas Daftar</th>
                            <th>View</th>
                            <th>Download</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kartu Keluarga</td>
                                <td><a href="/berkas/view/kartu_keluarga/{{App\BerkasDaftar::where(['calonsiswa_id' => $calonsiswa->id])->pluck('id')->first()}}">view</a></td>
                                <td><a href="/berkas/download/kartu_keluarga/{{App\BerkasDaftar::where(['calonsiswa_id' => $calonsiswa->id])->pluck('id')->first()}}">download</a></td>
                            </tr>
                            <tr>
                                <td>Rapor SD</td>
                                <td><a href="/berkas/view/rapor_sd/{{App\BerkasDaftar::where(['calonsiswa_id' => $calonsiswa->id])->pluck('id')->first()}}">view</a></td>
                                <td><a href="/berkas/download/rapor_sd/{{App\BerkasDaftar::where(['calonsiswa_id' => $calonsiswa->id])->pluck('id')->first()}}">download</a></td>
                            </tr>
                            <tr>
                                <td>Ijazah</td>
                                <td><a href="/berkas/view/ijazah_STTB_STK/{{App\BerkasDaftar::where(['calonsiswa_id' => $calonsiswa->id])->pluck('id')->first()}}">view</a></td>
                                <td><a href="/berkas/download/ijazah_STTB_STK/{{App\BerkasDaftar::where(['calonsiswa_id' => $calonsiswa->id])->pluck('id')->first()}}">download</a></td>
                            </tr>
                            <tr>
                                <td>Pas Foto</td>
                                <td><a href="/berkas/view/pasfoto/{{App\BerkasDaftar::where(['calonsiswa_id' => $calonsiswa->id])->pluck('id')->first()}}">view</a></td>
                                <td><a href="/berkas/download/pasfoto/{{App\BerkasDaftar::where(['calonsiswa_id' => $calonsiswa->id])->pluck('id')->first()}}">download</a></td>
                            </tr>
                            <tr>
                                @foreach($sertif as $sertif)
                                    <td>Sertifikat</td>
                                    <td><a href="/berkas/view/sertifikat/{{App\BerkasDaftar::where(['calonsiswa_id' => $calonsiswa->id])->pluck('id')->first()}}">view</a></td>
                                    <td><a href="/berkas/download/sertifikat/{{App\BerkasDaftar::where(['calonsiswa_id' => $calonsiswa->id])->pluck('id')->first()}}">download</a></td>
                                @endforeach
                            </tr>   
                            <tr>
                                <td>Pernyataan Tahfidz</td>
                                <td><a href="/berkas/view/pernyataan_tahfidz/{{App\BerkasDaftar::where(['calonsiswa_id' => $calonsiswa->id])->pluck('id')->first()}}">view</a></td>
                                <td><a href="/berkas/download/pernyataan_tahfidz/{{App\BerkasDaftar::where(['calonsiswa_id' => $calonsiswa->id])->pluck('id')->first()}}">download</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        
    </div>
</fieldset>
