<fieldset>
    <div class="subform">
        <h2 class="fs-title">Data Rumah Tinggal dan Fasilitas Keluarga</h2>
        <hr>
        <div class="form-group">
            <label for="status_kepemilikan_rumah">Status Kepemilikan Rumah</label>
            <select id="status_kepemilikan_rumah" name="status_kepemilikan_rumah" class="custom-select">
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
            <input type="year" class="form-control"  name="tahun_perolehan">
        </div>
        
        <div class="form-group">
            <label for="kualitas_rumah">Kualitas Rumah</label>
            <select id="kualitas_rumah" name="kualitas_rumah" class="custom-select">
                <option value="Layak">Layak Huni</option>
                <option value="Setengah Layak">Setengah Layak</option>
                <option value="Tidak Layak">Tidak Layak Huni</option>
            </select>
        </div>

        <div class="form-group">
            <label for="luas_tanah">Luas Tanah (m2)</label>
            <select id="luas_tanah" name="luas_tanah" class="custom-select">
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
            <select id="MCK" name="MCK" class="custom-select">
                <option value="">Pilih...</option>
                <option value="Dalam rumah">Kepemilikan sendiri di dalam rumah</option>
                <option value="Luar Rumah">Kepemilikan sendiri di luar rumah</option>
                <option value="Berbagi">Berbagi pakai</option>
            </select>
        </div>

        <div class="form-group">
            <label for="sumber_air">Sumber Air</label>
            <select id="sumber_air" name="sumber_air" class="custom-select">
                <option value="Sumur">Sumur</option>
                <option value="PDAM">PDAM</option>
            </select>
        </div>

        <div class="form-group">
            <label for="daya_listrik">Daya Listrik (kWh)</label>
            <select id="daya_listrik" name="daya_listrik" class="custom-select">
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
            <select id="status_kepemilikan_harta" name="status_kepemilikan_harta" class="custom-select">
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
                <option value="Beli">Beli</option>
                <option value="Sewa">Sewa</option>
                <option value="Warisan">Warisan</option>
                <option value="Hibah">Hibah</option>
            </select>
        </div>
    </div>

    <!--Button -->
    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
    <input type="button" name="next" class="next action-button" value="Next"/>

</fieldset>