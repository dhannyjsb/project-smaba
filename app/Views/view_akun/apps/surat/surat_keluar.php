<?php $session = \Config\Services::session();
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/custom_dt_html5.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/dt-global_style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/responsive.dataTables.min.css">
<link href="<?php echo base_url(); ?>/bumbu/assets/css/tables/table-basic.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>/bumbu/assets/css/components/tabs-accordian/custom-tabs.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>/bumbu/plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/bumbu/plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/bumbu/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>/bumbu/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>/bumbu/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />

<!--  BEGIN CONTENT AREA  -->
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4 class="judul_widget"><?= $judul_header; ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="col-md-4">
                        </div>
                        <div class="table-responsive mb-4 mt-4">
                            <table id="table_surat_keluar" class="table table-bordered table-striped mb-4" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="width:2%;vertical-align: middle;">NO</th>
                                        <th style="width:2%;vertical-align: middle;">KODE</th>
                                        <th style="width:3%;vertical-align: middle;">BERKAS</th>
                                        <th style="width:24%;vertical-align: middle;">PERIHAL</th>
                                        <th style="width:20%;vertical-align: middle;">TUJUAN</th>
                                        <th style="width:8%;vertical-align: middle;">TANGGAL</th>
                                        <th style="width:8%;vertical-align: middle;">FILE</th>
                                        <th style="width:10%;vertical-align: middle;">AUTHOR</th>
                                        <th style="width:5%;vertical-align: middle;">ACT</th>
                                        <?php if ($user_info['is_admin'] == 1) { ?>
                                            <th style="width:10%;vertical-align: middle;">EDITOR</th>
                                            <th style="width:10%;vertical-align: middle;">DELETE</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody id="list_surat_keluar">

                                </tbody>
                            </table>
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
<!--  END CONTENT AREA  --
<!--  MODAL SINGLE VIEW  -->
<?php echo form_open_multipart(current_url(), 'class="form-horizontal" id="form_tambah_surat_keluar"');  ?>
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" keyboard="false">
    <div class="modal-dialog" role="document" id="modal-tambah">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Surat Keluar</h5>
                <h5 style="float: right;"><?php echo date("Y"); ?></h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label style="color: black;font-size: 0.85rem!important;">NO SURAT</label>
                            <input type=" text" class="form-control" style="font-size: 0.85rem!important;" name="no_surat" placeholder="NO SURAT" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label style="color: black;font-size: 0.85rem!important;">KODE SURAT</label>
                            <input type=" text" class="form-control" style="font-size: 0.85rem!important;" name="kode_surat" placeholder="KODE SURAT" value="-" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label style="color: black;font-size: 0.85rem!important;">NO BERKAS</label>
                            <input type=" text" class="form-control" style="font-size: 0.85rem!important;" name="no_berkas" placeholder="NO BERKAS" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label style="color: black;font-size: 0.85rem!important;">TANGGAL</label>

                            <input id="format_tanggal" name="tanggal_surat_keluar" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Isi Tanggal..">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label style="color: black;font-size: 0.85rem!important;">ALAMAT TUJUAN</label>
                    <input type="text" class="form-control" style="font-size: 0.85rem!important;" name="tujuan_surat" placeholder="ALAMAT TUJUAN" required>
                </div>
                <div class="form-group">
                    <label style="color: black;font-size: 0.85rem!important;">PERIHAL SURAT</label>
                    <input type="hidden" class="form-control" style="font-size: 0.85rem!important;" name="tahun_surat_keluar" value="<?php echo date("Y"); ?>">
                    <input type="hidden" class="form-control" style="font-size: 0.85rem!important;" name="pembuat_surat_keluar" value="<?= $user_info['id_unik']; ?>">
                    <textarea class="form-control" style="font-size: 0.85rem!important;" aria-label="With textarea" name="perihal_surat"> </textarea>

                </div>
                <div class="form-group">
                    <label for="basicInputFile" style="color: black;font-size: 0.85rem!important;">LAMPIRKAN FILE ?</label>

                    <select name="pakai_file" data-placeholder="pakai_file" class="select2-icons form-control" id="pakai_file">
                        <option value="1" data-icon="fa fa-wordpress">Ya</option>
                        <option value="2" data-icon="fa fa-codepen" selected>Tidak</option>
                    </select>
                </div>
                <fieldset class="form-group" style="display: none;" id="form_filenya">
                    <label for="basicInputFile" style="color: black;font-size: 0.85rem!important;">UPLOAD FILE</label>
                    <div class="custom-file">
                        <input name="file" type="file" class="form-control mb-4" id="customFile">
                    </div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark mb-2" data-dismiss="modal" id="tombol_batal">Tutup</button>
                <button type="submit" class="btn btn-success mb-2" id="tombol_tambah">Tambah</button>
            </div>
        </div>
    </div>
</div>

<?= form_close(); ?>
<div class="modal fade view_modal_data" id="view_modal_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" keyboard="false">
    <div class="modal-dialog" role="document" id="modal-edit">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Surat Keluar</h5>
                <button onclick="button_edit_form()" id="tombol_edit" class="btn btn-warning mb-2 mr-2 btn-rounded">Edit <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2">
                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                    </svg></button>
            </div>
            <?php echo form_open(base_url('/akun/app/arsipsurat/simpan_edit_surat_keluar'), 'class="form-horizontal" id="form_edit_surat_keluar"');  ?>
            <div class="modal-body load_modal_view">
            </div>
            <div class="modal-footer">
                <button type="button" id="tombol_tutup" class="btn btn-dark mb-2" data-dismiss="modal">Tutup</button>
                <button type="submit" id="tombol_simpan_edit" class="btn btn-success mb-2" disabled>Simpan</button>
            </div>
            <?= form_close(); ?>
            <script>
                function button_edit_form() {
                    var form = document.getElementById("form_edit_surat_keluar");
                    var elements = form.elements;
                    for (var i = 0, len = elements.length; i < len; ++i) {
                        elements[i].disabled = false;
                    }
                    document.getElementById("tombol_simpan_edit").disabled = false;
                    document.getElementById("tombol_tutup").innerHTML = "Batal";
                }
            </script>
        </div>
    </div>
</div>
<?php echo form_open(base_url(''), 'class="form-horizontal ", id="deleteUserForm"');  ?>
<div class=" modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true" data-backdrop="static" keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin akan menghapus data nomor <b><span id="delete_user"></span></b> ?</p>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="deleteUserId" id="deleteUserId" class="form-control" style="font-size: 0.85rem!important;">
                <input type="hidden" name="penghapus_surat_keluar" class="form-control" style="font-size: 0.85rem!important;" id="penghapus_surat_keluar" value="<?= $user_info['id_unik']; ?>">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-danger">Yes</button>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>
<?php echo form_open(base_url(''), 'class="form-horizontal ", id="deleteUserFormPermanen"');  ?>
<div class=" modal fade" id="deleteUserModalPermanen" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true" data-backdrop="static" keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin akan menghapus data nomor <b><span id="delete_no_surat"></span></b> ? secara <font style="color: red;font-weight: bold;">Permanen</font>
                </p>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="deleteUserId" id="deleteUserId" class="form-control" style="font-size: 0.85rem!important;">
                <input type="hidden" name="penghapus_surat_keluar" class="form-control" style="font-size: 0.85rem!important;" id="penghapus_surat_keluar" value="<?= $user_info['id_unik']; ?>">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-danger">Yes</button>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>
<!--  END MODAL SINGLE VIEW  -->
<!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->

<script src="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/datatables.js"></script>
<!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
<script src="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/button-ext/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/button-ext/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/dataTables.responsive.min.js"></script>

<script src="<?php echo base_url(); ?>/bumbu/plugins/flatpickr/flatpickr.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/plugins/flatpickr/custom-flatpickr.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/plugins/sweetalerts/sweetalert2.min.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/plugins/sweetalerts/custom-sweetalert.js"></script>

<script>
    $(document).ready(function() {

        pakai_file.onchange = function() {
            var val = this.options[this.selectedIndex].value;
            var x = document.getElementById("form_filenya");
            //  alert(val);
            if (val === "2") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }

        };

        var list_surat_keluar = $("#table_surat_keluar").DataTable({

            dom: '<"row"<"col-md-12"<"row"<"col-md-2"B><"col-md-2 search_bar filter_bar"l><"col-md-6 search_bar"f><"col-md-2"<"toolbar">> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-5"p>>> >',

            buttons: {
                buttons: [{
                        extend: 'excel',
                        className: 'btn'
                    },
                    {
                        extend: 'print',
                        className: 'btn',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 7]
                        }
                    }
                ],
            },
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Menampilkan halaman _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Cari...",
                "sLengthMenu": "Filter :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "Semua"]
            ],
            "pageLength": 10,
            responsive: true,
            processing: true,
            language: {
                processing: '<p class="btn btn-danger" type="button" disabled=""><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Loading...</p>',
            },
            ajax: {
                <?php if ($user_info['is_admin'] == 1) { ?> "url": "get_all_surat_keluar_admin/<?php echo date('Y') ?>",
                <?php } else { ?> "url": "get_all_surat_keluar/<?php echo date('Y') ?>",
                <?php } ?> "dataSrc": "",
            },
            columns: [{
                    orderable: true,
                    data: "no_surat_keluar"
                },
                {
                    orderable: false,
                    data: "second_surat_keluar"
                },

                {
                    orderable: false,
                    data: "no_berkas_keluar"
                },
                {
                    orderable: false,
                    data: "perihal_surat_keluar"
                },
                {
                    orderable: false,
                    data: "alamat_surat_keluar"
                },
                {
                    orderable: false,
                    data: "tanggal_surat_keluar"
                },

                {
                    orderable: false,
                    data: function(row, type, set) {
                        if (row.id_gdrive_sk == "-") {
                            return (
                                'Tidak ada File'
                            );
                        } else {
                            return (
                                '<div class="btn-group">' +
                                ' <a  class="btn btn-dark btn-sm" href="https://drive.google.com/file/d/' + row.id_gdrive_sk + '/view"  target="_blank" >Lihat</button>' +
                                ' </a>' +
                                '<div class="dropdown-menu" aria-labelledby="dropdownMenuReference27">' +
                                '</div>' +
                                '</div>'
                            );
                        }

                    },
                },
                {
                    orderable: false,
                    data: "pembuat"
                },
                {
                    orderable: false,
                    data: function(row, type, set) {
                        if (<?= $user_info['is_admin']; ?> == 1) {
                            if (row.deleted_at == '0000-00-00 00:00:00') {
                                return (
                                    '<div class="btn-group">' +
                                    ' <button style="margin-right: 0px;" type="button" class="btn btn-dark btn-sm" onclick="modal_edit_surat_keluar(' + row.surat_keluar_id + ')" data-toggle="modal" data-target=".view_modal_data">Lihat</button>' +
                                    ' <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference27" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">' +
                                    ' <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">' +
                                    '  <polyline points="6 9 12 15 18 9"></polyline>' +
                                    '</svg>' +
                                    ' </button>' +
                                    '<div class="dropdown-menu" aria-labelledby="dropdownMenuReference27">' +
                                    '<a class="dropdown-item deleteRecord" data-id="' +
                                    row.surat_keluar_id +
                                    '" data-nama="' +
                                    row.no_surat_keluar +
                                    row.second_surat_keluar +
                                    '" id="ajax-request">Hapus</a>' +
                                    '</div>' +
                                    '</div>'
                                );
                            } else {
                                return (
                                    '<div class="btn-group">' +
                                    ' <button style="margin-right: 0px;" type="button" class="btn btn-dark btn-sm" onclick="modal_edit_surat_keluar(' + row.surat_keluar_id + ')" data-toggle="modal" data-target=".view_modal_data">Lihat</button>' +
                                    ' <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference27" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">' +
                                    ' <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">' +
                                    '  <polyline points="6 9 12 15 18 9"></polyline>' +
                                    '</svg>' +
                                    ' </button>' +
                                    '<div class="dropdown-menu" aria-labelledby="dropdownMenuReference27">' +
                                    '<a class="dropdown-item restoreRecord" data-id="' +
                                    row.surat_keluar_id +
                                    '" data-nama="' +
                                    row.no_surat_keluar +
                                    row.second_surat_keluar +
                                    '" id="ajax-request">Batal Hapus</a>' +
                                    '<a class="dropdown-item deleteRecordPermanen" data-id="' +
                                    row.surat_keluar_id +
                                    '" data-no_surat="' +
                                    row.no_surat_keluar +
                                    row.second_surat_keluar +
                                    '" id="ajax-request">Hapus Permanen</a>' +
                                    '</div>' +

                                    '</div>'
                                );
                            }

                        } else {
                            if (row.pembuat_surat_keluar == "<?= $user_info['id_unik']; ?>") {
                                return (
                                    '<div class="btn-group">' +
                                    '<button style="margin-right: 0px;" type="button" class="btn btn-dark btn-sm" onclick="modal_edit_surat_keluar(' + row.surat_keluar_id + ')" data-toggle="modal" data-target=".view_modal_data">Lihat</button>' +
                                    '<button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference27" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">' +
                                    '<svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">' +
                                    '<polyline points="6 9 12 15 18 9"></polyline>' +
                                    '</svg>' +
                                    '</button>' +
                                    '<div class="dropdown-menu" aria-labelledby="dropdownMenuReference27">' +
                                    '<a class="dropdown-item deleteRecord" data-id="' +
                                    row.surat_keluar_id +
                                    '" data-nama="' +
                                    row.no_surat_keluar +
                                    row.second_surat_keluar +
                                    '" id="ajax-request">Hapus</a>' +
                                    '</div>' +
                                    '</div>'
                                );
                            } else {
                                return (
                                    '<div class="btn-group">' +
                                    '<button style="margin-right: 0px;" type="button" class="btn btn-dark btn-sm" onclick="modal_edit_surat_keluar(' + row.surat_keluar_id + ')" data-toggle="modal" data-target=".view_modal_data">Lihat</button>' +
                                    '</button>' +
                                    '<div class="dropdown-menu" aria-labelledby="dropdownMenuReference27">' +
                                    '</div>' +
                                    '</div>'
                                );
                            };
                        };

                    },
                },
                <?php if ($user_info['is_admin'] == 1) { ?> {
                        orderable: false,
                        data: "pengedit"
                    },
                    {
                        orderable: false,
                        data: "penghapus"
                    },
                <?php } ?>
            ],
        });
        $("div.toolbar").html("<a class='dt-button buttons-excel buttons-html5 btn' data-toggle='modal' data-target='#addModal'>Tambah</a>");

        list_surat_keluar.order([0, "desc"], [1, "desc"]).draw();

        $("#list_surat_keluar").on("click", ".editSurat", function() {
            var UserId = $(this).data("id");
            var nama_data = $(this).data("nama");
            $("#EditModal").modal("show");
            $("#delete_user").text("" + nama_data);
            $("#deleteUserId").val(UserId);
        });

        $("#list_surat_keluar").on("click", ".deleteRecord", function() {
            var UserId = $(this).data("id");
            var nama_data = $(this).data("nama");
            $("#deleteUserModal").modal("show");
            $("#delete_user").text("" + nama_data);
            $("#deleteUserId").val(UserId);
        });
        $("#list_surat_keluar").on("click", ".deleteRecordPermanen", function() {
            var UserId = $(this).data("id");
            var nama_data = $(this).data("no_surat");
            $("#deleteUserModalPermanen").modal("show");
            $("#delete_no_surat").text("" + nama_data);
            $("#deleteUserId").val(UserId);
        });

        $("#deleteUserForm").on("submit", function() {
            var UserId = $("#deleteUserId").val();
            var penghapus_surat_keluar = $("#penghapus_surat_keluar").val();
            var token = $('input[name="csrf_token_web"]').attr("value");
            $.ajax({
                type: "POST",
                url: "hapus_surat_keluar",
                dataType: "JSON",
                data: {
                    id: UserId,
                    csrf_token_web: token,
                    penghapus_surat_keluar: penghapus_surat_keluar,
                },
                success: function(data) {
                    if (data == false) {
                        Swal.fire({
                            position: "top-end",
                            type: "error",
                            title: "Data Gagal Dihapus",
                            showConfirmButton: false,
                            timer: 1500,
                            confirmButtonClass: "btn btn-primary",
                            buttonsStyling: false,
                        });
                        $("#deleteUserModal").modal("hide");
                    } else {
                        Swal.fire({
                            position: "top-end",
                            type: "success",
                            title: "Data Berhasil Dihapus",
                            showConfirmButton: false,
                            timer: 1500,
                            confirmButtonClass: "btn btn-primary",
                            buttonsStyling: false,
                        });
                        $("#" + UserId).remove();
                        $("#deleteUserId").val("");
                        $("#deleteUserModal").modal("hide");
                        list_surat_keluar.ajax.reload(function() {});
                    }
                },
            });
            return false;
        });
        $("#deleteUserFormPermanen").on("submit", function() {
            var UserId = $("#deleteUserId").val();
            var token = $('input[name="csrf_token_web"]').attr("value");
            $.ajax({
                type: "POST",
                url: "hapus_permanen_surat_keluar",
                dataType: "JSON",
                data: {
                    id: UserId,
                    csrf_token_web: token,
                },
                success: function(data) {
                    if (data == false) {
                        Swal.fire({
                            position: "top-end",
                            type: "error",
                            title: "Data Gagal Dihapus",
                            showConfirmButton: false,
                            timer: 1500,
                            confirmButtonClass: "btn btn-primary",
                            buttonsStyling: false,
                        });
                        $("#deleteUserModalPermanen").modal("hide");
                    } else {
                        Swal.fire({
                            position: "top-end",
                            type: "success",
                            title: "Data Berhasil Dihapus secara permanen",
                            showConfirmButton: false,
                            timer: 1500,
                            confirmButtonClass: "btn btn-primary",
                            buttonsStyling: false,
                        });
                        $("#" + UserId).remove();
                        $("#deleteUserId").val("");
                        $("#deleteUserModalPermanen").modal("hide");
                        list_surat_keluar.ajax.reload(function() {});
                    }
                },
            });
            return false;
        });
        var form_tambah_surat_keluar = $("#form_tambah_surat_keluar").attr("action");
        $("#form_tambah_surat_keluar").submit(function(e) {
            $('#tombol_tambah').prop('disabled', true);
            $('#tombol_batal').prop('disabled', true);

            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: form_tambah_surat_keluar,
                type: "post",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    var block = $('#modal-tambah');
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
                    $('#tombol_tambah').prop('disabled', false);
                    $('#tombol_batal').prop('disabled', false);
                    if (result == 1) {
                        $('#tombol_tambah').prop('disabled', false);
                        $('#tombol_batal').prop('disabled', false);
                        $('#modal-tambah').unblock()

                        Swal.fire({
                            position: "top-end",
                            type: "error",
                            title: "Tanggal harus diisi",
                            showConfirmButton: false,
                            timer: 1500,
                            confirmButtonClass: "btn btn-primary",
                            buttonsStyling: false,

                        });
                    } else {
                        $('#modal-tambah').unblock()

                        $("#addModal").modal("toggle");
                        $('#tombol_tambah').prop('disabled', false);
                        $('#tombol_batal').prop('disabled', false);

                        $("#form_tambah_surat_keluar")[0].reset();
                        list_surat_keluar.ajax.reload(function() {});
                        Swal.fire({
                            position: "top-end",
                            type: "success",
                            title: "Data berhasil ditambahkan",
                            showConfirmButton: false,
                            timer: 1500,
                            confirmButtonClass: "btn btn-primary",
                            buttonsStyling: false,
                        });
                    }
                },
                error: function(result) {
                    alert("error");
                    $('#tombol_tambah').prop('disabled', false);
                    $('#tombol_batal').prop('disabled', false);
                },
            });
        });

        var form_edit_surat_keluar = $("#form_edit_surat_keluar").attr("action");
        $("#form_edit_surat_keluar").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: form_edit_surat_keluar,
                type: "post",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    var block = $('#modal-edit');
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
                    if (result == 1) {
                        $('#modal-edit').unblock()

                        Swal.fire({
                            position: "top-end",
                            type: "error",
                            title: "Tanggal harus diisi",
                            showConfirmButton: false,
                            timer: 1500,
                            confirmButtonClass: "btn btn-primary",
                            buttonsStyling: false,
                        });
                    } else {
                        $('#modal-edit').unblock()

                        $("#view_modal_data").modal("toggle");
                        $("#form_edit_surat_keluar")[0].reset();
                        list_surat_keluar.ajax.reload(function() {});
                        Swal.fire({
                            position: "top-end",
                            type: "success",
                            title: "Data berhasil dismpan",
                            showConfirmButton: false,
                            timer: 1500,
                            confirmButtonClass: "btn btn-primary",
                            buttonsStyling: false,
                        });
                    }
                },
                error: function(result) {
                    alert("error");
                },
            });
        });
    });
</script>
<script type="text/javascript">
    function modal_edit_surat_keluar(id) {
        var csrfName = '<?= csrf_token(); ?>',
            csrfHash = '<?= csrf_hash(); ?>';
        var dataJson = {
            [csrfName]: csrfHash,
            id: id
        };
        $('.load_modal_view').html();
        $.ajax({
            type: "POST",

            url: "edit_surat_keluar",
            data: dataJson,
            success: function(response) {
                if (response) {
                    $('.load_modal_view').html(response);
                }
            }
        });
    }
</script>