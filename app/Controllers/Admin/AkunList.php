<?php

namespace App\Controllers\Admin;

class AkunList extends AdminController
{
    public function index()
    {
        $data['title'] = 'SMABA - Data Guru';
        $data['judul_header'] = 'Data Guru';
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
        $data['view'] = 'view_akun/admin/list_akun';
        echo view('view_akun/template_akun', $data);
    }
    public function get_all_akun_gtkptk()
    {
        $data = $this->AkunModel->get_all_akun_gtkptk();
        echo json_encode($data);
    }

    public function view_data()
    {
        $id = $this->request->getPost('id');
        $role = $this->request->getPost('role');
        $data['user'] = $this->AkunModel->view_user_by_id($id, $role);
        echo view('view_akun/admin/modal_view_akun', $data);
    }
    //--------------------------------------------------------------------

}
