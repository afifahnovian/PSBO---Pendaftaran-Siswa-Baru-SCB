<!-- fieldsets 2-->
<fieldset id="fieldform2">
    <!-- Data Siswa --> 
    <div class="subform">
        <h2 class="fs-title">Data Umum Siswa</h2>
        <hr>
        <div class="form-group">
            <label for="fname">Nama Lengkap</label>
            <input type="text" class="form-control"  name="namalengkap" placeholder="Nama" maxlength="30"required>
        </div>
        
        <div class="form-group">
            <label for="panggilan">Nama Panggilan</label>
            <input type="text" class="form-control"  name="namapanggilan" placeholder="Panggilan" maxlength="10" required>
        </div>

        <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <select id="jk" name="jeniskelamin" class="custom-select">
                    <option value="">Pilih...</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tempatlahir">Tempat lahir</label>
                <input type="text" class="form-control" name="tempatlahir" style="float:left;"  placeholder="Tempat lahir" required>
            </div>
            <div class="form-group col-md-6" style="float:right;" >
                <label for="tgllahir">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggallahir" required>
            </div>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat Lengkap</label>
            <textarea class="form-control" name="alamat" placeholder="Alamat Lengkap" rows="3" required></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="kotakab">Kota/Kabupaten</label>
                <select name="kota_kabupaten" id="kotakab">
                    <option value="">Pilih</option>
                    @foreach ($kab_array as $data)
                    <option value="{{$data->name}}" >
                        {{$data -> name}}
                    </option>
                    @endforeach
                </select>
                <!-- <input autocomplete="on" type="text" class="form-control" name="kota_kabupaten" id="txtProvinces" style="float:left;"  placeholder="Kota/Kabupaten" required> -->
            </div>
            <div class="form-group col-md-6" style="float:right;" >
                <label for="provinsi">Provinsi</label>
                <select name="provinsi" id="provinsi">
                    <option value="">Pilih</option>
                    @foreach ($prov_array as $data)
                    <option value="{{$data->name}}" >
                        {{$data -> name}}
                    </option>
                    @endforeach
                </select>
                <!-- <input type="text" class="form-control" name="provinsi"> -->
            </div>
        </div>

        <div class="form-group">
            <label for="nisn">NISN</label>
            <input type="number" class="form-control" name="nisn" placeholder="NISN" maxlength="11" required>
        </div> 
    </div>

    <!-- Data Kesehatan --> 
    <div class="subform">
        <h2 class="fs-title">Data Kesehatan Mahasiswa</h2>
        <hr>
            <div class="form-group">
                <label for="tinggibadan">Tinggi badan (cm)</label>
                <input type="number" class="form-control" name="tinggibadan" placeholder="Tinggi Badan" maxlength="3" required>
            </div>

            <div class="form-group">
                <label for="beratbadan">Berat Badan(kg)</label>
                <input type="number" class="form-control" name="beratbadan" placeholder="Berat Badan" maxlength="2" required>
            </div>

            <div class="form-group">
                <label for="riwayatpenyakit">Penyakit yang pernah diderita / alergi</label>
                <input type="text" class="form-control" name="riwayatpenyakit" placeholder="Riwayat Penyakit" required>
            </div>
            
            <div class="form-group">
                <label for="golongandarah">Golongan Darah</label>
                <select id="golo" name="golongandarah" class="custom-select">
                    <option value="">Pilih...</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>   
            </div>


            <div class="form-group">
                <label for="BPJS">BPJS</label>
                <select id="BPJS" name="BPJS" class="custom-select">
                    <option value="">Pilih...</option>
                    <option value="Ada">Ada</option>
                    <option value="Tidak">Tidak Ada</option>
                </select>
            </div>
    </div>

    <!--Button -->
    <button type="button" name="previous" class="previous action-button-previous">Prev</button>
    <button id="2" type="button" class="next action-button" name="next">Next</button>

</fieldset>