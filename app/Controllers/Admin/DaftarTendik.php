<?php

namespace App\Controllers\Admin;

class DaftarTendik extends AdminController
{
    public function index()
    {
        $data['title'] = 'SMABA - Data Tendik';
        $data['judul_header'] = 'Data Tendik';
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
        $data['view'] = 'view_akun/admin/list_tendik';
        echo view('view_akun/template_akun', $data);
    }
    public function get_all_tendik()
    {
        $data = $this->TendikModel->get_all_tendik();
        echo json_encode($data);
    }

    public function view_data()
    {
        $id = $this->request->getPost('id');
        $data['user'] = $this->TendikModel->view_user_by_id($id);
        echo view('view_akun/admin/modal_guru_view', $data);
    }
    //--------------------------------------------------------------------

}
