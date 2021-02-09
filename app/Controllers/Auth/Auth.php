<?php

namespace App\Controllers\Auth;

use App\Models\Auth_Model;
use Google_Client;
use Google_Service_Oauth2;

class Auth extends AuthController
{

    public function login()
    {
        if ($this->request->isAJAX()) {
            if ($this->session->get('is_login') == 1) {
                echo 4; //sudah login
            } else {
                if ($this->db_check->tableExists('akun')) {
                    $waktu_login = now('Asia/Makassar');
                    //$waktu_login = date('yy-m-d H:i:s');   // Outputs: 20-01-20 17:04:00
                    $model = new Auth_Model();
                    $data = array(
                        'username' => $this->request->getPost('username'),
                        'password' => $this->request->getPost('password'),
                    );
                    $result = $model->login($data);
                    if ($result) {
                        if ($result['is_active'] == 0) {
                            echo 5; //tidak aktif
                        }
                        $admin_data = array(
                            'user_id' => $result['user_id'],
                            // 'username' => $result['username'],
                            'user_role_id' => $result['user_role_id'],
                            'user_status' => $result['is_admin'],
                            'is_akun_login' => TRUE
                        );
                        $data = array(
                            'last_login' => $waktu_login,
                            'last_ip' => $this->request->getIPAddress()
                        );
                        $model->save_waktu($data, $result['user_id']);
                        $this->session->set($admin_data);
                        echo 1; //benar
                    } else {
                        echo 2; //password salah
                    }
                } else {
                    echo 3; //table tidak ditemukan
                }
            }
        }
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url());
    }
}
