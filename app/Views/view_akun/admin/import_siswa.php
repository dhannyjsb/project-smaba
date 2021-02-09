        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>/bumbu/plugins/animate/animate.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link href="<?php echo base_url(); ?>/bumbu/assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url(); ?>/bumbu/plugins/sweetalerts/promise-polyfill.js"></script>
        <link href="<?php echo base_url(); ?>/bumbu/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/bumbu/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/bumbu/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="account-settings-container layout-top-spacing">
                    <div class="account-content">
                        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">

                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <?php echo form_open_multipart(base_url('akun/admin/importsiswa'), 'id="simpan_profile" class="section general-info"'); ?>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div id="contact" class="section contact">
                                        <div class="info">
                                            <h5 class="">IMPORT DATA DAPODIK</h5>
                                            <div class="row">
                                                <div class="col-md-11 mx-auto">
                                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                        <p class="mb-4">
                                                            Data Siswa dapat di unduh melalui aplikasi dari dapodik,
                                                            unduh Data Siswa dapodik dapat dilakukan pada tab Siswa,
                                                            pilih menu Unduh (pojok kiri bawah), setalah itu unduh Daftar Siswa
                                                        </p>

                                                        <p>
                                                            data yang di import dua kali akan menghapus semua data sebelumnya berdasarkan tahun pelajaran yg dipilih </p>
                                                    </div>
                                                    <?php
                                                    $errors = session()->getFlashdata('errors');
                                                    if (!empty($errors)) { ?>
                                                        <div class="alert alert-danger" role="alert">
                                                            Whoops! Ada kesalahan saat input data, yaitu:
                                                            <ul>
                                                                <?php foreach ($errors as $error) : ?>
                                                                    <li><?= esc($error) ?></li>
                                                                <?php endforeach ?>
                                                            </ul>
                                                        </div>
                                                    <?php } ?>
                                                    <?php
                                                    if (!empty(session()->getFlashdata('success'))) { ?>
                                                        <div class="alert alert-success">
                                                            <?php echo session()->getFlashdata('success'); ?>
                                                        </div>
                                                    <?php } ?>
                                                    <?php
                                                    if (!empty(session()->getFlashdata('errors-505'))) { ?>
                                                        <div class="alert alert-danger">
                                                            <?php echo session()->getFlashdata('errors-505'); ?>
                                                        </div>
                                                    <?php } ?>

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="email">File EXCEL</label>
                                                                <input name="dapo_file" type="file" class="form-control mb-4" id="customFile">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Tahun Pelajaran</label>
                                                                <select class="combo_tahun select2-icons form-control" id="combo_tahun" name="ta_input">
                                                                </select>
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

        <script src="<?php echo base_url(); ?>/bumbu/plugins/blockui/jquery.blockUI.min.js"></script>
        <!-- <script src="plugins/tagInput/tags-input.js"></script> -->
        <!-- BEGIN THEME GLOBAL STYLE -->

        <script src="<?php echo base_url(); ?>/bumbu/plugins/sweetalerts/sweetalert2.min.js"></script>
        <script src="<?php echo base_url(); ?>/bumbu/plugins/sweetalerts/custom-sweetalert.js"></script>
        <!-- END THEME GLOBAL STYLE -->
        <script>
            $(document).ready(function() {
                combo_reload();
                reload_hidden();
            })
        </script>
        <script>
            $("#combo_tahun").change(function() {
                reload_hidden();
            });

            function reload_hidden() {
                $.ajax({
                    url: "<?php echo base_url(); ?>/akun/admin/get_tahun_pelajaran",
                    method: "get",
                    async: false,
                    dataType: "json",
                    success: function(data) {
                        for (i = 0; i < data.length; i++) {
                            if (data[i].tahun_status == 1) {
                                $("input[name=tahun_sedang_aktif]").val(data[i].tahun_id).change();
                            }
                        }
                    },
                });
            }

            function combo_reload() {
                $.ajax({
                    url: "<?php echo base_url(); ?>/akun/admin/get_tahun_pelajaran",
                    method: "get",
                    async: true,
                    dataType: "json",
                    success: function(data) {
                        var html = "";
                        var i;
                        for (i = 0; i < data.length; i++) {
                            if (data[i].tahun_status == 1) {
                                html +=
                                    "<option value=" +
                                    data[i].tahun_pelajaran +
                                    " selected>" +
                                    data[i].tahun_pelajaran +
                                    "</option>";
                            } else {
                                html +=
                                    "<option value=" +
                                    data[i].tahun_pelajaran +
                                    ">" +
                                    data[i].tahun_pelajaran +
                                    "</option>";
                            }
                        }
                        $("#combo_tahun").html(html);
                    },
                });
            }
        </script>