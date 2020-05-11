<fieldset>
    <h2 class="fs-title">Data Pengisi Form</h2> 
    <hr>
        <div class="form-group">
            <label for="#">Nama Lengkap</label>
            <input type="text" class="form-control" id="pengisiform" name="pengisiform" placeholder="Nama Lengkap" maxlength="30" required >
            <span id="error_pengisiform" class="text-danger"></span>
        </div>
        <div class="form-group">
            <label for="#">Nomor HP</label>
            <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Nomor HP" maxlength="13" required>
            <span id="error_nohp" class="text-danger"></span>
        </div>

        <div class="form-group">
            <label for="#">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Alamat Email" maxlength="40" required> 
            <span id="error_email" class="text-danger"></span>
        </div>
        <input type="button" name="next" class="next action-button" value="Next"/>
</fieldset>
