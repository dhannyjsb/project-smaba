<?php

namespace App\Controllers\Aplikasi;

class Rombel extends AplikasiController
{

    public function index()
    {
        $data['title'] = 'SMABA - Data Rombel';
        $data['judul_header'] = 'Data Rombel Tahun ' . $this->tahun_aktif;
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
        $data['view'] = 'view_akun/apps/rombel/index';
        echo view('view_akun/template_akun', $data);
    }
    //--------------------------------------------------------------------

    public function get_rombel()
    {
        $data = $this->DataRombelModel->get_rombel_aktif($this->tahun_aktif);
        echo json_encode($data);
    }

    public function view_rombel($nama_kelas)
    {
        $data['title'] = 'SMABA - Data Kelas ' . $nama_kelas;
        $data['judul_header'] = 'Data Kelas ' . $nama_kelas;
        $data['tahun_aktif'] = $this->tahun_aktif;
        $data['nama_kelas'] = $nama_kelas;
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
        $data['view'] = 'view_akun/apps/rombel/per_kelas';
        echo view('view_akun/template_akun', $data);
    }
    public function get_siswa_rombel($nama_kelas)
    {
        $data = $this->DataSiswaModel->get_siswa_kelas($nama_kelas, $this->tahun_aktif);
        echo json_encode($data);
    }
}
