<?php

namespace App\Models;

use CodeIgniter\Model;

class Akun_Model extends Model
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
        'nama_lengkap',
        'email',
        'mobile_no',
        'image',
        'background_image',
        'facebook',
        'instagram',
        'password',
        'last_login',
        'is_sync',
        'last_ip',
    ];


    public function get_user_info($user_id)
    {
        $this->join('user_role_name', 'user_role_name.role_id = user_role_id');
        return $this->where(['user_id' => $user_id])->first();
    }
    public function save_profile($data, $id)
    {
        $this->where('user_id', $id);
        return $this->update($id, $data);
    }
    public function sync($data, $id)
    {
        $builder = $this->db->table('akun');
        $builder->where('user_id', $id);
        $builder->update($data);
        return true;
    }
    public function cek_data_login($old_pass, $id_user)
    {
        // $builder->where('username', $data['username']);
        $this->where('user_id', $id_user);
        $query = $this->get();
        $result = $query->getRowArray();
        $validPassword = password_verify($old_pass, $result['password']);
        if ($validPassword) {
            return 1;
        } else {
            return 2;
        }
    }

    public function get_all_akun_gtkptk()
    {

        $this->join('user_role_name', 'user_role_name.role_id = user_role_id');
        $this->join('data_tendik', 'data_tendik.email = akun.email', "LEFT");
        $this->join('data_guru', 'data_guru.email = akun.email', "LEFT");
        $this->join('data_siswa', 'data_siswa.email = akun.email', "LEFT");

        $this->select('data_tendik.email as email_tendik');
        $this->select('data_guru.email as email_guru');
        $this->select('data_siswa.email as email_siswa');

        $this->select('akun.*');
        $this->select('user_role_name.nama_role');

        $where = '(user_role_id="2" or user_role_id= "1")';
        $this->where($where);
        $this->orderBy('user_id ASC');
        return $this->findAll();
    }
    public function view_user_by_id($id)
    {
        return $this->where(['user_id' => $id])->first();
    }
}
