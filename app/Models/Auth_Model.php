<?php

namespace App\Models;

use CodeIgniter\Model;

class Auth_Model extends Model
{
    protected $table      = 'akun';
    protected $primaryKey = 'user_id';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = [
        'user_role_id',
        'id_unik',
        'username',
        'nama_lengkap',
        'email',
        'mobile_no',
        'image',
        'background_image',
        'facebook',
        'instagram',
        'password',
        'last_login',
        'last_ip',
        'is_active',

    ];
    public function login($data)
    {
        // $builder->where('username', $data['username']);
        $this->where('email', $data['username']);
        if ($this->countAllResults() == 0) {
            return false;
        } else {
            $this->where('email', $data['username']);
            $query = $this->get();
            $result = $query->getRowArray();
            $validPassword = password_verify($data['password'], $result['password']);
            if ($validPassword) {
                return $result = $query->getRowArray();
            }
        }
    }

    public function save_waktu($data, $id)
    {
        $builder = $this->db->table('akun');
        $builder->where('user_id', $id);
        $builder->update($data);
        return true;
    }
    public function google_register($data)
    {
        $this->where('email', $data);
        if ($this->countAllResults() == 0) {
            return false;
        } else {
            $this->where('email', $data);
            $query = $this->get();

            // $result = $query->getRowArray();
            //  $validPassword = password_verify($data['password'], $result['password']);
            //if ($validPassword) {
            return $query->getRowArray();
        }
    }
    public function model_register_google($data)
    {
        $this->insert($data);
        return;
    }
}
