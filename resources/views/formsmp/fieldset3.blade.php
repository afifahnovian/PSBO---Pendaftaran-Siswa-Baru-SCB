<!-- fieldsets 3-->
<fieldset>
    <!-- Data Keunikan Siswa -->
        <div class="subform">
            <h2 class="fs-title">Data Keunikan Calon Siswa</h2>
            <hr>

            <div class="form-group">
            <label for="hal_khusus">Hal-hal khusus (keunikan, passion, kebiasaan)</label>
            <input type="text" class="form-control"  name="hal_khusus" placeholder="Hal-hal khusus...">
            </div>
            
            <div class="form-group">
            <label for="citacita">Cita-Cita</label>
            <input type="text" class="form-control"  name="citacita" placeholder="Cita-cita">
            </div>

            <div class="form-group">
            <label for="hobi">Hobi</label>
            <input type="text" class="form-control"  name="hobi" placeholder="Hobi-hobi">
            </div>

            <div class="form-group">
            <label for="harapan_orgtua">Harapan Orang Tua</label>
            <input type="text" class="form-control"  name="harapan_orgtua" placeholder="Harapan Orang Tua">
            </div>
        </div>
    <!--Data Sekolah Sebelumnya -->    
        <div class="subform">
            <h2 class="fs-title">Data Sekolah Sebelumnya</h2>
            <hr>

            <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah</label>
                <input type="text" class="form-control"  name="asal_sekolah" placeholder="Asal sekolah sebelumnya">
            </div>
            
            <div class="form-group">
                <label for="alamat_sekolah">Alamat Sekolah</label>
                <textarea class="form-control" name="alamat_sekolah" placeholder="Alamat sekolah" rows="3"></textarea>
            </div>
            
            <div class="form-group">
                <label for="no_telp_sekolah">Nomor Telepon Sekolah </label>
                <input type="text" class="form-control"  name="no_hp_sekolah" placeholder="Nomor telepon sekolah">
            </div>

        </div>
    
    <!-- Data Prestasi Akademik-->
    <div class="subform">
        <h2 class="fs-title">Data Prestasi Akademik</h2>
        <hr>
        <div class="form-group">
            <label for="jenis_lomba">Jenis Lomba </label>
            <input type="text" class="form-control"  name="jenis_lomba" placeholder="Lomba kesenian, science, dsb">
        </div>

        <div class="form-group">
            <label for="tingkat_Lomba">Tingkat Lomba</label>
            <select id="tingkat" name="tingkat_Lomba" class="custom-select">
                <option value="">Pilih...</option>
                <option value="sekolah">Sekolah</option>
                <option value="kecamatan">Kecamatan</option>
                <option value="kabupaten">Kabupaten</option>
                <option value="provinsi">Provinsi</option>
                <option value="nasional">Nasional</option>
            </select>
        </div>

        <div class="form-group">
            <label for="peringkat">Peringkat </label>
            <input type="text" class="form-control"  name="peringkat" placeholder="Peringkat lomba">
        </div>

    </div>

    <!-- Button --> 
        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
        <input type="button" name="next" class="next action-button" value="Next"/>
</fieldset>