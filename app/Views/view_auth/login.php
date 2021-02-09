<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?= $title; ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/bumbu/assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/bumbu/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>/bumbu/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>/bumbu/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>/bumbu/assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bumbu/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bumbu/assets/css/forms/switches.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bumbu/assets/css/elements/alert.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bumbu/plugins/loaders/custom-loader.css">


</head>

<body class="form">


    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class=""><?= $judul_header; ?></h1>
                        <p class=""><?= $judul_sub; ?></p>
                        <div class="alert alert-arrow-right alert-icon-right alert-light-success mb-4" role="alert" id="success" style="display: none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <strong>Berhasil login, tunggu sebentar!</strong>
                        </div>
                        <div class="alert alert-arrow-right alert-icon-right alert-light-danger mb-4" role="alert" id="alert" style="display: none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                <line x1="12" y1="16" x2="12" y2="16"></line>
                            </svg>
                            <strong>Username atau password salah!</strong>
                        </div>
                        <?php
                        $errors = session()->getFlashdata('errors');
                        $berhasil = session()->getFlashdata('berhasil');
                        $suspend = session()->getFlashdata('suspend');
                        $register = session()->getFlashdata('register');

                        if (!empty($berhasil)) { ?>
                            <div class="alert alert-arrow-right alert-icon-right alert-light-success mb-4" role="alert" id="success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                <strong>Berhasil login, tunggu sebentar!</strong>
                            </div>
                            <script>
                                setTimeout(function() {
                                    window.location = "akun";
                                }, 2000);
                            </script>
                        <?php }
                        if (!empty($suspend)) { ?>
                            <div class="alert alert-arrow-right alert-icon-right alert-light-warning mb-4" role="alert" id="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                    <line x1="12" y1="16" x2="12" y2="16"></line>
                                </svg>
                                <strong>Email tidak aktif, hubungi admin!</strong>
                            </div>
                        <?php }
                        if (!empty($register)) { ?>
                            <div class="alert alert-arrow-right alert-icon-right alert-light-success mb-4" role="alert" id="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                    <line x1="12" y1="16" x2="12" y2="16"></line>
                                </svg>
                                <strong>Akun berhasil didaftarkan, silahkan login kembali</strong>
                            </div>
                        <?php }
                        if (!empty($errors)) { ?>
                            <div class="alert alert-arrow-right alert-icon-right alert-light-danger mb-4" role="alert" id="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                    <line x1="12" y1="16" x2="12" y2="16"></line>
                                </svg>
                                <strong>Email tidak terdaftar, hubungi admin!</strong>
                            </div>
                        <?php }

                        ?>

                        <?php if ($settings['login_google'] == 0) { ?>
                            <?php echo form_open(base_url('login'), 'class="text-left" id="form_login" '); ?>
                            <div class="form">
                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">EMAIL</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="username" name="username" type="email" class="form-control" placeholder="Masukan username anda">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">PASSWORD</label>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Masukan password anda">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-danger btn-lg mb-3 mr-3 " id="tombol" value="">Log In</button>
                                        <button class="btn btn-danger btn-lg mb-3 mr-3" id="loading" style="display: none;">
                                            <div class="spinner-border text-white mr-2 align-self-center loader-sm ">Loading...</div>Loading
                                        </button>

                                    </div>
                                </div>

                            </div>
                            <?php echo form_close(); ?>
                        <?php } else { ?>

                            <a href="<?= $tombol_google; ?>" class="btn btn-danger btn-lg mb-3 mr-3 " id="tombol_google" style="display: block;"> Login Google</a>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if (!empty($berhasil)) { ?>
        <script>
            var x = document.getElementById("tombol_google");
            x.style.display = "none";
        </script>
    <?php } ?>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->

    <script src="<?php echo base_url(); ?>/bumbu/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>/bumbu/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/bumbu/bootstrap/js/bootstrap.min.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo base_url(); ?>/bumbu/assets/js/authentication/form-2.js"></script>
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
</body>

</html>