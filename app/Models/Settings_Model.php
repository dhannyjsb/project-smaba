<?php

namespace App\Models;

use CodeIgniter\Model;

class Settings_Model extends Model
{
    protected $table      = 'settings';
    protected $primaryKey = 'id';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    public function get_settings()
    {
        $this->where('id', '1');
        $query = $this->get();
        return $query->getRowArray();
    }
    public function save_settings($data)
    {
        $this->where('id', '1');
        return $this->update('1', $data);
    }
}
