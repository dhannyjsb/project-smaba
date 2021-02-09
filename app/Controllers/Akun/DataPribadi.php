<?php

namespace App\Controllers\Akun;

class DataPribadi extends AkunController
{

    public function data_guru()
    {

        $data['title'] = 'SMABA - Data Pribadi';
        $data['judul_header'] = 'Data Pribadi';
        $data['tahun_aktif'] = $this->tahun_aktif;
        $data['user_info'] = $this->user_name;
        if ($this->role_id == 1) { // Guru
            $email_guru = $this->user_name['email'];
            if ($this->GuruModel->check_data($email_guru) == 1) {
                $user_guru = $this->GuruModel->get_user_guru($email_guru); // Get Login User ID
                $data['link_data'] = '1';
                $data['view'] = 'view_akun/data_pribadi/guru/data_pribadi_guru';
                $data['info_pribadi'] = $user_guru;
            } else {
                $data['link_data'] = '0';
                $data['view'] = 'view_akun/data_pribadi/tidak_ditemukan';
            }
        }
        if ($this->role_id == 2) { // Guru
            $email_guru = $this->user_name['email'];
            if ($this->TendikModel->check_data($email_guru) == 1) {
                $user_guru = $this->TendikModel->get_user_tendik($email_guru); // Get Login User ID
                $data['link_data'] = '1';
                $data['view'] = 'view_akun/data_pribadi/guru/data_pribadi_guru';
                $data['info_pribadi'] = $user_guru;
            } else {
                $data['link_data'] = '0';
                $data['view'] = 'view_akun/data_pribadi/tidak_ditemukan';
            }
        }
        echo view('view_akun/template_akun', $data);
    }
    //--------------------------------------------------------------------

}
