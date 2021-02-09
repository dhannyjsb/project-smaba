<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>SMAN 1 BARAMBAI</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="CMS SMABA, adalah aplikasi manajemen untuk SMAN 1 Barambai" />

    <!-- Meta tag Keywords -->
    <link href="<?php echo base_url(); ?>/bumbu/assets/css/plugins.css" rel="stylesheet" type="text/css" />

    <!-- css files -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/bumbu/tambahan/css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- //css files -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bumbu/plugins/loaders/custom-loader.css">

    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <!-- //web-fonts -->
    <script src="https://kit.fontawesome.com/d24d1846a8.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>/bumbu/assets/js/libs/jquery-3.1.1.min.js"></script>

</head>

<body>
    <!-- title -->
    <h1>SMAN 1 BARAMBAI</h1>
    <!-- //title -->

    <!-- content -->
    <div class="sub-main-w3">
        <?php if ($settings['login_google'] == 0) { ?>

            <?php echo form_open(base_url('login'), 'class="text-left" id="form_login" '); ?>
            <div class="arrow-container">
                <div class="arrow-2">
                    <img src="<?php echo base_url(); ?>/perpustakaan_file/logo/logo_smaba.png" alt="" class="">
                </div>
            </div>
            <h2>Silahkan Login</h2>
            <p>Enter your email below to stay updated on our site updates and news</p>
            <div class="alert_berhasil" role="alert" id="success" style="display: none;">
                <strong>Berhasil login, tunggu sebentar!</strong>
            </div>
            <div class="alert_gagal" role="alert" id="alert" style="display: none;">
                <strong>Username atau password salah!</strong>
            </div>
            <div class="form-style-agile">

                <div class="tombol"><i class="fas fa-users"></i></div>
                <input placeholder="Masukan username anda" name="username" type="email" required="">
            </div>
            <div class="form-style-agile">
                <div class="tombol"><i class="fas fa-key"></i></div>
                <input placeholder="Masukan Password anda" name="password" type="password" required="">
            </div>
            <button type="submit" class="btn btn-danger btn-lg mb-3 mr-3 " id="tombol" value="">Log In</button>
            <button class="btn btn-danger btn-lg mb-3 mr-3" id="loading" style="display: none;">
                <div class="spinner-border text-white mr-2 align-self-center loader-sm ">Loading...</div>Loading
            </button>

            <?php echo form_close(); ?>
        <?php } else { ?>
            <form action="">
                <div class="arrow-container">
                    <div class="arrow-2">
                        <img src="<?php echo base_url(); ?>/perpustakaan_file/logo/logo_smaba.png" alt="" class="">
                    </div>
                </div>
                <h2>Silahkan Login</h2>
                <p>Login menggunakan akun sekolah anda</p>
                <?php
                $berhasil = session()->getFlashdata('berhasil');
                $suspend = session()->getFlashdata('suspend');
                $register = session()->getFlashdata('register');

                if (!empty($berhasil)) { ?>
                    <div class="alert_berhasil" role="alert" id="success">
                        <strong>Berhasil login, tunggu sebentar!</strong>
                    </div>
                    <script>
                        setTimeout(function() {
                            window.location = "akun";
                        }, 2000);
                    </script>
                <?php }
                if (!empty($register)) { ?>
                    <div class="alert_berhasil" role="alert" id="success">
                        <strong>Akun berhasil didaftarkan, silahkan login kembali</strong>
                    </div>
                <?php }
                if (!empty($suspend)) { ?>
                    <div class="alert_suspend" role="alert" id="success">
                        <strong>Email tidak aktif, hubungi admin!</strong>
                    </div>
                <?php } ?>
                <a href="<?= $tombol_google; ?>" class="google btn" id="tombol_google"><i class="fa fa-google fa-fw">
                    </i> Login with Google
                </a>
            </form>
        <?php } ?>
    </div>
    <!-- //content -->

    <!-- copyright -->
    <div class="copyright-w3ls">
        <p>&copy; 2020 SMABA. All rights reserved | Design by
            <a href="http://hostrya.com">Hostrya</a>
        </p>
    </div>
    <!-- //copyright -->

</body>
<?php if (!empty($berhasil)) { ?>
    <script>
        var x = document.getElementById("tombol_google");
        x.style.display = "none";
    </script>
<?php } ?>
<script>
    var alamat3 = $("#form_login").attr("action");
    $("#form_login").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $('#loading').show();
        $('#tombol').hide();
        setTimeout(function() {
            $.ajax({
                url: alamat3,
                type: "post",
                data: formData,
                processData: false,
                contentType: false,
                complete: function() {
                    $('#loading').hide();
                    $('#tombol').show();
                },
                success: function(response) {
                    if (response == 1) {
                        $(':input[type="submit"]').prop('disabled', true);
                        $("#alert").hide();
                        $("#success").show();
                        setTimeout(function() {
                            window.location = "akun";
                        }, 2000);
                    }
                    if (response == 2) {
                        $("#alert").show();
                        $('#form_login')[0].reset();

                    }
                    if (response == 3) {}
                },
                error: function(result) {
                    alert("error");
                },
            });
        }, 2000);
    });
</script>

</html>