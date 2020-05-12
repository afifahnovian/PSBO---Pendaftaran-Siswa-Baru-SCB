        <!-- Fieldset 4-->
<fieldset>
    <!-- Ayah Kandung -->
    <div class="subform">
        <h2 class="fs-title">Data Keluarga</h2>
        <hr>
        <h6 class="fs-subtitle">Ayah Kandung</h6>
        
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control"  name="nama" placeholder="Nama Lengkap Ayah">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tempat_lahir">Tempat lahir</label>
                <input type="text" class="form-control"name="tempatlahir" placeholder="Tempat lahir">
            </div>
            <div class="form-group col-md-6" style="float:right; margin-right:0%" >
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggallahir">
            </div>
        </div>

        <div class="form-group">
            <label for="status_hidup">Status</label>
            <div class="choice">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="H" name="status_hidup" value="Hidup" class="custom-control-input">
                    <label class="custom-control-label" for="H">Hidup</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="C" name="status_hidup" value="Cerai" class="custom-control-input">
                    <label class="custom-control-label" for="C">Cerai</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="M" name="status_hidup" value="Meninggal" class="custom-control-input">
                    <label class="custom-control-label" for="M">Meninggal</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="text" class="form-control"  name="umur" placeholder="Umur Ayah Kandung">
        </div>

        <div class="form-group">
            <label for="pendidikan terakhir">Pendidikan Terakhir</label>
            <select id="pendidikan_terakhir" name="pendidikan_terakhir" class="custom-select">
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
            <input type="text" class="form-control"  name="pekerjaan" placeholder="Pekerjaan Ayah Kandung">
        </div>

        <div class="form-group">
            <label for="penghasilan_pokok">Penghasilan Pokok (per bulan)</label>
            <input type="text" class="form-control"  name="penghasilan_pokok" placeholder="Contoh : Rp.800.000,00">
        </div>

        <div class="form-group">
            <label for="penghasilan_sekunder">Penghasilan Diluar Penghasilan Pokok (per bulan) </label>
            <input type="text" class="form-control"  name="penghasilan_sekunder" placeholder="Contoh : Rp.300.000,00">
        </div>

        <div class="form-group">
            <label for="jumlah_tanggungan">Jumlah Tanggungan Keluarga</label>
            <select id="jumlah_tanggungan" name="jumlah_tanggungan" class="custom-select">
                <option value="">Pilih...</option>
                <option value="1">1-2 orang</option>
                <option value="3">3-4 orang</option>
                <option value="5">5-6 orang</option>
                <option value="6">>6 orang</option>
            </select>
        </div>

        <div class="form-group">
            <label for="kesehatan">Kondisi Kesehatan</label>
            <select id="kesehatan" name="kesehatan" class="custom-select">
                <option value="">Pilih...</option>
                <option value="1">Sehat</option>
                <option value="2">Sakit-sakitan / sakit sementara</option>
                <option value="3">Sakit tua/ sakit kambuh</option>
                <option value="4">Sakit permanen / menjalani pengobatan rutin</option>
            </select>
        </div>
    </div>

    <!-- Ibu Kandung -->
    <div class="subform">
        <h6 class="fs-subtitle">Ibu Kandung</h6>
        
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control"  name="nama" placeholder="Nama Lengkap Ibu">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tempat_lahir">Tempat lahir</label>
                <input type="text" class="form-control"name="tempatlahir" placeholder="Tempat lahir">
            </div>
            <div class="form-group col-md-6" style="float:right" >
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggallahir">
            </div>
        </div>

        <div class="form-group">
            <label for="status_hidup">Status</label>
            <div class="choice">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="H" name="status_hidup" value="Hidup" class="custom-control-input">
                    <label class="custom-control-label" for="H">Hidup</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="C" name="status_hidup" value="Cerai" class="custom-control-input">
                    <label class="custom-control-label" for="C">Cerai</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="M" name="status_hidup" value="Meninggal" class="custom-control-input">
                    <label class="custom-control-label" for="M">Meninggal</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="text" class="form-control"  name="umur" placeholder="Umur Ibu Kandung">
        </div>

        <div class="form-group">
            <label for="pendidikan terakhir">Pendidikan Terakhir</label>
            <select id="pendidikan_terakhir" name="pendidikan_terakhir" class="custom-select">
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
            <input type="text" class="form-control"  name="pekerjaan" placeholder="Pekerjaan Ayah Kandung">
        </div>

        <div class="form-group">
            <label for="penghasilan_pokok">Penghasilan Pokok (per bulan)</label>
            <input type="text" class="form-control"  name="penghasilan_pokok" placeholder="Contoh : Rp.800.000,00">
        </div>

        <div class="form-group">
            <label for="penghasilan_sekunder">Penghasilan Diluar Penghasilan Pokok (per bulan) </label>
            <input type="text" class="form-control"  name="penghasilan_sekunder" placeholder="Contoh : Rp.300.000,00">
        </div>

        <div class="form-group">
            <label for="jumlah_tanggungan">Jumlah Tanggungan Keluarga</label>
            <select id="jumlah_tanggungan" name="jumlah_tanggungan" class="custom-select">
                <option value="">Pilih...</option>
                <option value="1">1-2 orang</option>
                <option value="3">3-4 orang</option>
                <option value="5">5-6 orang</option>
                <option value="6">>6 orang</option>
            </select>
        </div>

        <div class="form-group">
            <label for="kesehatan">Kondisi Kesehatan</label>
            <select id="kesehatan" name="kesehatan" class="custom-select">
                <option value="">Pilih...</option>
                <option value="1">Sehat</option>
                <option value="2">Sakit-sakitan / sakit sementara</option>
                <option value="3">Sakit tua/ sakit kambuh</option>
                <option value="4">Sakit permanen / menjalani pengobatan rutin</option>
            </select>
        </div>
    </div>

    <!-- Wali  -->
    <div class="subform">
        <h2 class="fs-subtitle">Wali / Ayah Tiri / Ibu Tiri</h2>
        
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control"  name="nama" placeholder="Nama Lengkap Wali">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tempat_lahir">Tempat lahir</label>
                <input type="text" class="form-control"name="tempatlahir" placeholder="Tempat lahir">
            </div>
                <div class="form-group col-md-6" style="float:right;" >
                <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggallahir">
            </div>
        </div>

        <div class="form-group">
            <label for="status_hidup">Status</label>
            <div class="choice">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="H" name="status_hidup" value="Hidup" class="custom-control-input">
                    <label class="custom-control-label" for="H">Hidup</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="C" name="status_hidup" value="Cerai" class="custom-control-input">
                    <label class="custom-control-label" for="C">Cerai</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="M" name="status_hidup" value="Meninggal" class="custom-control-input">
                    <label class="custom-control-label" for="M">Meninggal</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="text" class="form-control"  name="umur" placeholder="Umur Wali">
        </div>

        <div class="form-group">
            <label for="pendidikan terakhir">Pendidikan Terakhir</label>
            <select id="pendidikan_terakhir" name="pendidikan_terakhir" class="custom-select">
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
            <input type="text" class="form-control"  name="pekerjaan" placeholder="Pekerjaan Wali">
        </div>

        <div class="form-group">
            <label for="penghasilan_pokok">Penghasilan Pokok (per bulan)</label>
            <input type="text" class="form-control"  name="penghasilan_pokok" placeholder="Contoh : Rp.800.000,00">
        </div>

        <div class="form-group">
            <label for="penghasilan_sekunder">Penghasilan Diluar Penghasilan Pokok (per bulan) </label>
            <input type="text" class="form-control"  name="penghasilan_sekunder" placeholder="Contoh : Rp.300.000,00">
        </div>

        <div class="form-group">
            <label for="jumlah_tanggungan">Jumlah Tanggungan Keluarga</label>
            <select id="jumlah_tanggungan" name="jumlah_tanggungan" class="custom-select">
                <option value="1">1-2 orang</option>
                <option value="3">3-4 orang</option>
                <option value="5">5-6 orang</option>
                <option value="6">>6 orang</option>
            </select>
        </div>

        <div class="form-group">
            <label for="kesehatan">Kondisi Kesehatan</label>
            <select id="kesehatan" name="kesehatan" class="custom-select">
                <option value="">Pilih...</option>
                <option value="1">Sehat</option>
                <option value="2">Sakit-sakitan / sakit sementara</option>
                <option value="3">Sakit tua/ sakit kambuh</option>
                <option value="4">Sakit permanen / menjalani pengobatan rutin</option>
            </select>
        </div>
    </div>
        <!-- button -->
    <!-- Button --> 
    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
    <input type="button" name="next" class="next action-button" value="Next"/>
    
</fieldset>