<?php

namespace App\Controllers\Admin;

class ImportDataSiswa extends AdminController
{

    public function index()
    {

        $data['title'] = 'SMABA - Import Data';
        $data['judul_header'] = 'Import Data Siswa';
        $data['tahun_aktif'] = $this->tahun_aktif;
        if ($this->role_id == 1) { // Guru
            $email_guru = $this->user_name['email'];
            if ($this->GuruModel->check_data($email_guru) == 1) {
                $user_guru = $this->GuruModel->get_user_guru($email_guru); // Get Login User ID
                $data['link_data'] = '1';
                $data['info_pribadi'] = $user_guru;
            } else {
                $data['link_data'] = '0';
            }
        }
        if ($this->role_id == 2) { // TU
            $email_guru = $this->user_name['email'];
            if ($this->TendikModel->check_data($email_guru) == 1) {
                $user_guru = $this->TendikModel->get_user_tendik($email_guru); // Get Login User ID
                $data['link_data'] = '1';
                $data['info_pribadi'] = $user_guru;
            } else {
                $data['link_data'] = '0';
            }
        }
        $data['user_info'] = $this->user_name;
        $data['view'] = 'view_akun/admin/import_siswa';
        echo view('view_akun/template_akun', $data);
    }
    //--------------------------------------------------------------------
    public function proses_import()
    {
        $validation =  \Config\Services::validation();
        $file = $this->request->getFile('dapo_file');
        $data = array(
            'dapo_file'           => $file,
        );
        if ($validation->run($data, 'transaction') == FALSE) {
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('akun/admin/importsiswa'));
        } else {
            try {

                $extension = $file->getClientExtension();
                if ('xls' == $extension) {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                } else {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                }
                $spreadsheet = $reader->load($file);
                $cekfile = $spreadsheet->getActiveSheet()->getCell("A1")->getValue();
                $data = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
                $data_siswa = array();
                if ($cekfile == "Daftar Peserta Didik") {
                    $numrow = 1;
                    foreach ($data as $row) {
                        if ($numrow > 6) {
                            array_push($data_siswa, array(
                                'no' => $row['A'],
                                'nama'      => $row['B'],
                                'nipd'      => $row['C'],
                                'jk'      => $row['D'],
                                'nisn'      => $row['E'],
                                'tempat_lahir'      => $row['F'],
                                'tanggal_lahir'      => $row['G'],
                                'nik'      => $row['H'],
                                'agama'      => $row['I'],
                                'alamat'      => $row['J'],
                                'rt'      => $row['K'],
                                'rw'      => $row['L'],
                                'dusun'      => $row['M'],
                                'kelurahan'      => $row['N'],
                                'kecamatan'      => $row['O'],
                                'kode_pos'      => $row['P'],
                                'jenis_tinggal'      => $row['Q'],
                                'alat_transportasi'      => $row['R'],
                                'telepon'      => $row['S'],
                                'hp'      => $row['T'],
                                'email'      => $row['U'],
                                'skhun'      => $row['V'],
                                'penerima_kps'      => $row['W'],
                                'no_kps'      => $row['X'],
                                'nama_ayah'      => $row['Y'],
                                'tahun_lahir_ayah'      => $row['Z'],
                                'jenjang_pendidikan_ayah'      => $row['AA'],
                                'pekerjaan_ayah'      => $row['AB'],
                                'penghasilan_ayah'      => $row['AC'],
                                'nik_ayah'      => $row['AD'],
                                'nama_ibu'      => $row['AE'],
                                'tahun_lahir_ibu'      => $row['AF'],
                                'jenjang_pendidikan_ibu'      => $row['AG'],
                                'pekerjaan_ibu'      => $row['AH'],
                                'penghasilan_ibu'      => $row['AI'],
                                'nik_ibu'      => $row['AJ'],
                                'nama_wali'      => $row['AK'],
                                'tahun_lahir_wali'      => $row['AL'],
                                'jenjang_pendidikan_wali'      => $row['AM'],
                                'pekerjaan_wali'      => $row['AN'],
                                'penghasilan_wali'      => $row['AO'],
                                'nik_wali'      => $row['AP'],
                                'rombel_saat_ini'      => $row['AQ'],
                                'no_peserta_ujian_nasional'      => $row['AR'],
                                'no_seri_ijazah'      => $row['AS'],
                                'penerima_kip'      => $row['AT'],
                                'nomor_kip'      => $row['AU'],
                                'nama_di_kip'      => $row['AV'],
                                'nomor_kks'      => $row['AW'],
                                'no_registrasi_akta_lahir'      => $row['AX'],
                                'bank'      => $row['AY'],
                                'nomor_rekening_bank'      => $row['AZ'],
                                'rekening_atas_nama'      => $row['BA'],
                                'layak_pip'      => $row['BB'],
                                'alasan_layak_pip'      => $row['BC'],
                                'kebutuhan_khusus'      => $row['BD'],
                                'sekolah_asal'      => $row['BE'],
                                'anak_ke'      => $row['BF'],
                                'lintang'      => $row['BG'],
                                'bujur'      => $row['BH'],
                                'no_kk'      => $row['BI'],
                                'berat_badan'      => $row['BJ'],
                                'tinggi_badan'      => $row['BK'],
                                'lingkar_kepala'      => $row['BL'],
                                'jml_saudara_kandung'      => $row['BM'],
                                'jarak_rumah'      => $row['BN'],
                                'tahun_pelajaran'      => $this->request->getPost('ta_input'),
                                'created_at' => date('Y-m-d H:i:s'),
                            ));
                        }
                        $numrow++;
                    }
                    $data_tahun = $this->request->getPost('ta_input');
                    $simpan = $this->DataSiswaModel->import_siswa($data_siswa, $data_tahun);
                    if ($simpan) {
                        session()->setFlashdata('success', 'Imported Transaction successfully');
                        return redirect()->to(base_url('akun/admin/importsiswa'));
                    }
                } else {
                    session()->setFlashdata('errors-505', "Terjadi Kesalah, pastikan menggunakan file daftar siswa fresh dari dapodik.");
                    return redirect()->to(base_url('akun/admin/importsiswa'));
                };
            } catch (\Exception $e) {
                die($e->getMessage());

                // session()->setFlashdata('errors-505', "Terjadi Kesalah, pastikan menggunakan file daftar siswa fresh dari dapodik.");
                // return redirect()->to(base_url('akun/admin/importsiswa'));
            }
        }
    }
}
