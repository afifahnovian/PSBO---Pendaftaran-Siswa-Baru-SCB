<fieldset id="fieldform1">
    <h2 class="fs-title">Data Pengisi Form</h2> 
    <hr>
        <input type hidden name= "tipe_siswa" value = "SMP">
        <div class="form-group">
            <label for="pengisiform">Nama Lengkap</label>
            <input type="text" class="form-control" id="pengisiform" name="pengisiform" placeholder="Nama Lengkap" maxlength="30" required>
        </div>
        <div class="form-group">
            <label for="nohp">Nomor HP</label>
            <input type="number" class="form-control" id="nohp" name="nohp" placeholder="Nomor HP" maxlength="13" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Alamat Email" maxlength="40" required> 
        </div>
        <button id="1" type="button" class="next action-button" name="next">Next</button>
</fieldset>
