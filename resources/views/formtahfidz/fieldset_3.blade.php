<!-- fieldsets 3-->
<fieldset  id="fieldform3">
    <!-- Data Keunikan Siswa -->
        <div class="subform">
            <h2 class="fs-title">Data Keunikan Calon Siswa</h2>
            <hr>

            <div class="form-group">
            <label for="hal_khusus">Hal-hal khusus (keunikan, passion, kebiasaan)</label>
            <input type="text" class="form-control"  name="hal_khusus" placeholder="Hal-hal khusus..." maxlength="40" required>
            </div>
            
            <div class="form-group">
            <label for="citacita">Cita-Cita</label>
            <input type="text" class="form-control"  name="citacita" placeholder="Cita-cita" maxlength="30" required>
            </div>

            <div class="form-group">
            <label for="hobi">Hobi</label>
            <input type="text" class="form-control"  name="hobi" placeholder="Hobi-hobi" maxlength="30" required>
            </div>

            <div class="form-group">
            <label for="harapan_orgtua">Harapan Orang Tua</label>
            <input type="text" class="form-control"  name="harapan_orgtua" placeholder="Harapan Orang Tua" maxlength="40" required>
            </div>
        </div>
    <!-- Data Hafalan Siswa -->
        <div class="subform">
            <h2 class="fs-title">Data Hafalan Calon Siswa</h2>
            <hr>

            <div class="form-group">
                <label for="jumlahhafalan">Jumlah Hafalan (Juz)</label>
                <input type="number" class="form-control"  name="jumlahhafalan" placeholder="Jumlah Hafalan (contoh : 3)" required>
            </div>

            <div class="form-group">
                <label for="nama_juz">Juz yang telah dihafal</label>
                <input type="text" class="form-control"  name="namajuz" placeholder="Nama juz yang dihafal" required>
            </div>
        </div>    

    <!--Data Sekolah Sebelumnya -->    
        <div class="subform">
            <h2 class="fs-title">Data Sekolah Sebelumnya</h2>
            <hr>

            <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah</label>
                <input type="text" class="form-control"  name="asal_sekolah" placeholder="Asal sekolah sebelumnya" maxlength="40" required>
            </div>
            
            <div class="form-group">
                <label for="alamat_sekolah">Alamat Sekolah</label>
                <textarea class="form-control" name="alamat_sekolah" placeholder="Alamat sekolah" rows="3" required></textarea>
            </div>
            
            <div class="form-group">
                <label for="no_telp_sekolah">Nomor Telepon Sekolah </label>
                <input type="number" class="form-control"  name="no_telp_sekolah" placeholder="Nomor telepon sekolah"  maxlength="12" required>
            </div>

        </div>
    
    <!-- Data Prestasi Akademik-->
    <div class="subform">
        <h2 class="fs-title">Data Prestasi Akademik</h2>
        <hr>
        <div class="panel panel-default">
            <div class="panel-body">
                <div id="prestasi_fields"></div>
                    <div class="form-row">
                        <div class="col-sm-4 nopadding">
                            <div class="form-group">
                                <input type="text" class="form-control" id="jenis_lomba" name="jenis_lomba_1" placeholder="Jenis Lomba">
                            </div>
                        </div>
                        <div class="col-sm-4 nopadding">
                            <div class="form-group">
                                <div class="input-group">
                                    <select class="form-control" id="tingkat_lomba" name="tingkat_lomba_1">
                                        <option value="">Tingkat Lomba</option>
                                        <option value="sekolah">Sekolah</option>
                                        <option value="kecamatan">Kecamatan</option>
                                        <option value="kabupaten">Kabupaten</option>
                                        <option value="provinsi">Provinsi</option>
                                        <option value="nasional">Nasional</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 nopadding">
                            <div class="form-group">
                                <input type="text" class="form-control" id="peringkat" name="peringkat1" placeholder="Peringkat" >
                            </div>
                        </div>
                       
                    </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                <div id="prestasi_fields"></div>
                    <div class="form-row">
                        <div class="col-sm-4 nopadding">
                            <div class="form-group">
                                <input type="text" class="form-control" id="jenis_lomba" name="jenis_lomba_2" placeholder="Jenis Lomba">
                            </div>
                        </div>
                        <div class="col-sm-4 nopadding">
                            <div class="form-group">
                                <div class="input-group">
                                    <select class="form-control" id="tingkat_lomba" name="tingkat_lomba_2">
                                        <option value="">Tingkat Lomba</option>
                                        <option value="sekolah">Sekolah</option>
                                        <option value="kecamatan">Kecamatan</option>
                                        <option value="kabupaten">Kabupaten</option>
                                        <option value="provinsi">Provinsi</option>
                                        <option value="nasional">Nasional</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 nopadding">
                            <div class="form-group">
                                <input type="text" class="form-control" id="peringkat" name="peringkat2" placeholder="Peringkat" >
                            </div>
                        </div>
                       
                    </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                <div id="prestasi_fields"></div>
                    <div class="form-row">
                        <div class="col-sm-4 nopadding">
                            <div class="form-group">
                                <input type="text" class="form-control" id="jenis_lomba" name="jenis_lomba_3" placeholder="Jenis Lomba">
                            </div>
                        </div>
                        <div class="col-sm-4 nopadding">
                            <div class="form-group">
                                <div class="input-group">
                                    <select class="form-control" id="tingkat_lomba" name="tingkat_lomba_3">
                                        <option value="">Tingkat Lomba</option>
                                        <option value="sekolah">Sekolah</option>
                                        <option value="kecamatan">Kecamatan</option>
                                        <option value="kabupaten">Kabupaten</option>
                                        <option value="provinsi">Provinsi</option>
                                        <option value="nasional">Nasional</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 nopadding">
                            <div class="form-group">
                                <input type="text" class="form-control" id="peringkat" name="peringkat3" placeholder="Peringkat" >
                            </div>
                        </div>
                       
                    </div>
            </div>
        </div>
    </div>

    <!--Button -->
    <button type="button" name="previous" class="previous action-button-previous">Prev</button>
    <button id="3" type="button" class="next action-button" name="next">Next</button>

</fieldset>