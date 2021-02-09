<?php

namespace App\Controllers\Aplikasi;

use Google_Client;
use Google_Service_Drive;
use Google_Service_Drive_DriveFile;

class ArsipSurat extends AplikasiController
{

    public function surat_keluar()
    {
        if ($this->request->isAJAX()) {
            if (!$this->validate([
                'tanggal_surat_keluar' => 'required'
            ])) {
                return  "1";
            } else {

                $client = new Google_Client();
                putenv('GOOGLE_APPLICATION_CREDENTIALS=' . ROOTPATH . '/smaba-drive.json');
                $client->useApplicationDefaultCredentials();
                $user_to_impersonate = 'berkas@sman1barambai.sch.id';
                $client->setSubject($user_to_impersonate);
                $client->addScope(Google_Service_Drive::DRIVE);
                $service = new Google_Service_Drive($client);
                if ($this->request->getPost('pakai_file') == 1) {
                    $file = new Google_Service_Drive_DriveFile(array(
                        'name' =>  date("Y") . '-SK-' . $this->request->getPost('no_surat'),
                        'parents' => array('1-CDb1lezrArdekM7WGpzovxD2__t1Cdg') // this is the folder id
                    ));
                    $result = $service->files->create(
                        $file,
                        array(
                            'data' => file_get_contents($this->request->getFile('file')),
                            'mimeType' => 'application/octet-stream',
                            'uploadType' => 'multipart'
                        )
                    );
                    $id_gdrive_sk = $result['id'];
                    $data = array(
                        'no_surat_keluar' => $this->request->getPost('no_surat'),
                        'second_surat_keluar' => $this->request->getPost('kode_surat'),
                        'no_berkas_keluar' => $this->request->getPost('no_berkas'),
                        'tanggal_surat_keluar' => $this->request->getPost('tanggal_surat_keluar'),
                        'alamat_surat_keluar' => $this->request->getPost('tujuan_surat'),
                        'perihal_surat_keluar' => $this->request->getPost('perihal_surat'),
                        'tahun_surat_keluar' => $this->request->getPost('tahun_surat_keluar'),
                        'pembuat_surat_keluar' => $this->request->getPost('pembuat_surat_keluar'),
                        'id_gdrive_sk' => $id_gdrive_sk,
                    );
                    $this->SuratKeluarModel->tambah_surat_keluar($data);
                } else {
                    $data = array(
                        'no_surat_keluar' => $this->request->getPost('no_surat'),
                        'second_surat_keluar' => $this->request->getPost('kode_surat'),
                        'no_berkas_keluar' => $this->request->getPost('no_berkas'),
                        'tanggal_surat_keluar' => $this->request->getPost('tanggal_surat_keluar'),
                        'alamat_surat_keluar' => $this->request->getPost('tujuan_surat'),
                        'perihal_surat_keluar' => $this->request->getPost('perihal_surat'),
                        'tahun_surat_keluar' => $this->request->getPost('tahun_surat_keluar'),
                        'pembuat_surat_keluar' => $this->request->getPost('pembuat_surat_keluar'),
                        'id_gdrive_sk' => '-',
                    );
                    $this->SuratKeluarModel->tambah_surat_keluar($data);
                }
            }
        }
        $data['title'] = 'SMABA - Surat Keluar';
        $data['judul_header'] = 'Surat Keluar ' . $this->tahun_aktif;
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
        $data['view'] = 'view_akun/apps/surat/surat_keluar';
        echo view('view_akun/template_akun', $data);
    }
    public function get_surat_keluar_list($tahun_surat)
    {
        $data = $this->SuratKeluarModel->get_surat_keluar_list($tahun_surat);
        echo json_encode($data);
    }
    public function get_surat_keluar_list_admin($tahun_surat)
    {
        $data = $this->SuratKeluarModel->get_surat_keluar_list_admin($tahun_surat);
        echo json_encode($data);
    }
    public function edit_surat_keluar()
    {
        $id = $this->request->getPost('id');
        $data['user_info'] = $this->user_name;
        $data['data_surat'] = $this->SuratKeluarModel->view_surat_keluar_by_id($id);
        echo view('view_akun/apps/surat/edit_surat_keluar', $data);
    }
    public function simpan_edit_surat_keluar()
    {
        if ($this->request->isAJAX()) {
            if (!$this->validate([
                'tanggal_surat_keluar' => 'required'
            ])) {
                return  "1";
            } else {
                $id_surat = $this->request->getPost('surat_keluar_id');
                $client = new Google_Client();
                putenv('GOOGLE_APPLICATION_CREDENTIALS=' . ROOTPATH . '/smaba-drive.json');
                $client->useApplicationDefaultCredentials();
                $user_to_impersonate = 'berkas@sman1barambai.sch.id';
                $client->setSubject($user_to_impersonate);
                $client->addScope(Google_Service_Drive::DRIVE);
                $service = new Google_Service_Drive($client);
                if ($this->request->getPost('ubah_file') == 1) {
                    $file = new Google_Service_Drive_DriveFile(array(
                        'name' =>  date("Y") . '-SK-' . $this->request->getPost('no_surat'),
                        'parents' => array('1-CDb1lezrArdekM7WGpzovxD2__t1Cdg') // this is the folder id
                    ));
                    $result = $service->files->create(
                        $file,
                        array(
                            'data' => file_get_contents($this->request->getFile('file')),
                            'mimeType' => 'application/octet-stream',
                            'uploadType' => 'multipart'
                        )
                    );
                    $id_gdrive_sk = $result['id'];
                    $data = array(
                        'no_surat_keluar' => $this->request->getPost('no_surat'),
                        'second_surat_keluar' => $this->request->getPost('kode_surat'),
                        'no_berkas_keluar' => $this->request->getPost('no_berkas'),
                        'tanggal_surat_keluar' => $this->request->getPost('tanggal_surat_keluar'),
                        'alamat_surat_keluar' => $this->request->getPost('tujuan_surat'),
                        'perihal_surat_keluar' => $this->request->getPost('perihal_surat'),
                        'tahun_surat_keluar' => $this->request->getPost('tahun_surat_keluar'),
                        'pengedit_surat_keluar' => $this->request->getPost('pengedit_surat_keluar'),
                        'id_gdrive_sk' => $id_gdrive_sk,
                    );
                    $this->SuratKeluarModel->simpan_edit_surat_keluar($id_surat, $data);
                }
                if ($this->request->getPost('ubah_file') == 2) {
                    if ($this->request->getPost('hapus_link') == true) {
                        $data = array(
                            'no_surat_keluar' => $this->request->getPost('no_surat'),
                            'second_surat_keluar' => $this->request->getPost('kode_surat'),
                            'no_berkas_keluar' => $this->request->getPost('no_berkas'),
                            'tanggal_surat_keluar' => $this->request->getPost('tanggal_surat_keluar'),
                            'alamat_surat_keluar' => $this->request->getPost('tujuan_surat'),
                            'perihal_surat_keluar' => $this->request->getPost('perihal_surat'),
                            'tahun_surat_keluar' => $this->request->getPost('tahun_surat_keluar'),
                            'pengedit_surat_keluar' => $this->request->getPost('pengedit_surat_keluar'),
                            'id_gdrive_sk' => '-',
                        );

                        $this->SuratKeluarModel->simpan_edit_surat_keluar($id_surat, $data);
                    } else {
                        $data = array(
                            'no_surat_keluar' => $this->request->getPost('no_surat'),
                            'second_surat_keluar' => $this->request->getPost('kode_surat'),
                            'no_berkas_keluar' => $this->request->getPost('no_berkas'),
                            'tanggal_surat_keluar' => $this->request->getPost('tanggal_surat_keluar'),
                            'alamat_surat_keluar' => $this->request->getPost('tujuan_surat'),
                            'perihal_surat_keluar' => $this->request->getPost('perihal_surat'),
                            'tahun_surat_keluar' => $this->request->getPost('tahun_surat_keluar'),
                            'pengedit_surat_keluar' => $this->request->getPost('pengedit_surat_keluar'),
                        );
                        $this->SuratKeluarModel->simpan_edit_surat_keluar($id_surat, $data);
                    }
                }
            }
        }
    }
    public function hapus_surat_keluar()
    {
        $id = $this->request->getPost('id');
        $penghapus_surat_keluar = $this->request->getPost('penghapus_surat_keluar');
        $data = $this->SuratKeluarModel->hapus_surat_keluar($id, $penghapus_surat_keluar);
        echo json_encode($data);
    }
    public function hapus_permanen_surat_keluar()
    {
        $id = $this->request->getPost('id');
        $data = $this->SuratKeluarModel->hapus_permanen_surat_keluar($id);
        echo json_encode($data);
    }
    //--------------------------------------------------------------------

