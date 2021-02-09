<?php

namespace App\Controllers\Auth;

use App\Models\Auth_Model;
use App\Models\Settings_Model;

use Google_Client;
use Google_Service_Oauth2;

class Login extends AuthController
{

    public function index()
    {
        if ($this->session->get('is_akun_login') == 1) {
            return redirect()->to(base_url('akun'));
        }
        $model = new Auth_Model();
        $setting_model = new Settings_Model();
        $settings = $setting_model->get_settings();
        $google_client = new Google_Client();
        $google_client->setClientId($settings['google_client_id']); //Define your ClientID
        $google_client->setClientSecret($settings['google_client_secret']); //Define your Client Secret Key
        $google_client->setRedirectUri(base_url('/login')); //Define your Redirect Uri
        $google_client->addScope('email');
        $google_client->addScope('profile');
        $google_client->setAccessType('offline');
        $google_client->setPrompt('select_account consent');
        if (isset($_GET["code"])) {
            $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
            if (!isset($token["error"])) {
                $google_client->setAccessToken($token['access_token']);
                $this->session->set('access_token', $token['access_token']);
                $google_service = new Google_Service_Oauth2($google_client);
                $data = $google_service->userinfo->get();
                //dd($data);
                //$current_datetime = date('Y-m-d H:i:s');

                $waktu_login = now('Asia/Makassar');
                $result = $model->google_register($data['email']);
                if ($result) {
                    if ($result['is_active'] == 0) {
                        session()->setFlashdata('suspend', 'asdasd');;
                    }
                    if ($result['is_active'] == 1) {
                        $admin_data = array(
                            'user_id' => $result['user_id'],
                            // 'username' => $result['username'],
                            'user_role_id' => $result['user_role_id'],
                            'user_status' => $result['is_admin'],
                            'is_akun_login' => TRUE
                        );
                        $data2 = array(
                            'last_login' => $waktu_login,
                            'last_ip' => $this->request->getIPAddress(),
                            'image' => $data['picture'],
                        );
                        $model->save_waktu($data2, $result['user_id']);
                        $this->session->set($admin_data);
                        //echo 1; //benar
                        // return redirect()->to(base_url('login'));
                        session()->setFlashdata('berhasil', 'asdasd');
                    }
                } else {
                    $data4['data_isian'] = array(
                        'id_unik' => $data['id'],
                        'nama_lengkap'   => $data['name'],
                        'email'  => $data['email'],
                        'image' => $data['picture'],
                    );
                    $data4['title'] = 'SMABA - Register';
                    $data4['judul_header'] = 'Register';
                    $data4['judul_sub'] = 'Silahkan isi sesuai dengan data anda';
                    return view('view_auth/login_google', $data4);
                    // return redirect()->to(base_url('login'));
                }
            }
        }

        $data3['title'] = 'SMABA - Login';
        $data3['judul_header'] = 'Login';
        $data3['settings'] = $setting_model->get_settings();
        $data3['tombol_google'] = $google_client->createAuthUrl();
        $data3['judul_sub'] = 'Silahkan Login menggunakan akun anda';
        echo view('view_auth/login_new', $data3);
    }

    public function register_google()
    {
        $model = new Auth_Model();
        //$current_datetime = date('Y-m-d H:i:s');

        $data2 = array(
            'id_unik' => $this->request->getPost('id_unik'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'email' => $this->request->getPost('email'),
            'image' => $this->request->getPost('image'),
            'last_ip' => $this->request->getIPAddress(),
            'user_role_id' => $this->request->getPost('role_id'),
            'username' => 'manual',
            'background_image' => 'default.jpg',
            'is_active' => 1,

        );
        //dd($data2);
        $model->model_register_google($data2);
        // session()->setFlashdata('register');
        session()->setFlashdata('register', 'asdasd');
        return redirect()->to(base_url('login'));
    }
    //--------------------------------------------------------------------

}
