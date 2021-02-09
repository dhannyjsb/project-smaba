<link href="<?php echo base_url(); ?>/bumbu/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">

<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-five" style="height: auto!important;">
                    <div class="widget-content">
                        <div class="header">
                            <div class="header-body">
                                <h6>Status Data</h6>
                            </div>
                        </div>
                        <?php if ($user_info['is_sync'] == 1 and $link_data == 1) { ?>
                            <div class="w-content">
                                <div class="">
                                    <div class="status_sync_icon_oke">
                                        <svg width="45" height="45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>
                                    </div>
                                    <p class="task-completed"><span>Synced</span></p>
                                    <p class="task-hight-priority"><span>Data sudah sesuai dengan dapodik</span></p>
                                </div>
                            </div>
                            <?php }
                        if ($user_info['is_sync'] == 0) {
                            if ($link_data == 1) { ?>
                                <div class="w-content">
                                    <div class="">
                                        <div class="status_sync_icon_belum">
                                            <svg width="45" height="45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon">
                                                <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                            </svg>
                                        </div>
                                        <p class="task-completed"><span>Email sesuai dengan data di Dapodik</span></p>
                                        <p class="task-oke" style="font: italic;"><?= $info_pribadi['email']; ?></p>
                                        <p class="task-hight-priority"><span>Tetapi Data belum sesuai dengan akun</span></p>
                                        <?php echo form_open(base_url('akun/sync')); ?>
                                        <button> Sesuaikan </button>
                                        <?php echo form_close(); ?>

                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="w-content">
                                    <div class="">
                                        <div class="status_sync_icon_belum">
                                            <svg width="45" height="45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="15" y1="9" x2="9" y2="15"></line>
                                                <line x1="9" y1="9" x2="15" y2="15"></line>
                                            </svg>
                                        </div>
                                        <p class="task-hight-priority"><span>Email tidak terdafatar di dapodik</span></p>
                                        <p class="task-hight-priority"><span>Hubungi admin</span></p>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-five">
                    <div class="widget-content">
                        <div class="header">
                            <div class="header-body">
                                <h6>Statistik</h6>
                            </div>
                        </div>
                        <div class="w-content">
                            <h4 class="text-center">Tahun Pelajaran</h4>
                            <h2 class="text-center"><?= $tahun_aktif; ?></h2>

                            <ul class="list-group list-group-flush customer-info">
                                <li class="list-group-item d-flex justify-content-between">
                                    <div class="series-info align-self-center">
                                        <i class="statistik text-primary"></i>
                                        <span class="text-bold-700">Jumlah Rombel</span>
                                    </div>
                                    <div class="font-medium-4 text-bold-700">
                                        <span><?= $total_kelas; ?></span>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between ">
                                    <div class="series-info align-self-center">
                                        <i class="statistik text-warning"></i>
                                        <span class="text-bold-600">Jumlah Siswa</span>
                                    </div>
                                    <div class="font-medium-4 text-bold-700">
                                        <span class="text-bold-600"><?= $data_siswa['jumlah_siswa']; ?></span>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between ">
                                    <div class="series-info align-self-center">
                                        <i class="statistik text-danger"></i>
                                        <span class="text-bold-600">Siswa Laki-laki</span>
                                    </div>
                                    <div class="font-medium-4 text-bold-700">
                                        <span class="text-bold-600"><?= $data_siswa['laki']; ?></span>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between ">
                                    <div class="series-info align-self-center">
                                        <i class="statistik text-info"></i>
                                        <span class="text-bold-600">Siswa Perempuan</span>
                                    </div>
                                    <div class="font-medium-4 text-bold-700">
                                        <span class="text-bold-600"><?= $data_siswa['perempuan']; ?></span>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between ">
                                    <div class="series-info align-self-center">
                                        <i class="statistik text-success"></i>
                                        <span class="text-bold-600">Guru</span>
                                    </div>
                                    <div class="font-medium-4 text-bold-700">
                                        <span class="text-bold-600"><?= $data_guru['jumlah_gtk'];; ?></span>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between ">
                                    <div class="series-info align-self-center">
                                        <i class="statistik text-warning"></i>
                                        <span class="text-bold-600">Tenaga Pendidik</span>
                                    </div>
                                    <div class="font-medium-4 text-bold-700">
                                        <span class="text-bold-600"><?= $data_tendik['jumlah_ptk']; ?></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                            <div class="w-info">
                                <h6 class="value">Progres Data</h6>
                                <p class="">Siswa Only</p>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-three">
                    <div class="widget-heading">
                        <div class="">
                            <h5 class="">Jumlah Siswa Tahun <?= $tahun_aktif; ?></h5>
                        </div>

                        <div class="dropdown  custom-dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="uniqueVisitors" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="uniqueVisitors">
                                <a class="dropdown-item" href="javascript:void(0);">View</a>
                                <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                <a class="dropdown-item" href="javascript:void(0);">Download</a>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content">
                        <div id="grafik_kelas">
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

<!-- BEGIN PAGE LEVEL <?php echo base_url(); ?>/bumbu/plugins/CUSTOM SCRIPTS -->
<script src="<?php echo base_url(); ?>/bumbu/plugins/apex/apexcharts.min.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/assets/js/dashboard/dash_1.js"></script>
<script src="<?php echo base_url(); ?>/bumbu/plugins/apex/apexcharts.min.js"></script>

<!-- BEGIN PAGE LEVEL <?php echo base_url(); ?>/bumbu/plugins/CUSTOM SCRIPTS -->
<?php
//Inisialisasi nilai variabel awal
$kelas = "";
$jumlah_laki = null;
$jumlah_perempuan = null;
$total = null;
foreach ($semua_kelas as $item) {
    $jur = $item->kelas;
    $kelas .= "'$jur'" . ", ";

    $jum1 = $item->laki;
    $jumlah_laki .= "$jum1" . ", ";
    $jum2 = $item->perempuan;
    $jumlah_perempuan .= "$jum2" . ", ";
    $jum3 = $item->jumlah_siswa;
    $total .= "$jum3" . ", ";
}
?>
<script>
    $(window).on("load", function() {


        var options = {
            series: [{
                name: "Laki-Laki",
                data: [<?= $jumlah_laki; ?>],
                borderColor: "transparent",
            }, {
                name: 'Perempuan',
                data: [<?= $jumlah_perempuan; ?>],
                borderColor: "transparent",
            }],
            chart: {
                type: 'bar',
                height: 350,
                stacked: true,
                toolbar: {
                    show: true
                },
                zoom: {
                    enabled: true
                }
            },
            annotations: {
                points: [

                    <?php foreach ($semua_kelas as $item) {
                        $kelas2 = "";
                        $total2 = null;
                        $jur = $item->kelas;
                        $kelas2 .= "x: '$jur'";
                        $jum4 = $item->jumlah_siswa;
                        $total2 .= "$jum4";
                    ?> {
                            <?= $kelas2; ?>,
                            label: {
                                borderColor: '#775DD0',
                                offsetY: 0,
                                class: 'asdas',
                                style: {
                                    color: '#fff',
                                    background: '#775DD0',
                                },
                                text: '<?= $total2; ?>',
                            }
                        },
                    <?php } ?>


                ]
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        position: 'bottom',
                        offsetX: -10,
                        offsetY: 0
                    }
                }
            }],
            plotOptions: {
                bar: {
                    horizontal: false,
                },
            },
            xaxis: {
                type: 'text',
                categories: [<?= $kelas; ?>],
            },

            tooltip: {
                followCursor: true,
                shared: false,
                custom: function({
                    series,
                    seriesIndex,
                    dataPointIndex,
                    w
                }) {
                    let currentTotal = 0
                    series.forEach((s) => {
                        currentTotal += s[dataPointIndex]
                    })
                    return '<div class="custom-tooltip">' +
                        '<span><b>Total: </b>' + currentTotal + '</span>' +
                        '</div>'
                }
            },
            legend: {
                position: 'right',
                offsetY: 40
            },
            fill: {
                opacity: 1
            }
        };

        var chart = new ApexCharts(document.querySelector("#grafik_kelas"), options);
        chart.render();

    });
</script>