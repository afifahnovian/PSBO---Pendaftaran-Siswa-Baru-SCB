<!-- fieldsets 2-->
<fieldset>
    <!-- Data Siswa --> 
    <div class="subform">
        <h2 class="fs-title">Data Umum Mahasiswa</h2>
        <hr>
        <div class="form-group">
            <label for="fname">Nama Lengkap</label>
            <input type="text" class="form-control"  name="namalengkap" placeholder="Nama">
        </div>
        
        <div class="form-group">
            <label for="panggilan">Nama Panggilan</label>
            <input type="text" class="form-control"  name="namapanggilan" placeholder="Panggilan">
        </div>

        <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <select id="jk" name="jeniskelamin" class="custom-select">
                    <option value="">Pilih...</option>
                    <option value="lk">Laki-laki</option>
                    <option value="pr">Perempuan</option>
            </select>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tempatlahir">Tempat lahir</label>
                <input type="text" class="form-control" name="tempatlahir" style="float:left;"  placeholder="Tempat lahir">
            </div>
            <div class="form-group col-md-6" style="float:right;" >
                <label for="tgllahir">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggallahir">
            </div>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat Lengkap</label>
            <textarea class="form-control" name="alamat" placeholder="Alamat Lengkap" rows="3"></textarea>
        </div>  

        <div class="form-group">
            <label for="nisn">NISN</label>
            <input type="text" class="form-control" name="nisn" placeholder="NISN">
        </div> 
    </div>

    <!-- Data Kesehatan --> 
    
    <div class="subform">
        <h2 class="fs-title">Data Kesehatan Mahasiswa</h2>
        <hr>
            <div class="form-group">
                <label for="tinggibadan">Tinggi badan (cm)</label>
                <input type="number" class="form-control" name="tinggibadan" placeholder="Tinggi Badan">
            </div>

            <div class="form-group">
                <label for="beratbadan">Berat Badan(kg)</label>
                <input type="number" class="form-control" name="beratbadan" placeholder="Berat Badan">
            </div>

            <div class="form-group">
                <label for="riwayatpenyakit">Penyakit yang pernah diderita / alergi</label>
                <input type="text" class="form-control" name="riwayatpenyakit" placeholder="Riwayat Penyakit">
            </div>
            
            <div class="form-group">
                <label for="golongandarah">Golongan Darah</label>
                <div class="choice">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="1" name="golongandarah" value="A" class="custom-control-input">
                        <label class="custom-control-label" for="1">A</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="2" name="golongandarah" value="B" class="custom-control-input">
                        <label class="custom-control-label" for="2">B</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="3" name="golongandarah" value="AB" class="custom-control-input">
                        <label class="custom-control-label" for="3">AB</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="4" name="golongandarah" value="O" class="custom-control-input">
                        <label class="custom-control-label" for="4">O</label>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label for="#">BPJS</label>
                <div class="choice1">
                    <div class="custom-control custom-radio custom-control-inline" >
                        <input type="radio" id="iya" name="BPJS" value="1" class="custom-control-input">
                        <label class="custom-control-label" for="iya">Ada</label>
                    </div>
                    
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="tidak" name="BPJS" value="0" class="custom-control-input">
                        <label class="custom-control-label" for="tidak">Tidak Ada</label>
                    </div>
                </div>
            </div>
    </div>

    <!--Button -->
    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
    <input type="button" name="next" class="next action-button" value="Next"/>

</fieldset>