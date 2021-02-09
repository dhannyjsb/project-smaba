<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;
use App\Models\Akun_Model;

class AplikasiSurat implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = Services::session();
        if ($session->has('is_akun_login')) {
            $this->AkunModel =  new Akun_Model();
            $this->user_id = $session->get('user_id');
            $this->user_name = $this->AkunModel->get_user_info($this->user_id); // Get Login User ID
            if ($this->user_name['user_role_id'] == 1 or $this->user_name['user_role_id'] == 2) { // Hanya guru dan TU ,karena entah kenapa,  statement !, tidak bisa digunakan. (sad)
                //1. teruskan. role
                if ($this->user_name['is_sync'] == 1) { //Jika sudah sync, teruskan 
                    //2. teruskan. sync
                } else {
                    return redirect()->back(); //2. balik. tidak sync
                }
            } else {
                return redirect()->back(); //1. balik. bukan role
            }
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