    public function surat_keputusan()
    {
        if ($this->request->isAJAX()) {
            if (!$this->validate([
                'tanggal_surat_keputusan' => 'required'
            ])) {
                return  "1";
            } else {

                $client = new Google_Client();
                putenv('GOOGLE_APPLICATION_CREDENTIALS=' . ROOTPATH . '/smaba-drive.json');
                $client->useApplicationDefaultCredentials();
                $user_to_impersonate = 'berkas@sman1barambai.sch.id';
                $client->setSubject($user_to_impersonate);
                $client->addScope(Google_Service_Drive::DRIVE);
                $service = new Google_Service_Drive($client);
                if ($this->request->getPost('pakai_file') == 1) {
                    $file = new Google_Service_Drive_DriveFile(array(
                        'name' =>  date("Y") . '-SURAT_KEPUTUSAN-' . $this->request->getPost('no_surat'),
                        'parents' => array('1cg2Ry4Em8g-w81eiLnDWDddsSO6T6tlR') // this is the folder id
                    ));
                    $result = $service->files->create(
                        $file,
                        array(
                            'data' => file_get_contents($this->request->getFile('file')),
                            'mimeType' => 'application/octet-stream',
                            'uploadType' => 'multipart'
                        )
                    );
                    $id_gdrive_sk = $result['id'];
                    $data = array(
                        'no_surat_keputusan' => $this->request->getPost('no_surat'),
                        'second_surat_keputusan' => $this->request->getPost('kode_surat'),
                        'no_berkas_keputusan' => $this->request->getPost('no_berkas'),
                        'tanggal_surat_keputusan' => $this->request->getPost('tanggal_surat_keputusan'),
                        'alamat_surat_keputusan' => $this->request->getPost('tujuan_surat'),
                        'perihal_surat_keputusan' => $this->request->getPost('perihal_surat'),
                        'tahun_surat_keputusan' => $this->request->getPost('tahun_surat_keputusan'),
                        'pembuat_surat_keputusan' => $this->request->getPost('pembuat_surat_keputusan'),
                        'id_gdrive_sk' => $id_gdrive_sk,
                    );
                    $this->SuratKeputusanModel->tambah_surat_keputusan($data);
                } else {
                    $data = array(
                        'no_surat_keputusan' => $this->request->getPost('no_surat'),
                        'second_surat_keputusan' => $this->request->getPost('kode_surat'),
                        'no_berkas_keputusan' => $this->request->getPost('no_berkas'),
                        'tanggal_surat_keputusan' => $this->request->getPost('tanggal_surat_keputusan'),
                        'alamat_surat_keputusan' => $this->request->getPost('tujuan_surat'),
                        'perihal_surat_keputusan' => $this->request->getPost('perihal_surat'),
                        'tahun_surat_keputusan' => $this->request->getPost('tahun_surat_keputusan'),
                        'pembuat_surat_keputusan' => $this->request->getPost('pembuat_surat_keputusan'),
                        'id_gdrive_sk' => '-',
                    );
                    $this->SuratKeputusanModel->tambah_surat_keputusan($data);
                }
            }
        }
        $data['title'] = 'SMABA - Surat Keputusan';
        $data['judul_header'] = 'Surat Keputusan ' . $this->tahun_aktif;
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
        $data['view'] = 'view_akun/apps/surat/surat_keputusan';
        echo view('view_akun/template_akun', $data);
    }
    public function get_surat_keputusan_list($tahun_surat)
    {
        $data = $this->SuratKeputusanModel->get_surat_keputusan_list($tahun_surat);
        echo json_encode($data);
    }
    public function get_surat_keputusan_list_admin($tahun_surat)
    {
        $data = $this->SuratKeputusanModel->get_surat_keputusan_list_admin($tahun_surat);
        echo json_encode($data);
    }
    public function hapus_surat_keputusan()
    {
        $id = $this->request->getPost('id');
        $penghapus_surat_keputusan = $this->request->getPost('penghapus_surat_keputusan');
        $data = $this->SuratKeputusanModel->hapus_surat_keputusan($id, $penghapus_surat_keputusan);
        echo json_encode($data);
    }
    public function hapus_permanen_surat_keputusan()
    {
        $id = $this->request->getPost('id');
        $data = $this->SuratKeputusanModel->hapus_permanen_surat_keputusan($id);
        echo json_encode($data);
    }
    public function edit_surat_keputusan()
    {
        $id = $this->request->getPost('id');
        $data['user_info'] = $this->user_name;
        $data['data_surat'] = $this->SuratKeputusanModel->view_surat_keputusan_by_id($id);
        echo view('view_akun/apps/surat/edit_surat_keputusan', $data);
    }

