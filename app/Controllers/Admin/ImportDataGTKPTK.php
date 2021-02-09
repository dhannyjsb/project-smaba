<?php

namespace App\Controllers\Admin;

class ImportDataGTKPTK extends AdminController
{

    public function index()
    {

        $data['title'] = 'SMABA - Import Data';
        $data['judul_header'] = 'Import Data Guru';
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
        $data['view'] = 'view_akun/admin/import_guru';
        echo view('view_akun/template_akun', $data);
    }
    //--------------------------------------------------------------------
    public function proses_import_guru()
    {
        $validation =  \Config\Services::validation();
        $file = $this->request->getFile('dapo_file');
        $data = array(
            'dapo_file'           => $file,
        );
        if ($validation->run($data, 'transaction') == FALSE) {
            //   session()->setFlashdata('errors', $validation->getErrors());
            //  return redirect()->to(base_url('akun/admin/importgtkptk'));
            echo (implode("|", $validation->getErrors()));
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
                $data_guru = array();
                if ($cekfile == "Daftar Guru") {
                    $numrow = 1;
                    foreach ($data as $row) {
                        if ($numrow > 5) {
                            array_push($data_guru, array(
                                'nama' => $row['B'],
                                'nuptk' => $row['C'],
                                'jk' => $row['D'],
                                'tempat_lahir' => $row['E'],
                                'tanggal_lahir' => $row['F'],
                                'nip' => $row['G'],
                                'status_kepegawaian' => $row['H'],
                                'jenis_ptk' => $row['I'],
                                'agama' => $row['J'],
                                'alamat_jalan' => $row['K'],
                                'rt' => $row['L'],
                                'rw' => $row['M'],
                                'nama_dusun' => $row['N'],
                                'desa_kelurahan' => $row['O'],
                                'kecamatan' => $row['P'],
                                'kode_pos' => $row['Q'],
                                'telepon' => $row['R'],
                                'hp' => $row['S'],
                                'email' => $row['T'],
                                'tugas_tambahan' => $row['U'],
                                'sk_cpns' => $row['V'],
                                'tanggal_cpns' => $row['W'],
                                'sk_pengangkatan' => $row['X'],
                                'tmt_pengangkatan' => $row['Y'],
                                'lembaga_pengangkatan' => $row['Z'],
                                'pangkat_golongan' => $row['AA'],
                                'sumber_gaji' => $row['AB'],
                                'nama_ibu_kandung' => $row['AC'],
                                'status_perkawinan' => $row['AD'],
                                'nama_suami_istri' => $row['AE'],
                                'nip_suami_istri' => $row['AF'],
                                'pekerjaan_suami_istri' => $row['AG'],
                                'tmt_pns' => $row['AH'],
                                'sudah_lisensi_kepala_sekolah' => $row['AI'],
                                'pernah_diklat_kepengawasan' => $row['AJ'],
                                'keahlian_braille' => $row['AK'],
                                'keahlian_bahasa_isyarat' => $row['AL'],
                                'npwp' => $row['AM'],
                                'nama_wajib_pajak' => $row['AN'],
                                'kewarganegaraan' => $row['AO'],
                                'bank' => $row['AP'],
                                'nomor_rekening_bank' => $row['AQ'],
                                'rekening_atas_nama' => $row['AR'],
                                'nik' => $row['AS'],
                                'kk' => $row['AT'],
                                'karpeg' => $row['AU'],
                                'karis_karsu' => $row['AV'],
                                'lintang' => $row['AW'],
                                'bujur' => $row['AX'],
                                'nuks' => $row['AY'],
                                'created_at' => date('Y-m-d H:i:s'),
                            ));
                        }
                        $numrow++;
                    }
                    $simpan = $this->GuruModel->import_guru($data_guru);
                    if ($simpan) {

                        echo "oke";
                    }
                } else {
                    echo ("Terjadi Kesalah, pastikan menggunakan file daftar guru fresh dari dapodik.");
                };
            } catch (\Exception $e) {
                echo ("Terjadi Kesalah, pastikan menggunakan file daftar guru fresh dari dapodik.");
            }
        }
    }
    public function proses_import_ptk()
    {
        $validation =  \Config\Services::validation();
        $file = $this->request->getFile('dapo_file');
        $data = array(
            'dapo_file'           => $file,
        );
        if ($validation->run($data, 'transaction') == FALSE) {
            //   session()->setFlashdata('errors', $validation->getErrors());
            //  return redirect()->to(base_url('akun/admin/importgtkptk'));
            echo (implode("|", $validation->getErrors()));
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
                $data_tendik = array();
                if ($cekfile == "Daftar Tenaga Kependidikan") {
                    $numrow = 1;
                    foreach ($data as $row) {
                        if ($numrow > 5) {
                            array_push($data_tendik, array(
                                'nama' => $row['B'],
                                'nuptk' => $row['C'],
                                'jk' => $row['D'],
                                'tempat_lahir' => $row['E'],
                                'tanggal_lahir' => $row['F'],
                                'nip' => $row['G'],
                                'status_kepegawaian' => $row['H'],
                                'jenis_ptk' => $row['I'],
                                'agama' => $row['J'],
                                'alamat_jalan' => $row['K'],
                                'rt' => $row['L'],
                                'rw' => $row['M'],
                                'nama_dusun' => $row['N'],
                                'desa_kelurahan' => $row['O'],
                                'kecamatan' => $row['P'],
                                'kode_pos' => $row['Q'],
                                'telepon' => $row['R'],
                                'hp' => $row['S'],
                                'email' => $row['T'],
                                'tugas_tambahan' => $row['U'],
                                'sk_cpns' => $row['V'],
                                'tanggal_cpns' => $row['W'],
                                'sk_pengangkatan' => $row['X'],
                                'tmt_pengangkatan' => $row['Y'],
                                'lembaga_pengangkatan' => $row['Z'],
                                'pangkat_golongan' => $row['AA'],
                                'sumber_gaji' => $row['AB'],
                                'nama_ibu_kandung' => $row['AC'],
                                'status_perkawinan' => $row['AD'],
                                'nama_suami_istri' => $row['AE'],
                                'nip_suami_istri' => $row['AF'],
                                'pekerjaan_suami_istri' => $row['AG'],
                                'tmt_pns' => $row['AH'],
                                'sudah_lisensi_kepala_sekolah' => $row['AI'],
                                'pernah_diklat_kepengawasan' => $row['AJ'],
                                'keahlian_braille' => $row['AK'],
                                'keahlian_bahasa_isyarat' => $row['AL'],
                                'npwp' => $row['AM'],
                                'nama_wajib_pajak' => $row['AN'],
                                'kewarganegaraan' => $row['AO'],
                                'bank' => $row['AP'],
                                'nomor_rekening_bank' => $row['AQ'],
                                'rekening_atas_nama' => $row['AR'],
                                'nik' => $row['AS'],
                                'kk' => $row['AT'],
                                'karpeg' => $row['AU'],
                                'karis_karsu' => $row['AV'],
                                'lintang' => $row['AW'],
                                'bujur' => $row['AX'],
                                'nuks' => $row['AY'],
                                'created_at' => date('Y-m-d H:i:s'),
                            ));
                        }
                        $numrow++;
                    }
                    $simpan = $this->TendikModel->import_tendik($data_tendik);
                    if ($simpan) {

                        echo "oke";
                    }
                } else {
                    echo ("Terjadi Kesalah, pastikan menggunakan file daftar tendik fresh dari dapodik.");
                };
            } catch (\Exception $e) {
                echo ("Terjadi Kesalah, pastikan menggunakan file daftar tendik fresh dari dapodik.");
            }
        }
    }
}
