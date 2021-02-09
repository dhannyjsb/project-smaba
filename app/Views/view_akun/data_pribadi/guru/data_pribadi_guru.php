<link href="<?php echo base_url(); ?>/bumbu/assets/css/components/tabs-accordian/custom-accordions.css" rel="stylesheet" type="text/css" />

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="account-settings-container layout-top-spacing">
            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                    <div class="row layout-top-spacing">
                        <div class="col-lg-12 col-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4 class="judul_widget"><?= $judul_header; ?></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div id="iconsAccordion" class="accordion-icons no-outer-spacing">
                                        <div class="card">
                                            <div class="card-header" id="headingOne3">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="collapsed" data-toggle="collapse" data-target="#iconAccordionOne" aria-expanded="true" aria-controls="iconAccordionOne">
                                                        <div class="accordion-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                                                                <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                                                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                                            </svg></div>
                                                        Identitas <div class="icons"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                                <polyline points="6 9 12 15 18 9"></polyline>
                                                            </svg></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div id="iconAccordionOne" class="collapse" aria-labelledby="headingOne3" data-parent="#iconsAccordion">
                                                <div class="card-body ">
                                                    <div class="form-group row  spasi_form">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Nama (Tanpa Gelar)</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['nama']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  spasi_form">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Jenis Kelamin</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['jk']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  spasi_form">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Tempat Lahir</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['tempat_lahir']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  spasi_form">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Tanggal Lahir</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['tanggal_lahir']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Nama Ibu Kandung</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['nama_ibu_kandung']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">No KK</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['kk']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">NIK</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['nik']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">NIP</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['nip']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Agama</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['agama']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo3">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="collapsed" data-toggle="collapse" data-target="#iconAccordionTwo" aria-expanded="false" aria-controls="iconAccordionTwo">
                                                        <div class="accordion-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
                                                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                                            </svg></div>
                                                        Data Pribadi <div class="icons"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                                <polyline points="6 9 12 15 18 9"></polyline>
                                                            </svg></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div id="iconAccordionTwo" class="collapse" aria-labelledby="headingTwo3" data-parent="#iconsAccordion">
                                                <div class="card-body ">
                                                    <div class="form-group row  spasi_form">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Alamat Jalan</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['alamat_jalan']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  spasi_form">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">RT</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['rt']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  spasi_form">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">RW</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['rw']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  spasi_form">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Dusun</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['nama_dusun']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Desa/Kelurahan</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['desa_kelurahan']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Kecamatan</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['kecamatan']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Kode POS</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['kode_pos']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">NPWP</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['npwp']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Nama Wajib Pajak</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['nama_wajib_pajak']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Kewarganegaraan</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['kewarganegaraan']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Status Perkawinan</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['status_perkawinan']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Nama Suami/Istri</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['nama_suami_istri']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">NIP Suami/Istri</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['nip_suami_istri']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Pekerjaan Suami/Istri</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['pekerjaan_suami_istri']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree8">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="collapsed" data-toggle="collapse" data-target="#iconAccordionThree" aria-expanded="false" aria-controls="iconAccordionThree">
                                                        <div class="accordion-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout">
                                                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                                <line x1="3" y1="9" x2="21" y2="9"></line>
                                                                <line x1="9" y1="21" x2="9" y2="9"></line>
                                                            </svg></div>
                                                        Kepegawaian <div class="icons"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                                <polyline points="6 9 12 15 18 9"></polyline>
                                                            </svg></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div id="iconAccordionThree" class="collapse" aria-labelledby="headingThree8" data-parent="#iconsAccordion">
                                                <div class="card-body ">
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Jenis PTK</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['jenis_ptk']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Status Kepegawaian</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['status_kepegawaian']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Tugas Tambahan</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['tugas_tambahan']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">NIP</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['nip']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">NUPTK</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['nuptk']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">SK Pengangkatan</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['sk_pengangkatan']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">TMT Pengangkatan</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['tmt_pengangkatan']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Lembaga Pengangkatan</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['lembaga_pengangkatan']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">SK CPNS</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['sk_cpns']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">TMT CPNS</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['tanggal_cpns']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">TMT PNS</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['tmt_pns']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Sumber Gaji</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['sumber_gaji']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree8">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="collapsed" data-toggle="collapse" data-target="#iconAccordionFour" aria-expanded="false" aria-controls="iconAccordionFour">
                                                        <div class="accordion-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout">
                                                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                                <line x1="3" y1="9" x2="21" y2="9"></line>
                                                                <line x1="9" y1="21" x2="9" y2="9"></line>
                                                            </svg></div>
                                                        Kompetensi Khusus <div class="icons"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                                <polyline points="6 9 12 15 18 9"></polyline>
                                                            </svg></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div id="iconAccordionFour" class="collapse" aria-labelledby="headingThree8" data-parent="#iconsAccordion">
                                                <div class="card-body ">
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Lisensi Kepala Sekolah</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['sudah_lisensi_kepala_sekolah']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">NUKS</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['nuks']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Diklat Kepengawasn</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['pernah_diklat_kepengawasan']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Keahlian Braille</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['keahlian_braille']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Keahlian Bahasa Isyarat</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['keahlian_bahasa_isyarat']; ?>" readonly>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree8">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="collapsed" data-toggle="collapse" data-target="#iconAccordionFive" aria-expanded="false" aria-controls="iconAccordionFive">
                                                        <div class="accordion-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout">
                                                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                                <line x1="3" y1="9" x2="21" y2="9"></line>
                                                                <line x1="9" y1="21" x2="9" y2="9"></line>
                                                            </svg></div>
                                                        Kontak <div class="icons"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                                <polyline points="6 9 12 15 18 9"></polyline>
                                                            </svg></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div id="iconAccordionFive" class="collapse" aria-labelledby="headingThree8" data-parent="#iconsAccordion">
                                                <div class="card-body ">
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Telepon Rumah</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['telepon']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">HP</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['hp']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row  ">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="nama" class="form-control back_input " value="<?= $info_pribadi['email']; ?>" readonly>
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
<script src="<?php echo base_url(); ?>/bumbu/assets/js/components/ui-accordions.js"></script>

<!--  END CONTENT AREA  -->