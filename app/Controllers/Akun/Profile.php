<?php

namespace App\Controllers\Akun;

class Profile extends AkunController
{

    public function index()
    {

        $data['title'] = 'SMABA - Profile';
        $data['judul_header'] = 'Profile';
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
        $data['view'] = 'view_akun/content/profile';
        echo view('view_akun/template_akun', $data);
    }


    public function upload_foto()
    {
        if ($this->request->isAJAX()) {
            $validated = $this->validate([
                'file' => [
                    'uploaded[file]',
                    'mime_in[file,image/jpg,image/jpeg,image/png]',
                    'max_size[file,2048]',
                ],
            ]);

            if ($validated) {
                $avatar = $this->request->getFile('file');
                $newName = $avatar->getRandomName();
                $filename = ROOTPATH  . 'public/perpustakaan_file/foto/' . $this->user_name['image'];
                if (file_exists($filename)) {
                    if ($this->user_name['image'] ==  "default.jpg") {
                        $avatar->move(ROOTPATH  . 'public/perpustakaan_file/foto/', $this->user_name['user_id'] . "-" . $newName);
                        $data = [
                            'image' =>  $this->user_name['user_id'] . "-" . $newName,
                        ];
                        $this->AkunModel->save_profile($data, $this->user_id);
                        echo TRUE;
                    } else {
                        unlink(ROOTPATH  . 'public/perpustakaan_file/foto/' . $this->user_name['image']);
                        $avatar->move(ROOTPATH  . 'public/perpustakaan_file/foto/', $this->user_name['user_id'] . "-" . $newName);
                        $data = [
                            'image' =>  $this->user_name['user_id'] . "-" . $newName,
                        ];
                        $this->AkunModel->save_profile($data, $this->user_id);
                        echo TRUE;
                    }
                } else {
                    $avatar->move(ROOTPATH  . 'public/perpustakaan_file/foto/', $this->user_name['user_id'] . "-" . $newName);
                    $data = [
                        'image' =>  $this->user_name['user_id'] . "-" . $newName,
                    ];
                    $this->AkunModel->save_profile($data, $this->user_id);
                    echo TRUE;
                }
            } else {
                echo  FALSE;
            }
        }
    }

    public function save_background()
    {
        if ($this->request->isAJAX()) {
            $validated = $this->validate([
                'file' => [
                    'uploaded[file]',
                    'mime_in[file,image/jpg,image/jpeg,image/png]',
                    'max_size[file,2048]',
                ],
            ]);

            if ($validated) {
                $avatar = $this->request->getFile('file');
                $newName = $avatar->getRandomName();
                $filename = ROOTPATH  . 'public/perpustakaan_file/background_foto/' . $this->user_name['background_image'];
                if (file_exists($filename)) {
                    if ($this->user_name['background_image'] ==  "default.jpg") {
                        $avatar->move(ROOTPATH  . 'public/perpustakaan_file/background_foto/', "back_" . $this->user_name['user_id'] . "-" . $newName);
                        $data = [
                            'background_image' =>  "back_" . $this->user_name['user_id'] . "-" . $newName,
                        ];
                        $this->AkunModel->save_profile($data, $this->user_id);
                        echo TRUE;
                    } else {
                        unlink(ROOTPATH  . 'public/perpustakaan_file/background_foto/' . $this->user_name['background_image']);
                        $avatar->move(ROOTPATH  . 'public/perpustakaan_file/background_foto/', "back_" . $this->user_name['user_id'] . "-" . $newName);
                        $data = [
                            'background_image' =>  "back_" . $this->user_name['user_id'] . "-" . $newName,
                        ];
                        $this->AkunModel->save_profile($data, $this->user_id);
                        echo TRUE;
                    }
                } else {
                    $avatar->move(ROOTPATH  . 'public/perpustakaan_file/background_foto/', "back_" . $this->user_name['user_id'] . "-" . $newName);
                    $data = [
                        'background_image' =>  "back_" . $this->user_name['user_id'] . "-" . $newName,
                    ];
                    $this->AkunModel->save_profile($data, $this->user_id);
                    echo TRUE;
                }
            } else {
                echo  FALSE;
            }
        }
    }

    //--------------------------------------------------------------------
    public function simpan_profile()
    {
        if ($this->request->isAJAX()) {
            $data = array(
                //  'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                //  'email' => $this->request->getPost('email'),
                'mobile_no' => $this->request->getPost('mobile_no'),
                'facebook' => $this->request->getPost('facebook'),
                'instagram' => $this->request->getPost('instagram'),
            );
            $this->AkunModel->save_profile($data, $this->user_id);
            echo TRUE;
        }
        // return redirect()->back();
    }
    public function ganti_pass()
    {
        if ($this->request->isAJAX()) {
            $old_pass = $this->request->getPost('old_pass');
            $result = $this->AkunModel->cek_data_login($old_pass, $this->user_id);
            if ($result) {
                if ($result == 1) {
                    $data = array(
                        'password' => password_hash($this->request->getPost('new_pass'), PASSWORD_BCRYPT)
                    );
                    $this->AkunModel->save_profile($data, $this->user_id);
                    echo "oke";
                } else {
                    return false;
                }
            }
        }
    }
}