    public function simpan_edit_surat_keputusan()
    {
        if ($this->request->isAJAX()) {
            if (!$this->validate([
                'tanggal_surat_keputusan' => 'required'
            ])) {
                return  "1";
            } else {
                $id_surat = $this->request->getPost('surat_keputusan_id');
                $client = new Google_Client();
                putenv('GOOGLE_APPLICATION_CREDENTIALS=' . ROOTPATH . '/smaba-drive.json');
                $client->useApplicationDefaultCredentials();
                $user_to_impersonate = 'berkas@sman1barambai.sch.id';
                $client->setSubject($user_to_impersonate);
                $client->addScope(Google_Service_Drive::DRIVE);
                $service = new Google_Service_Drive($client);
                if ($this->request->getPost('ubah_file') == 1) {
                    $file = new Google_Service_Drive_DriveFile(array(
                        'name' =>  date("Y") . '-SURAT_KEPUTUSAN-' . $this->request->getPost('no_surat'),
                        'parents' => array('1cg2Ry4Em8g-w81eiLnDWDddsSO6T6tlR') // this is the folder id
                    ));
                    $result = $service->files->create(
                        $file,
                        array(
                            'data' => file_get_contents($this->request->getFile('file')),
                            'mimeType' => 'application/octet-stream',
                            'uploadType' => 'multipart'
                        )
                    );
                    $id_gdrive_sk = $result['id'];
                    $data = array(
                        'no_surat_keputusan' => $this->request->getPost('no_surat'),
                        'second_surat_keputusan' => $this->request->getPost('kode_surat'),
                        'no_berkas_keputusan' => $this->request->getPost('no_berkas'),
                        'tanggal_surat_keputusan' => $this->request->getPost('tanggal_surat_keputusan'),
                        'alamat_surat_keputusan' => $this->request->getPost('tujuan_surat'),
                        'perihal_surat_keputusan' => $this->request->getPost('perihal_surat'),
                        'tahun_surat_keputusan' => $this->request->getPost('tahun_surat_keputusan'),
                        'pengedit_surat_keputusan' => $this->request->getPost('pengedit_surat_keputusan'),
                        'id_gdrive_sk' => $id_gdrive_sk,
                    );
                    $this->SuratKeputusanModel->simpan_edit_surat_keputusan($id_surat, $data);
                }
                if ($this->request->getPost('ubah_file') == 2) {
                    if ($this->request->getPost('text_hapus_link') == 'true') {
                        $data = array(
                            'no_surat_keputusan' => $this->request->getPost('no_surat'),
                            'second_surat_keputusan' => $this->request->getPost('kode_surat'),
                            'no_berkas_keputusan' => $this->request->getPost('no_berkas'),
                            'tanggal_surat_keputusan' => $this->request->getPost('tanggal_surat_keputusan'),
                            'alamat_surat_keputusan' => $this->request->getPost('tujuan_surat'),
                            'perihal_surat_keputusan' => $this->request->getPost('perihal_surat'),
                            'tahun_surat_keputusan' => $this->request->getPost('tahun_surat_keputusan'),
                            'pengedit_surat_keputusan' => $this->request->getPost('pengedit_surat_keputusan'),
                            'id_gdrive_sk' => '-',
                        );
                        $this->SuratKeputusanModel->simpan_edit_surat_keputusan($id_surat, $data);
                    } else {
                        $data = array(
                            'no_surat_keputusan' => $this->request->getPost('no_surat'),
                            'second_surat_keputusan' => $this->request->getPost('kode_surat'),
                            'no_berkas_keputusan' => $this->request->getPost('no_berkas'),
                            'tanggal_surat_keputusan' => $this->request->getPost('tanggal_surat_keputusan'),
                            'alamat_surat_keputusan' => $this->request->getPost('tujuan_surat'),
                            'perihal_surat_keputusan' => $this->request->getPost('perihal_surat'),
                            'tahun_surat_keputusan' => $this->request->getPost('tahun_surat_keputusan'),
                            'pengedit_surat_keputusan' => $this->request->getPost('pengedit_surat_keputusan'),
                        );
                        $this->SuratKeputusanModel->simpan_edit_surat_keputusan($id_surat, $data);
                    }
                }
            }
        }
    }

