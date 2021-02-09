<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo form_open(base_url('akun/test'), 'class="text-left" id="save_foto" '); ?>
    <button>Oke</button>
    <?= form_close(); ?>
</body>
<script>
    var alamat_upload = $("#save_foto").attr("action");
    $("#save_foto").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        var tumbul = document.getElementById("tombol_save_foto_profile").disabled = true;
        $.ajax({
            url: alamat_upload,
            type: "post",
            data: formData,
            processData: false,
            contentType: false,
            success: function(result) {
                if (result == true) {
                    console.log(result)

                } else {
                    console.log(result)
                }
            },
        });
    });
</script>

</html>