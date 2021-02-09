<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;
use App\Models\Akun_Model;

class Admin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = Services::session();
        if ($request->uri->getSegment(1) == 'akun') {
            if ($session->has('is_akun_login')) {
                $this->AkunModel =  new Akun_Model();
                $this->user_id = $session->get('user_id');
                $this->user_name = $this->AkunModel->get_user_info($this->user_id); // Get Login User ID
                if (!$this->user_name['is_admin'] == 1) {
                    return redirect()->back();
                }
            } else {
                return redirect()->to(base_url('login'));
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