    //--------------------------------------------------------------------

    public function surat_eskul()
    {
        if ($this->request->isAJAX()) {
            if (!$this->validate([
                'tanggal_surat_eskul' => 'required'
            ])) {
                return  "1";
            } else {

                $client = new Google_Client();
                putenv('GOOGLE_APPLICATION_CREDENTIALS=' . ROOTPATH . '/smaba-drive.json');
                $client->useApplicationDefaultCredentials();
                $user_to_impersonate = 'berkas@sman1barambai.sch.id';
                $client->setSubject($user_to_impersonate);
                $client->addScope(Google_Service_Drive::DRIVE);
                $service = new Google_Service_Drive($client);
                if ($this->request->getPost('pakai_file') == 1) {
                    $file = new Google_Service_Drive_DriveFile(array(
                        'name' =>  date("Y") . '-SK_ESKUL-' . $this->request->getPost('no_surat'),
                        'parents' => array('1sMvsxhfDb8DY7ZGhBUbQGnSLUc2WpyrU') // this is the folder id
                    ));
                    $result = $service->files->create(
                        $file,
                        array(
                            'data' => file_get_contents($this->request->getFile('file')),
                            'mimeType' => 'application/octet-stream',
                            'uploadType' => 'multipart'
                        )
                    );
                    $id_gdrive_sk = $result['id'];
                    $data = array(
                        'no_surat_eskul' => $this->request->getPost('no_surat'),
                        'second_surat_eskul' => $this->request->getPost('kode_surat'),
                        'no_berkas_eskul' => $this->request->getPost('no_berkas'),
                        'tanggal_surat_eskul' => $this->request->getPost('tanggal_surat_eskul'),
                        'alamat_surat_eskul' => $this->request->getPost('tujuan_surat'),
                        'perihal_surat_eskul' => $this->request->getPost('perihal_surat'),
                        'tahun_surat_eskul' => $this->request->getPost('tahun_surat_eskul'),
                        'pembuat_surat_eskul' => $this->request->getPost('pembuat_surat_eskul'),
                        'id_gdrive_sk' => $id_gdrive_sk,
                    );
                    $this->SuratEskulModel->tambah_surat_eskul($data);
                } else {
                    $data = array(
                        'no_surat_eskul' => $this->request->getPost('no_surat'),
                        'second_surat_eskul' => $this->request->getPost('kode_surat'),
                        'no_berkas_keputusan' => $this->request->getPost('no_berkas'),
                        'tanggal_surat_eskul' => $this->request->getPost('tanggal_surat_eskul'),
                        'alamat_surat_eskul' => $this->request->getPost('tujuan_surat'),
                        'perihal_surat_eskul' => $this->request->getPost('perihal_surat'),
                        'tahun_surat_eskul' => $this->request->getPost('tahun_surat_eskul'),
                        'pembuat_surat_eskul' => $this->request->getPost('pembuat_surat_eskul'),
                        'id_gdrive_sk' => '-',
                    );
                    $this->SuratEskulModel->tambah_surat_eskul($data);
                }
            }
        }
        $data['title'] = 'SMABA - Surat Ekstrakurikuler';
        $data['judul_header'] = 'Surat Ekstrakurikuler ' . $this->tahun_aktif;
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
        $data['view'] = 'view_akun/apps/surat/surat_eskul';
        echo view('view_akun/template_akun', $data);
    }
    public function get_surat_eskul_list($tahun_surat)
    {
        $data = $this->SuratEskulModel->get_surat_eskul_list($tahun_surat);
        echo json_encode($data);
    }
    public function get_surat_eskul_list_admin($tahun_surat)
    {
        $data = $this->SuratEskulModel->get_surat_eskul_list_admin($tahun_surat);
        echo json_encode($data);
    }
    public function hapus_surat_eskul()
    {
        $id = $this->request->getPost('id');
        $penghapus_surat_eskul = $this->request->getPost('penghapus_surat_eskul');
        $data = $this->SuratEskulModel->hapus_surat_eskul($id, $penghapus_surat_eskul);
        echo json_encode($data);
    }
    public function hapus_permanen_surat_eskul()
    {
        $id = $this->request->getPost('id');
        $data = $this->SuratEskulModel->hapus_permanen_surat_eskul($id);
        echo json_encode($data);
    }
    public function edit_surat_eskul()
    {
        $id = $this->request->getPost('id');
        $data['user_info'] = $this->user_name;
        $data['data_surat'] = $this->SuratEskulModel->view_surat_eskul_by_id($id);
        echo view('view_akun/apps/surat/edit_surat_eskul', $data);
    }

