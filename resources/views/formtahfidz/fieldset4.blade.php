        <!-- Fieldset 4-->
        <fieldset  id="fieldform4">
    <!-- Ayah Kandung -->
    <div class="subform">
        <input type hidden name= "wali_type_ayah" value = "ayah kandung">
        <h2 class="fs-title">Data Keluarga</h2>
        <hr>
        <h6 class="fs-subtitle">Ayah Kandung</h6>
        
        <div class="form-group">
            <label for="nama-ayah">Nama Lengkap</label>
            <input type="text" class="form-control"  name="namaayah" placeholder="Nama Lengkap Ayah" required>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tempat-lahir-ayah">Tempat lahir</label>
                <input type="text" class="form-control"name="tempatlahirayah" placeholder="Tempat lahir" required>
            </div>
            <div class="form-group col-md-6" style="float:right; margin-right:0%" >
                <label for="tanggal_lahir-ayah">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggallahirayah" required>
            </div>
        </div>

        <div class="form-group">
            <label for="status_hidup">Status</label>
             <select id="status" name="status_hidup_ayah" class="custom-select" required>
                <option value="">Pilih...</option>
                <option value="Hidup">Hidup</option>
                <option value="Cerai">Cerai</option>
                <option value="Meninggal">Meninggal</option>
            </select>
        </div>

        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" class="form-control"  name="umurayah" placeholder="Umur Ayah Kandung" maxlength="2" required>
        </div>

        <div class="form-group">
            <label for="pendidikan terakhir">Pendidikan Terakhir</label>
            <select id="pendidikan_terakhir" name="pendidikan_terakhir_ayah" class="custom-select" required>
                <option value="">Pilih...</option>
                <option value="Sarjana">Sarjana</option>
                <option value="Diploma">Diploma</option>
                <option value="SMA">SMA</option>
                <option value="SMP">SMP</option>
                <option value="SD">SD</option>
                <option value="Tidak sekolah">Tidak sekolah</option>
            </select>
        </div>

        <div class="form-group">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" class="form-control"  name="pekerjaanayah" placeholder="Pekerjaan Ayah Kandung" required>
        </div>

        <div class="form-group">
            <label for="penghasilan_pokok">Penghasilan Pokok (per bulan)</label>
            <input type="number" class="form-control"  name="penghasilan_pokok_ayah" placeholder="Contoh : 800000" maxlength="8" required>
        </div>

        <div class="form-group">
            <label for="penghasilan_sekunder">Penghasilan Diluar Penghasilan Pokok (per bulan) </label>
            <input type="number" class="form-control"  name="penghasilan_sekunder_ayah" placeholder="Contoh : 300000" maxlength="8" required>
        </div>

        <div class="form-group">
            <label for="jumlah_tanggungan">Jumlah Tanggungan Keluarga</label>
            <select id="jumlah_tanggungan" name="jumlah_tanggungan_ayah" class="custom-select" required>
                <option value="">Pilih...</option>
                <option value="1-2">1-2 orang</option>
                <option value="3-4">3-4 orang</option>
                <option value="5-6">5-6 orang</option>
                <option value="6">>6 orang</option>
            </select>
        </div>

        <div class="form-group">
            <label for="kesehatan">Kondisi Kesehatan</label>
            <select id="kesehatan" name="kesehatanayah" class="custom-select" required >
                <option value="">Pilih...</option>
                <option value="Sehat">Sehat</option>
                <option value="Sakit">Sakit-sakitan / sakit sementara</option>
                <option value="Sakit tua">Sakit tua/ sakit kambuh</option>
                <option value="Sakit permanen">Sakit permanen / menjalani pengobatan rutin</option>
            </select>
        </div>
    </div>

    <!-- Ibu Kandung -->
    <div class="subform">
        <input type hidden name= "wali_type_ibu" value = "ibu kandung">
        <h6 class="fs-subtitle">Ibu Kandung</h6>
        
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control"  name="namaibu" placeholder="Nama Lengkap Ibu" required>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tempat_lahir">Tempat lahir</label>
                <input type="text" class="form-control"name="tempatlahiribu" placeholder="Tempat lahir" required>
            </div>
            <div class="form-group col-md-6" style="float:right" >
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggallahiribu" required>
            </div>
        </div>

        <div class="form-group">
            <label for="status_hidup">Status</label>
            <select id="status" name="status_hidup_ibu" class="custom-select" required>
                <option value="">Pilih...</option>
                <option value="Hidup">Hidup</option>
                <option value="Cerai">Cerai</option>
                <option value="Meninggal">Meninggal</option>
            </select>
        </div>

        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" class="form-control"  name="umuribu" placeholder="Umur Ibu Kandung" maxlength="2" required>
        </div>

        <div class="form-group">
            <label for="pendidikan terakhir">Pendidikan Terakhir</label>
            <select id="pendidikan_terakhir" name="pendidikan_terakhir_ibu" class="custom-select">
                <option value="">Pilih...</option>
                <option value="Sarjana">Sarjana</option>
                <option value="Sarjana">Diploma</option>
                <option value="SMA">SMA</option>
                <option value="SMP">SMP</option>
                <option value="SD">SD</option>
                <option value="Tidak sekolah">Tidak sekolah</option>
            </select>
        </div>

        <div class="form-group">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" class="form-control"  name="pekerjaanibu" placeholder="Pekerjaan Ibu Kandung" required>
        </div>

        <div class="form-group">
            <label for="penghasilan_pokok">Penghasilan Pokok (per bulan)</label>
            <input type="text" class="form-control"  name="penghasilan_pokok_ibu" placeholder="Contoh : 800000" maxlength="8" required>
        </div>

        <div class="form-group">
            <label for="penghasilan_sekunder">Penghasilan Diluar Penghasilan Pokok (per bulan) </label>
            <input type="text" class="form-control"  name="penghasilan_sekunder_ibu" placeholder="Contoh : 300000" maxlength="8" required>
        </div>

        <div class="form-group">
            <label for="jumlah_tanggungan">Jumlah Tanggungan Keluarga</label>
            <select id="jumlah_tanggungan" name="jumlah_tanggungan_ibu" class="custom-select" required>
                <option value="">Pilih...</option>
                <option value="1-2">1-2 orang</option>
                <option value="3-4">3-4 orang</option>
                <option value="5-6">5-6 orang</option>
                <option value="6">>6 orang</option>
            </select>
        </div>

        <div class="form-group">
            <label for="kesehatan">Kondisi Kesehatan</label>
            <select id="kesehatan" name="kesehatanibu" class="custom-select" required>
                <option value="">Pilih...</option>
                <option value="Sehat">Sehat</option>
                <option value="Sakit">Sakit-sakitan / sakit sementara</option>
                <option value="Sakit tua">Sakit tua/ sakit kambuh</option>
                <option value="Sakit permanen">Sakit permanen / menjalani pengobatan rutin</option>
            </select>
        </div>
    </div>

    <!-- Wali  -->
    <div class="subform">
        <input type hidden name= "wali_type" value = "wali">
        <h2 class="fs-subtitle">Wali / Ayah Tiri / Ibu Tiri</h2>
        
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control"  name="namawali" placeholder="Nama Lengkap Wali">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tempat_lahir">Tempat lahir</label>
                <input type="text" class="form-control" name="tempatlahirwali" placeholder="Tempat lahir">
            </div>
                <div class="form-group col-md-6" style="float:right;" >
                <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggallahirwali">
            </div>
        </div>

        <div class="form-group">
            <label for="status_hidup">Status</label>
            <select id="status" name="status_hidup_wali" class="custom-select">
                <option value="">Pilih...</option>
                <option value="Hidup">Hidup</option>
                <option value="Cerai">Cerai</option>
                <option value="Meninggal">Meninggal</option>
            </select>
        </div>

        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" class="form-control"  name="umurwali" placeholder="Umur Wali">
        </div>

        <div class="form-group">
            <label for="pendidikan terakhir">Pendidikan Terakhir</label>
            <select id="pendidikan_terakhir" name="pendidikan_terakhir_wali" class="custom-select">
                <option value="">Pilih...</option>
                <option value="Sarjana">Sarjana</option>
                <option value="Sarjana">Diploma</option>
                <option value="SMA">SMA</option>
                <option value="SMP">SMP</option>
                <option value="SD">SD</option>
                <option value="Tidak sekolah">Tidak sekolah</option>
            </select>
        </div>

        <div class="form-group">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" class="form-control"  name="pekerjaanwali" placeholder="Pekerjaan Wali">
        </div>

        <div class="form-group">
            <label for="penghasilan_pokok">Penghasilan Pokok (per bulan)</label>
            <input type="text" class="form-control"  name="penghasilan_pokok_wali" placeholder="Contoh : 800000" maxlength="8">
        </div>

        <div class="form-group">
            <label for="penghasilan_sekunder">Penghasilan Diluar Penghasilan Pokok (per bulan) </label>
            <input type="text" class="form-control"  name="penghasilan_sekunder_wali" placeholder="Contoh : 300000" maxlength="8">
        </div>

        <div class="form-group">
            <label for="jumlah_tanggungan">Jumlah Tanggungan Keluarga</label>
            <select id="jumlah_tanggungan" name="jumlah_tanggungan_wali" class="custom-select">
                <option value="">Pilih...</option>
                <option value="1-2">1-2 orang</option>
                <option value="3-4">3-4 orang</option>
                <option value="5-6">5-6 orang</option>
                <option value="6">>6 orang</option>
            </select>
        </div>

        <div class="form-group">
            <label for="kesehatan">Kondisi Kesehatan</label>
            <select id="kesehatan" name="kesehatanwali" class="custom-select">
                <option value="">Pilih...</option>
                <option value="Sehat">Sehat</option>
                <option value="Sakit">Sakit-sakitan / sakit sementara</option>
                <option value="Sakit tua">Sakit tua/ sakit kambuh</option>
                <option value="Sakit permanen">Sakit permanen / menjalani pengobatan rutin</option>
            </select>
        </div>
    </div>
        <!-- button -->
   <!--Button -->
   <button type="button" name="previous" class="previous action-button-previous">Prev</button>
   <button id="4" type="button" class="next action-button" name="next">Next</button>
</fieldset>