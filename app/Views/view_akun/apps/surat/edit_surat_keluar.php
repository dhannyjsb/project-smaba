<link href="<?php echo base_url(); ?>/bumbu/plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/bumbu/plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label style="color: black;font-size: 0.85rem!important;">NO SURAT</label>
            <input type=" text" class="form-control" style="font-size: 0.85rem!important;" name="no_surat" placeholder="NO SURAT" value="<?= esc($data_surat['no_surat_keluar']); ?>" required disabled>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label style="color: black;font-size: 0.85rem!important;">KODE SURAT</label>
            <input type="text" class="form-control" style="font-size: 0.85rem!important;" name="kode_surat" placeholder="KODE SURAT" value="<?= esc($data_surat['second_surat_keluar']); ?>" required disabled>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label style="color: black;font-size: 0.85rem!important;">NO BERKAS</label>
            <input type="text" class="form-control" style="font-size: 0.85rem!important;" name="no_berkas" placeholder="NO BERKAS" value="<?= esc($data_surat['no_berkas_keluar']); ?>" required disabled>
            <input type="hidden" class="form-control" style="font-size: 0.85rem!important;" name="surat_keluar_id" placeholder="NO BERKAS" value="<?= esc($data_surat['surat_keluar_id']); ?>" required disabled>

        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label style="color: black;font-size: 0.85rem!important;">TANGGAL</label>
            <input id="format_tanggal" value="<?= esc($data_surat['tanggal_surat_keluar']); ?>" name="tanggal_surat_keluar" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Isi Tanggal.." disabled>

        </div>
    </div>
</div>
<div class="form-group">
    <label style="color: black;font-size: 0.85rem!important;">ALAMAT TUJUAN</label>
    <input type="text" class="form-control" style="font-size: 0.85rem!important;" name="tujuan_surat" placeholder="ALAMAT TUJUAN" value="<?= esc($data_surat['alamat_surat_keluar']); ?>" required disabled>
</div>
<div class="form-group">
    <label style="color: black;font-size: 0.85rem!important;">PERIHAL SURAT</label>
    <input type="hidden" class="form-control" style="font-size: 0.85rem!important;" name="tahun_surat_keluar" placeholder="PERIHAL SURAT" value="2020">
    <input type="hidden" class="form-control" style="font-size: 0.85rem!important;" name="pengedit_surat_keluar" placeholder="PERIHAL SURAT" value="<?= esc($user_info['id_unik']); ?>">
    <textarea class="form-control" style="font-size: 0.85rem!important;" aria-label="With textarea" name="perihal_surat" disabled> <?= esc($data_surat['perihal_surat_keluar']); ?></textarea>

</div>

<?php if ($data_surat['id_gdrive_sk'] == "-") { ?>
<?php } else { ?>
    <div class="form-group" style="text-align: center;">
        <a class="btn btn-warning mb-2" href="https://drive.google.com/file/d/<?= esc($data_surat['id_gdrive_sk']); ?>/view" target="_blank">Lihat File</a>
    </div>

<?php } ?>
<div class="form-group">
    <?php if ($data_surat['id_gdrive_sk'] == "-") { ?>
        <label for="basicInputFile" style="color: black;font-size: 0.85rem!important;">TAMBAH FILE ?</label>

    <?php } else { ?>
        <label for="basicInputFile" style="color: black;font-size: 0.85rem!important;">GANTI FILE ?</label>

    <?php } ?>

    <select name="ubah_file" data-placeholder="ubah_file" class="select2-icons form-control" id="edit_pakai_file" disabled>
        <option value="1" data-icon="fa fa-wordpress">Ya</option>
        <option value="2" data-icon="fa fa-codepen" selected>Tidak</option>
    </select>
</div>
<fieldset class="form-group" style="display: none;" id="edit_form_filenya">
    <label for="basicInputFile" style="color: black;font-size: 0.85rem!important;">UPLOAD FILE</label>
    <div class="custom-file">
        <input name="file" type="file" class="form-control mb-4" id="customFile">
    </div>
</fieldset>
<?php if ($data_surat['id_gdrive_sk'] == "-") { ?>
<?php } else { ?>
    <div class="form-group" id="div_hapus_file">
        <label for="basicInputFile" style="color: black;font-size: 0.85rem!important;">HAPUS FILE ?</label>
        <input type="hidden" name="text_hapus_link" id="text_hapus_link" value="" />
        <label style="margin-left: 10px;" class="new-control new-checkbox new-checkbox-text checkbox-danger">
            <input type="checkbox" class="new-control-input" name="hapus_link" id="hapus_link" disabled>
            <span class="new-control-indicator"></span><span class="new-chk-content" style="margin-left: 10px;color: black;"> YA</span>
        </label>
    </div>
<?php } ?>


<script src="<?php echo base_url(); ?>/bumbu/plugins/flatpickr/flatpickr.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/plugins/flatpickr/custom-flatpickr.js"></script>
<script>
    $(document).ready(function() {

        edit_pakai_file.onchange = function() {
            var val = this.options[this.selectedIndex].value;
            var x = document.getElementById("edit_form_filenya");
            var text_hapus = document.getElementById("div_hapus_file");
            var text_hapus_value = document.getElementById("text_hapus_link");

            //  alert(val);
            if (val === "2") {
                x.style.display = "none";
                text_hapus.style.display = "block";

            } else {
                x.style.display = "block";
                text_hapus.style.display = "none";
                text_hapus_value.value = "false";
                $('#hapus_link').prop('checked', false); // Unchecks it
            }
        };
    });
</script>
<script>
    $('#text_hapus_link').val($(this).is(':checked'));
    $('#hapus_link').click(function() {
        $('#text_hapus_link').val($(this).is(':checked'));
    });
</script>