    public function simpan_edit_surat_eskul()
    {
        if ($this->request->isAJAX()) {
            if (!$this->validate([
                'tanggal_surat_eskul' => 'required'
            ])) {
                return  "1";
            } else {
                $id_surat = $this->request->getPost('surat_eskul_id');
                $client = new Google_Client();
                putenv('GOOGLE_APPLICATION_CREDENTIALS=' . ROOTPATH . '/smaba-drive.json');
                $client->useApplicationDefaultCredentials();
                $user_to_impersonate = 'berkas@sman1barambai.sch.id';
                $client->setSubject($user_to_impersonate);
                $client->addScope(Google_Service_Drive::DRIVE);
                $service = new Google_Service_Drive($client);
                if ($this->request->getPost('ubah_file') == 1) {
                    $file = new Google_Service_Drive_DriveFile(array(
                        'name' =>  date("Y") . '-SK_ESKUL-' . $this->request->getPost('no_surat'),
                        'parents' => array('1sMvsxhfDb8DY7ZGhBUbQGnSLUc2WpyrU') // this is the folder id
                    ));
                    $result = $service->files->create(
                        $file,
                        array(
                            'data' => file_get_contents($this->request->getFile('file')),
                            'mimeType' => 'application/octet-stream',
                            'uploadType' => 'multipart'
                        )
                    );
                    $id_gdrive_sk = $result['id'];
                    $data = array(
                        'no_surat_eskul' => $this->request->getPost('no_surat'),
                        'second_surat_eskul' => $this->request->getPost('kode_surat'),
                        'no_berkas_eskul' => $this->request->getPost('no_berkas'),
                        'tanggal_surat_eskul' => $this->request->getPost('tanggal_surat_eskul'),
                        'alamat_surat_eskul' => $this->request->getPost('tujuan_surat'),
                        'perihal_surat_eskul' => $this->request->getPost('perihal_surat'),
                        'tahun_surat_eskul' => $this->request->getPost('tahun_surat_eskul'),
                        'pengedit_surat_eskul' => $this->request->getPost('pengedit_surat_eskul'),
                        'id_gdrive_sk' => $id_gdrive_sk,
                    );
                    $this->SuratEskulModel->simpan_edit_surat_eskul($id_surat, $data);
                }
                if ($this->request->getPost('ubah_file') == 2) {
                    if ($this->request->getPost('text_hapus_link') == 'true') {
                        $data = array(
                            'no_surat_eskul' => $this->request->getPost('no_surat'),
                            'second_surat_eskul' => $this->request->getPost('kode_surat'),
                            'no_berkas_eskul' => $this->request->getPost('no_berkas'),
                            'tanggal_surat_eskul' => $this->request->getPost('tanggal_surat_eskul'),
                            'alamat_surat_eskul' => $this->request->getPost('tujuan_surat'),
                            'perihal_surat_eskul' => $this->request->getPost('perihal_surat'),
                            'tahun_surat_eskul' => $this->request->getPost('tahun_surat_eskul'),
                            'pengedit_surat_eskul' => $this->request->getPost('pengedit_surat_eskul'),
                            'id_gdrive_sk' => '-',
                        );
                        $this->SuratEskulModel->simpan_edit_surat_eskul($id_surat, $data);
                    } else {
                        $data = array(
                            'no_surat_eskul' => $this->request->getPost('no_surat'),
                            'second_surat_eskul' => $this->request->getPost('kode_surat'),
                            'no_berkas_eskul' => $this->request->getPost('no_berkas'),
                            'tanggal_surat_eskul' => $this->request->getPost('tanggal_surat_eskul'),
                            'alamat_surat_eskul' => $this->request->getPost('tujuan_surat'),
                            'perihal_surat_eskul' => $this->request->getPost('perihal_surat'),
                            'tahun_surat_eskul' => $this->request->getPost('tahun_surat_eskul'),
                            'pengedit_surat_eskul' => $this->request->getPost('pengedit_surat_eskul'),
                        );
                        $this->SuratEskulModel->simpan_edit_surat_eskul($id_surat, $data);
                    }
                }
            }
        }
    }
}
