        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>/bumbu/plugins/animate/animate.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link href="<?php echo base_url(); ?>/bumbu/assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url(); ?>/bumbu/plugins/sweetalerts/promise-polyfill.js"></script>
        <link href="<?php echo base_url(); ?>/bumbu/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/bumbu/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/bumbu/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bumbu/plugins/dropify/dropify.min.css">

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="account-settings-container layout-top-spacing">
                    <div class="account-content">
                        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <?php echo form_open(base_url('akun/profile/save_profile'), 'id="simpan_profile" class="section general-info"'); ?>
                                    <div class="info">
                                        <h6 class="">General Information</h6>
                                        <div class="row">
                                            <div class="col-lg-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-2 col-lg-12 col-md-4">
                                                        <div class="upload mt-4 pr-md-4">
                                                            <img src="<?= $user_info['image']; ?>" alt="" class="rounded" style="margin-left: 20px; height: 90px;width: 90px; ">
                                                            <button type="button" class="btn btn-primary mb-2 mr-2 " data-toggle="modal" data-target="#upload_foto" style="margin-top: 10px;margin-left: 10px;" disabled>
                                                                Upload Foto
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <label for="fullName">Full Name</label>
                                                                <?php if ($link_data == 1) { ?>
                                                                    <input type="text" class="form-control mb-4" id="fullName" value="<?= $info_pribadi["nama"]; ?>" readonly>
                                                                <?php } else { ?>
                                                                    <input type="text" class="form-control mb-4" id="fullName" name="nama_lengkap" value="<?= $user_info["nama_lengkap"]; ?>">
                                                                <?php } ?>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="profession">Profession</label>
                                                                        <?php if ($user_info['user_role_id'] == 1 or 2) { ?>
                                                                            <?php if ($link_data == 1) { ?>
                                                                                <input type="text" class="form-control mb-4" id="profession" placeholder="Designer" value="<?= $info_pribadi["jenis_ptk"]; ?>" disabled>
                                                                            <?php } else { ?>
                                                                                <input type="text" class="form-control mb-4" id="profession" placeholder="Designer" value="<?= $user_info["nama_role"]; ?>" disabled>
                                                                            <?php } ?>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="dob-input">Ganti Background Profile</label>
                                                                    <div class="d-sm-flex d-block">
                                                                        <button type="button" class="btn btn-primary mb-2 mr-2 " data-toggle="modal" data-target="#ganti_background" style="margin-top: 3px;">
                                                                            Upload Background
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="dob-input">Ubah Password</label>
                                                                    <div class="d-sm-flex d-block">
                                                                        <button type="button" class="btn btn-primary mb-2 mr-2 " data-toggle="modal" data-target="#ganti_password" style="margin-top: 3px;" disabled>
                                                                            Ubah Password
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div id="contact" class="section contact">
                                        <div class="info">
                                            <h5 class="">Contact</h5>
                                            <div class="row">
                                                <div class="col-md-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="address">Email</label>
                                                                <input type="text" class="form-control mb-4" id="email" placeholder="email" name="email" value="<?= $user_info["email"]; ?>" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="address">No Telepon</label>
                                                                <?php if ($user_info['user_role_id'] == 1 or 2) { ?>
                                                                    <?php if ($link_data == 1) { ?>
                                                                        <input type="text" class="form-control mb-4" id="profession" placeholder="Designer" value="<?= $info_pribadi["hp"]; ?>" disabled>
                                                                    <?php } else { ?>
                                                                        <input type="text" class="form-control mb-4" id="mobile_no" placeholder="Nomor Telepon" name="mobile_no" value="<?= $user_info["mobile_no"]; ?>">
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="location">Facebook</label>
                                                                <input type="text" class="form-control mb-4" id="facebook" name="facebook" placeholder="https://facebook/id_anda" value="<?= $user_info["facebook"]; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="phone">Instagram</label>
                                                                <input type="text" class="form-control mb-4" name="instagram" placeholder="ID Instagram anda" value="<?= $user_info["instagram"]; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="email">Last Login</label>
                                                                <input type="text" class="form-control mb-4" id="email" placeholder="Waktu terakhir login" value="<?= date('H:i:s d-m-Y ', $user_info["last_login"]); ?> " disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="website1">Last IP</label>
                                                                <input type="text" class="form-control mb-4" id="last_ip" placeholder="IP terakhir login" value="<?= $user_info["last_ip"]; ?>" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="as-footer-container" style="text-align: right;">
                                                        <button class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <?php echo form_close(); ?>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Tahun Pelajaran <?= $tahun_aktif; ?></p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->
        <!-- Modal -->

        <div class="modal fade" id="upload_foto" tabindex="-1" role="dialog" aria-labelledby="upload_foto" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <?php echo form_open_multipart(base_url('akun/profile/save_foto'), 'class="text-left" id="save_foto" '); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="upload_foto">Upload Foto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-6">
                                <div class="upload text-center">
                                    <input type="file" name="file" id="file_foto" data-show-name="false" data-show-remove="false" id="input-file-max-fs" class="dropify" data-default-file="<?php echo base_url(); ?>/perpustakaan_file/foto/<?= $user_info['image']; ?>" data-max-file-size="5M" data-allowed-file-extensions="jpg png jpeg" />
                                    <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Picture</p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                            </div>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Batal</button>
                        <button type="submit" class="btn btn-primary" id="tombol_save_foto_profile">Simpan</button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>

        <!-- Modal Backgorund profile-->
        <div class="modal fade" id="ganti_background" tabindex="-1" role="dialog" aria-labelledby="ganti_background" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <?php echo form_open_multipart(base_url('akun/profile/save_background'), 'class="text-left" id="save_background" '); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ganti_background">Upload Background</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-6">
                                <div class="upload text-center">
                                    <input type="file" name="file" id="file_back" data-show-name="false" data-show-remove="false" id="input-file-max-fs" class="dropify" data-default-file="<?php echo base_url(); ?>/perpustakaan_file/background_foto/<?= $user_info['background_image']; ?>" data-max-file-size="2M" data-allowed-file-extensions="jpg png jpeg" />
                                    <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Background</p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                            </div>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Batal</button>
                        <button type="submit" class="btn btn-primary" id="tombol_save_foto_back">Simpan</button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>

        </div>
        <!-- Modal Backgorund profile-->
        <div class="modal fade " id="ganti_password" tabindex="-1" role="dialog" aria-labelledby="ganti_password" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" id="ganti_password">
                        <h4 class="modal-title">Ubah Password</h4>
                    </div>
                    <div class="modal-body">
                        <?php echo form_open(base_url('akun/profile/ganti_password'), 'class="mt-0" id="ganti_pass" '); ?>
                        <div class="form-group">
                            <input name="old_pass" type="password" class="form-control mb-2" placeholder="Password Lama"">
                            </div>
                            <div class=" form-group">
                            <input type="password" id="password" class="form-control mb-2" placeholder="Password Baru" pattern=".{4,}" required title="Minimal 4 karakter">
                        </div>
                        <div class=" form-group">
                            <input name="new_pass" id="password2" type="password" class="form-control mb-4" placeholder="Ulangi Password Baru" pattern=".{4,}" required title="Minimal 4 karakter">
                            <div class=" notif_password">
                                <span>
                                    <small id="notif_check_password" class="form-text mt-0"></small>
                                </span>
                            </div>
                        </div>
                        <button type="submit" id="ganti_pass_button" class="btn btn-primary mt-2 mb-2 btn-block" disabled>Ubah Password</button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('#password, #password2').on('keyup', function() {
                colors = {
                        goodColor: "#fff",
                        goodColored: "#087a08",
                        badColor: "#fff",
                        badColored: "#ed0b0b"
                    },
                    message = document.getElementById('notif_check_password'),
                    strings = {
                        "confirmMessage": ["Password baru OK", "Password tidak sama"]
                    };
                if ($('#password').val() == $('#password2').val()) {
                    message.innerHTML = strings["confirmMessage"][0];
                    message.style.color = colors["goodColored"];
                    message.classList.add("text_notif_pass");
                    document.getElementById("ganti_pass_button").disabled = false;

                } else {
                    message.innerHTML = strings["confirmMessage"][1];
                    message.style.color = colors["badColored"];
                    message.classList.add("text_notif_pass");
                    document.getElementById("ganti_pass_button").disabled = true;


                }
            });
        </script>
        <script src="<?php echo base_url(); ?>/bumbu/plugins/dropify/dropify.min.js"></script>
        <script src="<?php echo base_url(); ?>/bumbu/plugins/blockui/jquery.blockUI.min.js"></script>
        <!-- <script src="plugins/tagInput/tags-input.js"></script> -->
        <script src="<?php echo base_url(); ?>/bumbu/assets/js/users/account-settings.js"></script>
        <!-- BEGIN THEME GLOBAL STYLE -->

        <script src="<?php echo base_url(); ?>/bumbu/plugins/sweetalerts/sweetalert2.min.js"></script>
        <script src="<?php echo base_url(); ?>/bumbu/plugins/sweetalerts/custom-sweetalert.js"></script>

        <!-- END THEME GLOBAL STYLE -->
        <script>
            $(document).ready(function() {
                var tumbul = document.getElementById("tombol_save_foto_profile").disabled = true;
                var tumbul = document.getElementById("tombol_save_foto_back").disabled = true;
                $("#file_foto").change(function() {
                    var tumbul = document.getElementById("tombol_save_foto_profile").disabled = false;
                });
                $("#file_back").change(function() {
                    var tumbul = document.getElementById("tombol_save_foto_back").disabled = false;
                });
            });
        </script>
        <script>
            $('.dropify').dropify({
                messages: {
                    'default': 'Klik disini untuk mengunggah foto',
                    'replace': 'Klik disini untuk mengunggah foto',
                    'remove': 'Hapus',
                    'error': 'Ooops, ada yang salah.'
                },
                error: {
                    'fileSize': 'Ukuran file terlalu besar, maksimal ({{ value }}).',
                    'fileExtension': 'Hanya boleh menggunakan file ({{ value }}).'
                },
                tpl: {
                    filename: '',
                }
            });
        </script>
        <script>
            var alamat_upload_background = $("#save_background").attr("action");
            $("#save_background").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: alamat_upload_background,
                    type: "post",
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        var block = $('#save_background');
                        $(block).block({
                            message: '<span class="text-semibold"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin position-left"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg></i>&nbsp; Sedang upload</span>',
                            timeout: 0, //unblock after 2 seconds
                            overlayCSS: {
                                backgroundColor: '#fff',
                                opacity: 0.8,
                                cursor: 'wait'
                            },
                            css: {
                                border: 0,
                                padding: '10px 15px',
                                color: '#fff',
                                width: 'auto',
                                '-webkit-border-radius': 2,
                                '-moz-border-radius': 2,
                                backgroundColor: '#0e1726'
                            }
                        });
                    },
                    success: function(result) {
                        if (result == true) {
                            swal({
                                title: 'Berhasil',
                                text: 'Foto berhasil diunggah',
                                timer: 2000,
                                padding: '2em',
                                type: 'success',
                                onOpen: function() {
                                    swal.showLoading()
                                }
                            }).then(function(result) {
                                if (
                                    // Read more about handling dismissals
                                    result.dismiss === swal.DismissReason.timer
                                ) {
                                    location.reload();
                                }
                            })
                        } else {
                            console.log(result)

                        }
                    },
                });
            });
        </script>

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
                    beforeSend: function() {
                        var block = $('#save_foto');
                        $(block).block({
                            message: '<span class="text-semibold"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin position-left"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg></i>&nbsp; Sedang upload</span>',
                            timeout: 0, //unblock after 2 seconds
                            overlayCSS: {
                                backgroundColor: '#fff',
                                opacity: 0.8,
                                cursor: 'wait'
                            },
                            css: {
                                border: 0,
                                padding: '10px 15px',
                                color: '#fff',
                                width: 'auto',
                                '-webkit-border-radius': 2,
                                '-moz-border-radius': 2,
                                backgroundColor: '#0e1726'
                            }
                        });
                    },
                    processData: false,
                    contentType: false,
                    success: function(result) {
                        if (result == true) {
                            swal({
                                title: 'Berhasil',
                                text: 'Foto berhasil diunggah',
                                timer: 2000,
                                padding: '2em',
                                type: 'success',
                                allowOutsideClick: false,
                                onOpen: function() {
                                    swal.showLoading()
                                }
                            }).then(function(result) {
                                if (
                                    // Read more about handling dismissals
                                    result.dismiss === swal.DismissReason.timer
                                ) {
                                    location.reload();
                                }
                            })
                        } else {
                            tumbul
                            console.log(result)
                        }
                    },
                });
            });
        </script>
        <script>
            var alamat_profile = $("#simpan_profile").attr("action");
            $("#simpan_profile").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                var tumbul = document.getElementById("tombol_save_foto_back").disabled = true;

                $.ajax({
                    url: alamat_profile,
                    type: "post",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(result) {
                        if (result == true) {
                            swal({
                                title: 'Berhasil',
                                text: 'Data berhasil disimpan',
                                timer: 1000,
                                padding: '2em',
                                type: 'success',
                                onOpen: function() {
                                    swal.showLoading()
                                }
                            }).then(function(result) {
                                if (
                                    // Read more about handling dismissals
                                    result.dismiss === swal.DismissReason.timer
                                ) {}
                            })
                        } else {
                            console.log(result)

                        }
                    },
                });
            });
        </script>
        <script>
            var alamat_profile = $("#ganti_pass").attr("action");
            $("#ganti_pass").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: alamat_profile,
                    type: "post",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(result) {
                        if (result == 'oke') {
                            swal({
                                title: 'Berhasil',
                                text: 'Password Berhasil di ubah',
                                timer: 2000,
                                padding: '2em',
                                type: 'success',
                                onOpen: function() {
                                    swal.showLoading()
                                },
                            }).then(function(result) {
                                if (
                                    // Read more about handling dismissals
                                    result.dismiss === swal.DismissReason.timer
                                ) {}
                            })
                            $('#ganti_password').modal('hide')
                            $('#ganti_pass').trigger("reset")
                            $('#notif_check_password').html("")

                        } else {
                            swal({
                                title: 'Error',
                                text: 'Password lama salah',
                                timer: 2000,
                                padding: '2em',
                                type: 'error',
                                onOpen: function() {
                                    swal.showLoading()
                                }
                            })
                        }
                    },
                });
            });
        </script>