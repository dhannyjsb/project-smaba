<?php

namespace App\Controllers\Akun;

class Akun extends AkunController
{

    public function index()
    {
        $data['title'] = 'SMABA - Dashboard';
        $data['judul_header'] = 'Dashboard';
        $data['tahun_aktif'] = $this->tahun_aktif;
        if ($this->role_id == 1) { // Guru
            $email_guru = $this->user_name['email'];
            if ($this->GuruModel->check_data($email_guru) == 1) {
                $user_guru = $this->GuruModel->get_user_guru($email_guru); // Get Login User IDss
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
        $data['data_siswa'] = $this->DataSiswaModel->get_total_siswa($this->tahun_aktif);
        $data['total_kelas'] = $this->DataSiswaModel->get_total_kelas($this->tahun_aktif);
        $data['semua_kelas'] = $this->DataSiswaModel->ambil_rombel($this->tahun_aktif);
        $data['data_guru'] = $this->GuruModel->get_total_guru();
        $data['data_tendik'] = $this->TendikModel->get_total_tendik();

        $data['view'] = 'view_akun/content/dashboard';
        echo view('view_akun/template_akun', $data);
    }

    public function syncron()
    {
        if ($this->role_id == 1) {
            $email_guru = $this->user_name['email'];
            $user_guru = $this->GuruModel->get_user_guru($email_guru);
            $data = array(
                'nama_lengkap' => $user_guru['nama'],
                'email' => $user_guru['email'],
                'mobile_no' => $user_guru['hp'],
                'is_sync' => 1,
            );
            $this->AkunModel->sync($data, $this->user_id);
            return redirect()->back();
        }
        if ($this->role_id == 2) {
            $email_guru = $this->user_name['email'];
            $user_guru = $this->TendikModel->get_user_tendik($email_guru);
            $data = array(
                'nama_lengkap' => $user_guru['nama'],
                'email' => $user_guru['email'],
                'mobile_no' => $user_guru['hp'],
                'is_sync' => 1,
            );
            $this->AkunModel->sync($data, $this->user_id);
            return redirect()->back();
        }
    }
    //--------------------------------------------------------------------

}
