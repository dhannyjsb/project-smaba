<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;
use App\Models\Akun_Model;
use App\Models\App\Guru_Model;
use App\Models\App\Tendik_Model;

class EmailDitemukan implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = Services::session();
        if ($session->has('is_akun_login')) {
            $session = \Config\Services::session();
            $this->user_id = $session->get('user_id');
            $this->AkunModel =  new Akun_Model();
            $this->GuruModel =  new Guru_Model();
            $this->TendikModel =  new Tendik_Model();

            $this->user_name = $this->AkunModel->get_user_info($this->user_id); // Get Login User ID
            $this->role_id = $this->user_name['user_role_id'];
            $email_guru = $this->user_name['email'];
            if ($this->role_id == 1) {
                if ($this->GuruModel->check_data($email_guru) == 1) {
                } else {
                    return redirect()->back(); //2. balik. tidak sync
                }
            }
            if ($this->role_id == 2) { // Guru
                if ($this->TendikModel->check_data($email_guru) == 1) {
                } else {
                    return redirect()->back(); //2. balik. tidak sync
                }
            }
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
