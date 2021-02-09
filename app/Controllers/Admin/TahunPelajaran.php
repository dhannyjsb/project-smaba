<?php

namespace App\Controllers\Admin;

class TahunPelajaran extends AdminController
{
    public function tahun_pelajaran()
    {
        $data['tahun_sedang_aktif'] = $this->tahun_aktif;
        $data['tahun_pelajaran'] = $this->tahun_aktif;
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
        $data['title'] = 'SMABA - Pengaturan Tahun';
        $data['judul_header'] = 'Pengaturan Tahun Pelajaran';
        $data['user_info'] = $this->user_name;
        $data['view'] = 'view_akun/admin/tahun_pelajaran';
        $data['semua_tahun_pelajaran'] = $this->TahunModel->filter_tahun_pelajaran();

        echo view('view_akun/template_akun', $data);
        if ($this->request->isAJAX()) {
            $data = array(
                'tahun_pelajaran' => $this->request->getPost('tahun_pelajaran'),
                'tahun_keterangan' => $this->request->getPost('tahun_keterangan'),
            );
            $this->TahunModel->tambah_tahun($data);
        }
    }
    public function get_tahun_pelajaran()
    {
        $data = $this->TahunModel->get_tahun_pelajaran();
        echo json_encode($data);
    }
    //--------------------------------------------------------------------
    public function tahun_aktif()
    {
        if ($this->request->isAJAX()) {
            $id_aktif = $this->request->getPost('tahun_sedang_aktif');
            $data = array(
                'tahun_status' => 0,
            );
            $id_baru = $this->request->getPost('tahun_baru');
            $data2 = array(
                'tahun_status' => 1,
            );
            $this->TahunModel->ubah_tahun_aktif($data, $id_aktif, $data2, $id_baru);
            $aresult = true;
        }
    }
}
