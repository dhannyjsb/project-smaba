<?php $session = \Config\Services::session();
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/custom_dt_html5.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/dt-global_style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/responsive.dataTables.min.css">
<link href="<?php echo base_url(); ?>/bumbu/assets/css/tables/table-basic.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>/bumbu/assets/css/components/tabs-accordian/custom-tabs.css" rel="stylesheet" type="text/css" />


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
                        <div class="table-responsive mb-4 mt-4">
                            <table id="table_rombel" class="table table-bordered table-striped mb-4 " style="width:100%;">
                                <thead>
                                    <th>No</th>
                                    <th>Kelas</th>
                                    <th style="text-align:left">Laki-Laki</th>
                                    <th style="text-align:left">Perempuan</th>
                                    <th style="text-align:left">Jumlah</th>
                                    <th>Act</th>
                                </thead>
                                <tbody id="list_rombel" class="table_rombel_body">

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

<!--  END MODAL SINGLE VIEW  -->
<!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->

<script src="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/datatables.js"></script>
<!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
<script src="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/button-ext/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/button-ext/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/plugins/table/datatable/dataTables.responsive.min.js"></script>

<script>
    var list_rombel = $('#table_rombel').DataTable({
        dom: '<"row"<"col-md-12"<"row"<"col-md-2"B><"col-md-2 search_bar filter_bar"l><"col-md-6 search_bar"f>>><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-5"p>>> >',
        buttons: {
            buttons: [{
                    extend: 'excel',
                    className: 'btn'
                },
                {
                    extend: 'print',
                    className: 'btn',
                    exportOptions: {
                        columns: [1, 2, 3, 4]
                    }

                }
            ]
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
        columnDefs: [{
                responsivePriority: 1,
                targets: 0
            },
            {
                responsivePriority: 10001,
                targets: 2
            },
            {
                responsivePriority: 2,
                targets: 4
            }
        ],
        processing: true,
        language: {
            processing: '<p class="btn btn-danger" type="button" disabled=""><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Loading...</p>',
        },
        ajax: {
            url: "<?php echo base_url(); ?>/akun/app/rombel/list_rombel",
            dataSrc: "",
        },

        columns: [{
                data: null
            },
            {
                data: "kelas"
            },
            {
                data: "laki"
            },
            {
                data: "perempuan"
            },
            {
                data: "jumlah_siswa"
            },
            {
                data: function(row, type, set) {

                    return (
                        '<div class="btn-group">' +
                        ' <a type="button" class="btn btn-dark btn-sm" href="<?= base_url() ?>/akun/app/rombel/per_kelas/' + row.kelas + '">Lihat</button>' +
                        ' </a>' +
                        '<div class="dropdown-menu" aria-labelledby="dropdownMenuReference27">' +
                        '</div>' +
                        '</div>'
                    );

                },
            },
        ],
    });
    $.fn.DataTable.ext.pager.numbers_length = 5;
    list_rombel
        .on("order.dt search.dt", function() {
            list_rombel
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