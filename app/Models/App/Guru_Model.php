<?php

namespace App\Models\App;

use CodeIgniter\Model;

class Guru_Model extends Model
{
    protected $table      = 'data_guru';
    protected $primaryKey = 'no_urut';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    public function get_all_guru()
    {
        $this->orderBy('nama ASC');
        return $this->findAll();
    }
    public function view_user_by_id($id)
    {
        return $this->where(['no_urut' => $id])->first();
    }
    public function filter_status()
    {
        $this->groupBy('status_kepegawaian');
        return $this->findAll();
    }
    public function hapus_guru($id)
    {
        $this->where('no_urut', $id);
        return $this->delete();
    }
    public function import_guru($data)
    {
        $this->insertBatch($data);
        return true;
    }
    public function get_user_guru($email)
    {
        return $this->where(['email' => $email])->first();
    }

    public function check_data($email)
    {
        $this->where('email', $email);
        if ($this->countAllResults() == 0) {
            return 0;
        } else {
            return 1;
        }
    }
    public function get_total_guru()
    {
        //  SELECT DISTINCT (year), COUNT (id) as jumlahdata FROM tb_peraturan WHERE type = "regulation" GROUP BY year  
        $query = $this->db->query('SELECT 
        COUNT(*) AS jumlah_gtk, sum(case when status_kepegawaian = "PNS" then 1 else 0 end) AS pns, 
        sum(case when status_kepegawaian = "Honor Daerah TK.I Provinsi" then 1 else 0 end) AS honor FROM data_guru');
        //$builder->groupby('rombel_saat_ini');
        return  $query->getRowArray();
    }
}
