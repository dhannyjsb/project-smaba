<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/custom_dt_html5.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/dt-global_style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/responsive.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bumbu/assets/css/forms/switches.css">
<script src="<?php echo base_url(); ?>/bumbu/plugins/sweetalerts/promise-polyfill.js"></script>
<link href="<?php echo base_url(); ?>/bumbu/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>/bumbu/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>/bumbu/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />


<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="col-md-12">
                        <div class="btn-group float-right mt-2" role="group">
                            <button type="button" class="btn btn-primary mb-2 mr-2 " data-toggle="modal" data-target="#addModal" style="margin-top: 13px;">
                                Tambah Tahun
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive mb-4 mt-4">

                        <table id="table_tahun" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>TAHUN PELAJARAN</th>
                                    <th>KETERANGAN</th>
                                    <th>STATUS</th>
                                    <th>ACT</th>
                                </tr>
                            </thead>
                            <tbody id="list_tahun">

                            </tbody>
                        </table>
                    </div>
                    <?php echo form_open(base_url('akun/admin/tahunpelajaran'), 'class="form-horizontal" id="simpan_pelajaran_aktif"');  ?>
                    <div class="row">
                        <div class="col-sm-9">

                        </div>

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>Tahun Aktif</label>
                                <select class="combo_tahun select2-icons form-control" id="combo_tahun" name="tahun_baru">
                                </select>
                                <div><input type="hidden" value="" name="tahun_sedang_aktif" id="tahun_sedang_aktif"></div>

                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <br>
                                <button type="submit" class="btn btn-primary mb-2 mr-2 float-right" style="margin-top: 13px;">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                    <?= form_close(); ?>

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
<?php echo form_open(base_url('akun/admin/tambahtahunpelajaran'), 'class="form-horizontal" id="form_tahun_pelajaran"');  ?>
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah tahun pelajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Tahun</label>
                    <input type="text" class="form-control" id="mask_tahun_pelajaran" name="tahun_pelajaran" placeholder="Tahun Pelajaran" required>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" name="tahun_keterangan" placeholder="Keterangan" required>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>
<!--  END CONTENT AREA  --

<!--  MODAL SINGLE VIEW  -->
<!--  END MODAL SINGLE VIEW  -->
<!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->

<script src="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/datatables.js"></script>
<!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
<script src="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/button-ext/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/button-ext/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/plugins/input-mask/jquery.inputmask.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/plugins/sweetalerts/sweetalert2.min.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/plugins/sweetalerts/custom-sweetalert.js"></script>
<script>
    var list_tahun = $("#table_tahun").DataTable({
        dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
        buttons: {
            buttons: [{
                    extend: 'excel',
                    className: 'btn'
                },
                {
                    extend: 'print',
                    className: 'btn'
                }
            ]
        },
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 10,
        processing: true,
        responsive: true,
        dom: "lrtip",
        lengthChange: false,
        paging: false,
        bInfo: false,
        order: [],
        ajax: {
            url: "<?php echo base_url(); ?>/akun/admin/get_tahun_pelajaran",
            dataSrc: "",
        },

        columns: [{
                orderable: false,
                data: null
            },
            {
                orderable: false,
                data: "tahun_pelajaran"
            },
            {
                orderable: false,
                data: "tahun_keterangan"
            },
            {
                orderable: false,
                data: function(row, type, set) {
                    if (row.tahun_status == 1) {
                        return (
                            '<div class="custom-control custom-switch switch-lg custom-switch-success mr-2 mb-1">' +
                            '<input disabled type="checkbox" class="custom-control-input" checked id="customSwitch' +
                            row.tahun_id +
                            '">' +
                            '<label class="custom-control-label" for="customSwitch' +
                            row.tahun_id +
                            '">' +
                            "</label>" +
                            "</div>"
                        );
                    } else {
                        return (
                            '<div class="custom-control custom-switch switch-lg custom-switch-success mr-2 mb-1">' +
                            '<input disabled type="checkbox" class="custom-control-input" id="customSwitch' +
                            row.tahun_id +
                            '">' +
                            '<label class="custom-control-label" for="customSwitch' +
                            row.tahun_id +
                            '">' +
                            "</label>" +
                            "</div>"
                        );
                    }
                },
            },
            {
                data: function(row, type, set) {
                    return (
                        '<button class="btn btn-danger btn-sm deleteRecord" data-id="' +
                        row.tahun_id +
                        '" data-nama="' +
                        row.tahun_pelajaran +
                        '" id="ajax-request">Hapus</button>'
                    );
                },
            },
        ],
    });

    list_tahun
        .on("order.dt search.dt", function() {
            list_tahun
                .column(0, {
                    search: "applied",
                    order: "applied",
                })
                .nodes()
                .each(function(cell, i) {
                    cell.innerHTML = i + 1;
                });
        })
        .draw();
</script>
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
                            data[i].tahun_id +
                            " selected>" +
                            data[i].tahun_pelajaran +
                            "</option>";
                    } else {
                        html +=
                            "<option value=" +
                            data[i].tahun_id +
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
<script>
    var simpan_pelajaran_aktif = $("#simpan_pelajaran_aktif").attr("action");
    $("#simpan_pelajaran_aktif").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: simpan_pelajaran_aktif,
            type: "post",
            data: formData,
            processData: false,
            contentType: false,
            success: function(result) {
                list_tahun.ajax.reload(function() {});
                Swal.fire({
                    position: "top-end",
                    type: "success",
                    title: "Tahun berhasil diubah",
                    showConfirmButton: false,
                    timer: 1500,
                    confirmButtonClass: "btn btn-primary",
                    buttonsStyling: false,
                });
            },
            error: function(result) {
                alert("error");
            },
        });
    });
</script>
<script>
    var tahun_pelajaran = $("#form_tahun_pelajaran").attr("action");
    $("#form_tahun_pelajaran").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: tahun_pelajaran,
            type: "post",
            data: formData,
            processData: false,
            contentType: false,
            success: function(result) {
                $("#addModal").modal("toggle");
                list_tahun.ajax.reload(function() {});
                combo_reload();
                reload_hidden();
                Swal.fire({
                    position: "top-end",
                    type: "success",
                    title: "Tahun berhasil ditambahkan",
                    showConfirmButton: false,
                    timer: 1500,
                    confirmButtonClass: "btn btn-primary",
                    buttonsStyling: false,
                });
            },
            error: function(result) {
                alert("error");
            },
        });
    });
</script>
<script>
    $("#mask_tahun_pelajaran").inputmask("9999/9999");
</script>