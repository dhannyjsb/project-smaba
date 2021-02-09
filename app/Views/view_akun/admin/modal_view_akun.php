<form>
    <div class="form-row mb-4">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Nama Lengkap</label>
            <input type="text" class="form-control" id="inputEmail4" value="<?= $user['nama_lengkap']; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Email</label>
            <input type="email" class="form-control" id="inputPassword4" value="<?= $user['email']; ?>" readonly>
        </div>
    </div>
    <div class="form-row mb-4">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Data Dapodik</label>
            <input type="text" class="form-control" id="inputEmail4" value="Belum Berfungsi" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Status Akun</label>
            <select id="statusakun" class="form-control">
                <option value="1" <?php if ($user['is_active'] == 1) {
                                        echo "selected";
                                    } ?>>Aktif</option>
                <option value="2" <?php if ($user['is_active'] == 0) {
                                        echo "selected";
                                    } ?>>Tidak aktif</option>
            </select>
        </div>
    </div>
    <div class="form-row mb-4">
        <div class="form-group col-md-6">
            <label for="inputPassword4">Admin</label>
            <select id="statusakun" class="form-control">
                <option value="1" <?php if ($user['is_admin'] == 1) {
                                        echo "selected";
                                    } ?>>Ya</option>
                <option value="2" <?php if ($user['is_admin'] == 0) {
                                        echo "selected";
                                    } ?>>Tidak</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Sync</label>
            <select id="statusakun" class="form-control">
                <option value="1" <?php if ($user['is_sync'] == 1) {
                                        echo "selected";
                                    } ?>>Ya</option>
                <option value="2" <?php if ($user['is_sync'] == 0) {
                                        echo "selected";
                                    } ?>>Tidak</option>
            </select>
        </div>
    </div>
    <div class="form-row mb-4">

        <div class="form-group col-md-6">
            <label for="inputEmail4">Nomor Telepon</label>
            <input type="text" class="form-control" id="inputEmail4" value="<?= $user['mobile_no']; ?>" readonly>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3" disabled>Simpan</button>
</form>