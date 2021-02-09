        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <!-- END PAGE LEVEL PLUGINS -->
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link href="<?php echo base_url(); ?>/bumbu/assets/css/components/tabs-accordian/custom-tabs.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bumbu/assets/css/elements/alert.css">
        <link href="<?php echo base_url(); ?>/bumbu/plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />


        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="account-settings-container layout-top-spacing">
                    <div class="account-content">
                        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">

                            <div class="row">
                                <div class="col-lg-12 col-12 layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Border Tabs</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="widget-content widget-content-area border-tab">

                                            <ul class="nav nav-tabs mt-3" id="border-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="border-home-tab" data-toggle="tab" href="#border-home" role="tab" aria-controls="border-home" aria-selected="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                        </svg> Import Data Guru</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="border-profile-tab" data-toggle="tab" href="#border-profile" role="tab" aria-controls="border-profile" aria-selected="false"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                            <circle cx="12" cy="7" r="4"></circle>
                                                        </svg> Import Data Tendik</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content mb-4" id="border-tabsContent">
                                                <div class="tab-pane fade active show" id="border-home" role="tabpanel" aria-labelledby="border-home-tab">
                                                    <p class="dropcap  dc-outline-primary">
                                                        Import <b style="color: red;font-style: italic;">Data Guru</b> export dari dapodik, export <b style="color: red;font-style: italic;">Data Guru</b> dapodik dapat dilakukan pada tab <b style="color: red;font-style: italic;">Guru</b>, pilih menu <b style="color: red;font-style: italic;">Unduh</b> (pojok kiri bawah), setalah itu unduh <b style="color: red;font-style: italic;">Daftar Guru</b>
                                                    </p>
                                                    <div style="display: none;" id="error_div">
                                                        <span id="error_text"></span>
                                                    </div>
                                                    <?php echo form_open_multipart(base_url('akun/admin/importguru'), 'id="import_guru"'); ?>

                                                    <label>File Data Guru</label>
                                                    <input name="dapo_file" type="file" class="form-control mb-4" id="customFile" style=" overflow: hidden;">
                                                    <div class="as-footer-container" style="text-align: right;">
                                                        <button class="btn btn-primary">Simpan</button>
                                                    </div>

                                                    <?php echo form_close(); ?>
                                                </div>
                                                <div class="tab-pane fade" id="border-profile" role="tabpanel" aria-labelledby="border-profile-tab">
                                                    <p class="dropcap  dc-outline-primary">
                                                        Import <b style="color: red;font-style: italic;">Data Tendik</b> export dari dapodik, export <b style="color: red;font-style: italic;">Data Tendik</b> dapodik dapat dilakukan pada tab <b style="color: red;font-style: italic;">Tendik</b>, pilih menu <b style="color: red;font-style: italic;">Unduh</b> (pojok kiri bawah), setalah itu unduh <b style="color: red;font-style: italic;">Daftar Tendik</b>
                                                    </p>
                                                    <div style="display: none;" id="error_tendik">
                                                        <span id="error_text_tendik"></span>
                                                    </div>
                                                    <?php echo form_open_multipart(base_url('akun/admin/importptk'), 'id="import_tendik"'); ?>
                                                    <label for="email">File EXCEL</label>
                                                    <input name="dapo_file" type="file" class="form-control mb-4" id="customFile" style=" overflow: hidden;">
                                                    <div class="as-footer-container" style="text-align: right;">
                                                        <button class="btn btn-primary">Simpan</button>
                                                    </div>
                                                    <?php echo form_close(); ?>
                                                </div>
                                                <div class="tab-pane fade" id="border-contact" role="tabpanel" aria-labelledby="border-contact-tab">
                                                    <p class="dropcap  dc-outline-primary">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                    </p>
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
            var import_guru = $("#import_guru").attr("action");
            $("#import_guru").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: import_guru,
                    type: "post",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(result) {
                        if (result == "oke") {

                            $("#error_div").removeClass();
                            $("#error_div").show().addClass('alert alert-arrow-left alert-icon-left  mb-4 alert-light-success').append('<svg id="icon_notif" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>');
                            $("#error_text").empty();
                            $("#error_text").append(result);
                            $("#customFile").val(null);

                        } else {
                            $("#error_div").removeClass();
                            $("#error_div").show().addClass('alert alert-arrow-left alert-icon-left mb-4 alert-light-danger').append('<svg id="icon_notif" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>');
                            $("#error_text").empty();
                            $("#error_text").append(result);
                            $("#customFile").val(null);

                        }
                    },
                });
            });
        </script>
        <script>
            var import_tendik = $("#import_tendik").attr("action");
            $("#import_tendik").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: import_tendik,
                    type: "post",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(result) {
                        if (result == "oke") {
                            $("#error_tendik").removeClass();
                            $("#error_tendik").show().addClass('alert alert-arrow-left alert-icon-left  mb-4 alert-light-success').append('<svg id="icon_notif" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>');
                            $("#error_text_tendik").empty();
                            $("#error_text_tendik").append(result);
                            $("#customFile").val(null);

                        } else {
                            $("#error_tendik").removeClass();
                            $("#error_tendik").show().addClass('alert alert-arrow-left alert-icon-left mb-4 alert-light-danger').append('<svg id="icon_notif" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>');
                            $("#error_text_tendik").empty();
                            $("#error_text_tendik").append(result);
                            $("#customFile").val(null);

                        }
                    },
                });
            });
        </script>
        <script src="<?php echo base_url(); ?>/bumbu/plugins/file-upload/file-upload-with-preview.min.js"></script>