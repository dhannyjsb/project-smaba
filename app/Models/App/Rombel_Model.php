<?php

namespace App\Models\App;

use CodeIgniter\Model;

class Rombel_Model extends Model
{
    protected $table      = 'data_siswa';
    protected $primaryKey = 'no_urut';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    public function get_rombel_aktif($aktif)
    {
        $query = $this->db->query('SELECT CONCAT(rombel_saat_ini) as kelas,
    COUNT(*) AS jumlah_siswa, sum(case when jk = "L" then 1 else 0 end) AS laki,
    sum(case when jk = "P" then 1 else 0 end) AS perempuan FROM data_siswa WHERE tahun_pelajaran = "' . $aktif . '" GROUP BY rombel_saat_ini ');
        return $query->getresult();
    }
}
