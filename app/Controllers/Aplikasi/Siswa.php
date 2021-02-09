<?php

namespace App\Controllers\Aplikasi;

class Siswa extends AplikasiController
{

    public function index()
    {
        $data['title'] = 'SMABA - Data Siswa';
        $data['judul_header'] = 'Data Siswa Tahun ' . $this->tahun_aktif;
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
        $data['view'] = 'view_akun/apps/siswa/index';
        echo view('view_akun/template_akun', $data);
    }
    //--------------------------------------------------------------------

    public function get_siswa()
    {
        $data = $this->DataSiswaModel->get_all_siswa($this->tahun_aktif);
        echo json_encode($data);
    }

    public function view_data()
    {
        $id = $this->request->getPost('id');
        $data['user'] = $this->DataSiswaModel->view_user_by_id($id);
        echo view('view_akun/apps/siswa/modal_single_view', $data);
    }
}
