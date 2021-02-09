<?php

namespace App\Models\App;

use CodeIgniter\Model;

class Tendik_Model extends Model
{
    protected $table      = 'data_tendik';
    protected $primaryKey = 'no_urut';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    public function get_all_tendik()
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
    public function hapus_tendik($id)
    {
        $this->where('no_urut', $id);
        return $this->delete();
    }
    public function import_tendik($data)
    {
        $this->insertBatch($data);
        return true;
    }
    public function get_user_tendik($email)
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
    public function get_total_tendik()
    {
        //  SELECT DISTINCT (year), COUNT (id) as jumlahdata FROM tb_peraturan WHERE type = "regulation" GROUP BY year  
        $query = $this->db->query('SELECT 
        COUNT(*) AS jumlah_ptk, sum(case when status_kepegawaian = "PNS" then 1 else 0 end) AS pns, 
        sum(case when status_kepegawaian = "Honor Daerah TK.I Provinsi" then 1 else 0 end) AS honor FROM data_tendik');
        //$builder->groupby('rombel_saat_ini');
        return  $query->getRowArray();
    }
}
