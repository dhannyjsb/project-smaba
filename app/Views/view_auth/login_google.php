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
        <?php echo form_open(base_url('register_google')); ?>
        <div class="arrow-container">
            <div class="arrow-2">
                <img src="<?php echo base_url(); ?>/perpustakaan_file/logo/logo_smaba.png" alt="" class="">
            </div>
        </div>
        <h2>Silahkan Login</h2>
        <p>Silahkan pilih sesuai dengan data diri anda</p>
        <div class="form-style-agile ">
            <div class="tombol"><i class="fas fa-key"></i></div>
            <select class="cumbu_bux" name="role_id">
                <option value="1" data-icon="fa fa-wordpress">Guru</option>
                <option value="2" data-icon="fa fa-codepen">Tenaga Pendidik/TU</option>
                <option value="3" data-icon="fa fa-codepen">Siswa</option>
                <option value="4" data-icon="fa fa-codepen">Alumni</option>
                <option value="5" data-icon="fa fa-codepen">Tamu</option>
            </select>
        </div>

        <input type="hidden" name="id_unik" value="<?= $data_isian['id_unik']; ?>">
        <input type="hidden" name="nama_lengkap" value="<?= $data_isian['nama_lengkap']; ?>">
        <input type="hidden" name="email" value="<?= $data_isian['email']; ?>">
        <input type="hidden" name="image" value="<?= $data_isian['image']; ?>">

        <button type="submit" class="btn btn-danger btn-lg mb-3 mr-3 " id="tombol" value="">Daftar</button>
        <?php echo form_close(); ?>
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

</html>