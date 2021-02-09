<link href="<?php echo base_url(); ?>/bumbu/assets/css/components/tabs-accordian/custom-accordions.css" rel="stylesheet" type="text/css" />

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
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Nama (Tanpa Gelar)</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['nama']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  spasi_form">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Jenis Kelamin</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['jk']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  spasi_form">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['tempat_lahir']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  spasi_form">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['tanggal_lahir']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Nama Ibu Kandung</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['nama_ibu_kandung']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">No KK</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['kk']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">NIK</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['nik']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px;">NIP</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input " value="<?= $user['nip']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Agama</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['agama']; ?>" readonly>
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
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Alamat Jalan</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['alamat_jalan']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  spasi_form">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">RT</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['rt']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  spasi_form">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">RW</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['rw']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  spasi_form">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Dusun</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['nama_dusun']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Desa/Kelurahan</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['desa_kelurahan']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Kecamatan</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['kecamatan']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Kode POS</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['kode_pos']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">NPWP</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['npwp']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Nama Wajib Pajak</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['nama_wajib_pajak']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Kewarganegaraan</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['kewarganegaraan']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Status Perkawinan</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['status_perkawinan']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Nama Suami/Istri</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['nama_suami_istri']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">NIP Suami/Istri</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['nip_suami_istri']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Pekerjaan Suami/Istri</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['pekerjaan_suami_istri']; ?>" readonly>
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
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Jenis PTK</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['jenis_ptk']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Status Kepegawaian</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['status_kepegawaian']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Tugas Tambahan</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['tugas_tambahan']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">NIP</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['nip']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">NUPTK</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['nuptk']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">SK Pengangkatan</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['sk_pengangkatan']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">TMT Pengangkatan</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['tmt_pengangkatan']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Lembaga Pengangkatan</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['lembaga_pengangkatan']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">SK CPNS</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['sk_cpns']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">TMT CPNS</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['tanggal_cpns']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">TMT PNS</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['tmt_pns']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Sumber Gaji</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['sumber_gaji']; ?>" readonly>
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
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Lisensi Kepala Sekolah</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['sudah_lisensi_kepala_sekolah']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">NUKS</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['nuks']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Diklat Kepengawasn</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['pernah_diklat_kepengawasan']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Keahlian Braille</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['keahlian_braille']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Keahlian Bahasa Isyarat</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['keahlian_bahasa_isyarat']; ?>" readonly>
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
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Telepon Rumah</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['telepon']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">HP</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['hp']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm label_hitam" style="margin-top: 8px; font-size: 0.85rem!important;">Email</label>
                    <div class="col-sm-9">
                        <input type="nama" class="form-control back_input" style="font-size: 0.85rem!important;" value="<?= $user['email']; ?>" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>