<fieldset  id="fieldform5">
    <div class="subform">
        <h2 class="fs-title">Data Rumah Tinggal dan Fasilitas Keluarga</h2>
        <hr>
        <div class="form-group">
            <label for="status_kepemilikan_rumah">Status Kepemilikan Rumah</label>
            <select id="status_kepemilikan_rumah" name="status_kepemilikan_rumah" class="custom-select" required>
                <option value="">Pilih...</option>
                <option value="Sendiri">Milik Sendiri</option>
                <option value="Bulanan">Sewa Bulanan</option>
                <option value="Tahunan">Sewa Tahunan</option>
                <option value="Bebas Sewa">Bebas Sewa</option>
                <option value="Rumah Dinas">Rumah Dinas</option>
            </select>
        </div>

        <div class="form-group">
            <label for="tahun_perolehan">Tahun Perolehan</label>
            <input type="number" class="form-control"  name="tahun_perolehan" placeholder="cth : 2019" mamaxlength="8" xlength="4" required>
        </div>
        
        <div class="form-group">
            <label for="kualitas_rumah">Kualitas Rumah</label>
            <select id="kualitas_rumah" name="kualitas_rumah" class="custom-select" required>
                <option value="">Pilih...</option>
                <option value="Layak">Layak Huni</option>
                <option value="Setengah Layak">Setengah Layak</option>
                <option value="Tidak Layak">Tidak Layak Huni</option>
            </select>
        </div>

        <div class="form-group">
            <label for="luas_tanah">Luas Tanah (m2)</label>
            <select id="luas_tanah" name="luas_tanah" class="custom-select" required>
                <option value="">Pilih...</option>
                <option value="25 ">25</option>
                <option value="25-50">25-50</option>
                <option value="50-99">50-99</option>
                <option value="100-200">100-200</option>
                <option value=">200">>200</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="MCK">Mandi, Cuci, Kakus</label>
            <select id="MCK" name="MCK" class="custom-select" required>
                <option value="">Pilih...</option>
                <option value="Dalam rumah">Kepemilikan sendiri di dalam rumah</option>
                <option value="Luar Rumah">Kepemilikan sendiri di luar rumah</option>
                <option value="Berbagi">Berbagi pakai</option>
            </select>
        </div>

        <div class="form-group">
            <label for="sumber_air">Sumber Air</label>
            <select id="sumber_air" name="sumber_air" class="custom-select" required>
                <option value="">Pilih...</option>
                <option value="Sumur">Sumur</option>
                <option value="PDAM">PDAM</option>
            </select>
        </div>

        <div class="form-group">
            <label for="daya_listrik">Daya Listrik (kWh)</label>
            <select id="daya_listrik" name="daya_listrik" class="custom-select" required>
                <option value="">Pilih...</option>
                <option value="450">450</option>
                <option value="900">900</option>
                <option value="1300">1300</option>
                <option value=">1300">>1300</option>
            </select>
        </div>

        <div class="form-group">
            <label for="harta">Harta Tidak Bergerak</label>
            <select id="harta" name="harta" class="custom-select">
                <option value="">Pilih...</option>
                <option value="Sawah">Sawah</option>
                <option value="Ladang">Ladang</option>
                <option value="Kolam">Kolam</option>
                <option value="Tanah">Tanah</option>
                <option value="Tidak Ada">Tidak Ada</option>
            </select>
        </div>

        <div class="form-group">
            <label for="status_kepemilikan_harta">Status Kepemilikan Harta</label>
            <select id="status_kepemilikan_harta" name="status_kepemilikan_harta" class="custom-select" >
                <option value="">Pilih...</option>
                <option value="Beli">Beli</option>
                <option value="Sewa">Sewa</option>
                <option value="Warisan">Warisan</option>
                <option value="Hibah">Hibah</option>
                <option value="Tidak ada">Tidak Ada</option>
            </select>
        </div>

        <div class="form-group">
            <label for="kendaraan">Kendaraan Bermotor yang dimiliki</label>
            <select id="kendaraan" name="kendaraan" class="custom-select">
                <option value="">Pilih...</option>
                <option value="Motor">Motor</option>
                <option value="Mobil">Mobil</option>
                <option value="Tidak Ada">Tidak Ada</option>
            </select>
        </div>

        <div class="form-group">
            <label for="status_kepemilikan_kendaraan">Status Kepemilikan Harta</label>
            <select id="status_kepemilikan_kendaraan" name="status_kepemilikan_kendaraan" class="custom-select">
                <option value="">Pilih...</option>
                <option value="Beli">Beli</option>
                <option value="Sewa">Sewa</option>
                <option value="Warisan">Warisan</option>
                <option value="Hibah">Hibah</option>
                <option value="Tidak">Tidak Ada</option>
            </select>
        </div>
    </div>

    <div class="subform">
        <h2 class="fs-title">Data Pengeluaran</h2>
        <hr>
        <div class="form-group">
            <label for="kebutuhan_hidup">Kebutuhan Hidup(makan)</label>
            <input type="number" class="form-control"  name="kebutuhanhidup" placeholder="Cth : 200000" maxlength="8" required>
        </div>
        <div class="form-group">
            <label for="kebutuhan_RT">Kebutuhan Rumah Tangga(sabun,detergen,dll)</label>
            <input type="number" class="form-control"  name="kebutuhanRT" placeholder="Cth : 200000" maxlength="8" required>
        </div>
        <div class="form-group">
            <label for="tanggungan_pendidikan">Tanggungan Pendidikan</label>
            <input type="number" class="form-control"  name="tanggunganpendidikan" placeholder="Cth : 200000" maxlength="8" required>
        </div>
        <div class="form-group">
            <label for="tanggungan_kesehatan">Tanggungan Kesehatan</label>
            <input type="number" class="form-control"  name="tanggungankesehatan" placeholder="Cth : 200000" maxlength="8" required>
        </div>
        <div class="form-group">
            <label for="tanggungan_hutang">Tanggungan Hutang / Cicilan</label>
            <input type="number" class="form-control"  name="tanggunganhutang" placeholder="Cth : 200000" maxlength="8" required>
        </div>
        <div class="form-group">
            <label for="bayar_listrik">Bayar Listrik</label>
            <input type="number" class="form-control"  name="tanggunganlistrik" placeholder="Cth : 200000" maxlength="8" required>
        </div>
        <div class="form-group">
            <label for="bayar_telepon">Bayar Telepon</label>
            <input type="number" class="form-control"  name="tanggungantelepon" placeholder="Cth : 200000" maxlength="8" required>
        </div>
        <div class="form-group">
            <label for="total">Total Pengeluaran (perbulan)</label>
            <input type="number" class="form-control"  name="total" placeholder="Cth : 200000" maxlength="8" required>
        </div>
    </div>
    <!--Button -->
    <button type="button" name="previous" class="previous action-button-previous">Prev</button>
    <button id="5" type="button" class="next action-button" name="next">Next</button>

</fieldset>