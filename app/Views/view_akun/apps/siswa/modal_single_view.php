<h6 style="text-align: center;"><B><?= esc($user['nama']); ?></B></h6>
<ul class="nav nav-tabs  mb-3 mt-3" id="simpletab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="alamat-tab" data-toggle="tab" href="#alamat" role="tab" aria-controls="alamat" aria-selected="false">Alamat</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="sosial-tab" data-toggle="tab" href="#sosial" role="tab" aria-controls="sosial" aria-selected="false">Sosial</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="orang_tua-tab" data-toggle="tab" href="#orang_tua" role="tab" aria-controls="orang_tua" aria-selected="false">Orang Tua</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="periodik-tab" data-toggle="tab" href="#periodik" role="tab" aria-controls="periodik" aria-selected="false">Periodik</a>
    </li>
</ul>
<div class="tab-content" id="simpletabContent">
    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="row">
            <div class="col-xl-6">
                <div class="table-responsive">
                    <table class="table table-bordered mb-4">
                        <tbody>
                            <tr>
                                <td>NIPD</td>
                                <td>:</td>
                                <td><?= esc($user['nipd']); ?></td>
                            </tr>
                            <tr>
                                <td>NISN</td>
                                <td>:</td>
                                <td><?= esc($user['nisn']); ?></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><?= esc($user['nama']); ?></td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td>
                                <td>:</td>
                                <td><?= esc($user['tempat_lahir']); ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td><?= esc($user['tanggal_lahir']); ?></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>:</td>
                                <td><?= esc($user['agama']); ?></td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td>:</td>
                                <td><?= esc($user['nik']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="table-responsive">
                    <table class="table table-bordered mb-4">
                        <tbody>
                            <tr>
                                <td>Rombel</td>
                                <td>:</td>
                                <td><?= esc($user['rombel_saat_ini']); ?></td>
                            </tr>
                            <tr>
                                <td>Nomor Akta</td>
                                <td>:</td>
                                <td><?= esc($user['no_registrasi_akta_lahir']); ?></td>
                            </tr>
                            <tr>
                                <td>Nomor UN</td>
                                <td>:</td>
                                <td><?= esc($user['no_peserta_ujian_nasional']); ?></td>
                            </tr>
                            <tr>
                                <td>No Ijazah</td>
                                <td>:</td>
                                <td><?= esc($user['no_seri_ijazah']); ?></td>
                            </tr>
                            <tr>
                                <td>Sekolah Asal</td>
                                <td>:</td>
                                <td><?= esc($user['sekolah_asal']); ?></td>
                            </tr>
                            <tr>
                                <td>Anak Ke</td>
                                <td>:</td>
                                <td><?= esc($user['anak_ke']); ?></td>
                            </tr>
                            <tr>
                                <td>No KK</td>
                                <td>:</td>
                                <td><?= esc($user['no_kk']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="alamat" role="tabpanel" aria-labelledby="alamat-tab">
        <div class="row">
            <div class="col-xl-6">
                <div class="table-responsive">
                    <table class="table table-bordered mb-4">
                        <tbody>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?= esc($user['alamat']); ?></td>
                            </tr>
                            <tr>
                                <td>RT</td>
                                <td>:</td>
                                <td><?= esc($user['rt']); ?></td>
                            </tr>
                            <tr>
                                <td>RW</td>
                                <td>:</td>
                                <td><?= esc($user['rw']); ?></td>
                            </tr>
                            <tr>
                                <td>Dusun</td>
                                <td>:</td>
                                <td><?= esc($user['dusun']); ?></td>
                            </tr>
                            <tr>
                                <td>Keluran</td>
                                <td>:</td>
                                <td><?= esc($user['kelurahan']); ?></td>
                            </tr>
                            <tr>
                                <td>Kecamatan</td>
                                <td>:</td>
                                <td><?= esc($user['kecamatan']); ?></td>
                            </tr>
                            <tr>
                                <td>Kode Pos</td>
                                <td>:</td>
                                <td><?= esc($user['kode_pos']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="table-responsive">
                    <table class="table table-bordered mb-4">
                        <tbody>
                            <tr>
                                <td>Tinggal</td>
                                <td>:</td>
                                <td><?= esc($user['jenis_tinggal']); ?></td>
                            </tr>
                            <tr>
                                <td>Transport</td>
                                <td>:</td>
                                <td><?= esc($user['alat_transportasi']); ?></td>
                            </tr>
                            <tr>
                                <td>Telepon</td>
                                <td>:</td>
                                <td><?= esc($user['telepon']); ?></td>
                            </tr>
                            <tr>
                                <td>HP</td>
                                <td>:</td>
                                <td><?= esc($user['hp']); ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?= esc($user['email']); ?></td>
                            </tr>
                            <tr>
                                <td>Jarak</td>
                                <td>:</td>
                                <td><?= esc($user['jarak_rumah']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="sosial" role="tabpanel" aria-labelledby="sosial-tab">
        <div class="row">
            <div class="col-xl-6">
                <div class="table-responsive">
                    <table class="table table-bordered mb-4">
                        <tbody>
                            <tr>
                                <td>Layak KIP?</td>
                                <td>:</td>
                                <td><?= esc($user['layak_pip']); ?></td>
                            </tr>
                            <tr>
                                <td>Alasan KIP</td>
                                <td>:</td>
                                <td><?= esc($user['alasan_layak_pip']); ?></td>
                            </tr>
                            <tr>
                                <td>Penerima KIP</td>
                                <td>:</td>
                                <td><?= esc($user['penerima_kip']); ?></td>
                            </tr>
                            <tr>
                                <td>No KIP</td>
                                <td>:</td>
                                <td><?= esc($user['nomor_kip']); ?></td>
                            </tr>
                            <tr>
                                <td>Nama KIP</td>
                                <td>:</td>
                                <td><?= esc($user['nama_di_kip']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="table-responsive">
                    <table class="table table-bordered mb-4">
                        <tbody>
                            <tr>
                                <td>Penerima KPS</td>
                                <td>:</td>
                                <td><?= esc($user['penerima_kps']); ?></td>
                            </tr>
                            <tr>
                                <td>No KPS</td>
                                <td>:</td>
                                <td><?= esc($user['no_kps']); ?></td>
                            </tr>
                            <tr>
                                <td>Bank</td>
                                <td>:</td>
                                <td><?= esc($user['bank']); ?></td>
                            </tr>
                            <tr>
                                <td>Rek Bank</td>
                                <td>:</td>
                                <td><?= esc($user['nomor_rekening_bank']); ?></td>
                            </tr>
                            <tr>
                                <td>Nama Rek</td>
                                <td>:</td>
                                <td><?= esc($user['rekening_atas_nama']); ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="orang_tua" role="tabpanel" aria-labelledby="orang_tua-tab">
        <div class="row">
            <div class="col-xl-6">
                <div class="table-responsive">
                    <table class="table table-bordered mb-4">
                        <tbody>
                            <tr>
                                <td>Nama Ayah</td>
                                <td>:</td>
                                <td><?= esc($user['nama_ayah']); ?></td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td>:</td>
                                <td><?= esc($user['nik_ayah']); ?></td>
                            </tr>
                            <tr>
                                <td>Tahun Lahir</td>
                                <td>:</td>
                                <td><?= esc($user['tahun_lahir_ayah']); ?></td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td>:</td>
                                <td><?= esc($user['jenjang_pendidikan_ayah']); ?></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td><?= esc($user['pekerjaan_ayah']); ?></td>
                            </tr>
                            <tr>
                                <td>Penghasilan</td>
                                <td>:</td>
                                <td><?= esc($user['penghasilan_ayah']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="table-responsive">
                    <table class="table table-bordered mb-4">
                        <tbody>
                            <tr>
                                <td>Nama Ibu</td>
                                <td>:</td>
                                <td><?= esc($user['nama_ibu']); ?></td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td>:</td>
                                <td><?= esc($user['nik_ibu']); ?></td>
                            </tr>
                            <tr>
                                <td>Tahun Lahir</td>
                                <td>:</td>
                                <td><?= esc($user['tahun_lahir_ibu']); ?></td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td>:</td>
                                <td><?= esc($user['jenjang_pendidikan_ibu']); ?></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td><?= esc($user['pekerjaan_ibu']); ?></td>
                            </tr>
                            <tr>
                                <td>Penghasilan</td>
                                <td>:</td>
                                <td><?= esc($user['penghasilan_ibu']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="table-responsive">
                    <table class="table table-bordered mb-4">
                        <tbody>
                            <tr>
                                <td>Nama Wali</td>
                                <td>:</td>
                                <td><?= esc($user['nama_wali']); ?></td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td>:</td>
                                <td><?= esc($user['nik_wali']); ?></td>
                            </tr>
                            <tr>
                                <td>Tahun Lahir</td>
                                <td>:</td>
                                <td><?= esc($user['tahun_lahir_wali']); ?></td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td>:</td>
                                <td><?= esc($user['jenjang_pendidikan_wali']); ?></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td><?= esc($user['pekerjaan_wali']); ?></td>
                            </tr>
                            <tr>
                                <td>Penghasilan</td>
                                <td>:</td>
                                <td><?= esc($user['penghasilan_wali']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <div class="tab-pane fade" id="periodik" role="tabpanel" aria-labelledby="periodik-tab">
        <div class="row">
            <div class="col-xl-6">
                <div class="table-responsive">
                    <table class="table table-bordered mb-4">
                        <tbody>
                            <tr>
                                <td>Lintang</td>
                                <td>:</td>
                                <td><?= esc($user['lintang']); ?></td>
                            </tr>
                            <tr>
                                <td>Bujur</td>
                                <td>:</td>
                                <td><?= esc($user['bujur']); ?></td>
                            </tr>
                            <tr>
                                <td>Berat Badan</td>
                                <td>:</td>
                                <td><?= esc($user['berat_badan']); ?></td>
                            </tr>
                            <tr>
                                <td>Tinggi Badan</td>
                                <td>:</td>
                                <td><?= esc($user['tinggi_badan']); ?></td>
                            </tr>
                            <tr>
                                <td>Saudara Kandung</td>
                                <td>:</td>
                                <td><?= esc($user['jml_saudara_kandung']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="table-responsive">
                    <table class="table table-bordered mb-4">
                        <tbody>
                            <tr>
                                <td>Lingkar Kepala</td>
                                <td>:</td>
                                <td><?= esc($user['lingkar_kepala']); ?></td>
                            </tr>
                            <tr>
                                <td>Jarak Rumah</td>
                                <td>:</td>
                                <td><?= esc($user['jarak_rumah']); ?></td>
                            </tr>
                            <tr>
                                <td>Kebutuhan Khusus</td>
                                <td>:</td>
                                <td><?= esc($user['kebutuhan_khusus']); ?></td>
                            </tr>
                            <tr>
                                <td>Tahun Pelajaran</td>
                                <td>:</td>
                                <td><?= esc($user['tahun_pelajaran']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6 float-left">

    </div>
    <div class="col-sm-6">

    </div>
</div>