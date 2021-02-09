<?php

namespace App\Models\App;

use CodeIgniter\Model;

class SuratKeluar_Model extends Model
{
    protected $table      = 'surat_keluar';
    protected $primaryKey = 'surat_keluar_id';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = [
        'no_surat_keluar',
        'second_surat_keluar',
        'no_berkas_keluar',
        'alamat_surat_keluar',
        'tanggal_surat_keluar',
        'perihal_surat_keluar',
        'tahun_surat_keluar',
        'pembuat_surat_keluar',
        'pengedit_surat_keluar',
        'penghapus_surat_keluar',
        'id_gdrive_sk',
    ];
    public function get_surat_keluar_list($tahun_surat)
    {
        $this->join('akun', 'akun.id_unik = surat_keluar.pembuat_surat_keluar');

        $this->select('akun.nama_lengkap as pembuat');
        $this->select('surat_keluar.*');
        $this->where('tahun_surat_keluar', $tahun_surat);
        $this->orderBy('no_surat_keluar');
        return  $this->findAll();
    }
    public function get_surat_keluar_list_admin($tahun_surat)
    {
        // $this->from('surat_keluar as t1');
        //  $this->join('akun', 'akun.id_unik = surat_keluar.pembuat_surat_keluar');
        $this->join('akun as t2', 't2.id_unik = surat_keluar.pembuat_surat_keluar', 'LEFT');
        $this->join('akun as t3', 't3.id_unik = surat_keluar.pengedit_surat_keluar', 'LEFT');
        $this->join('akun as t4', 't4.id_unik = surat_keluar.penghapus_surat_keluar', 'LEFT');

        $this->select('t2.nama_lengkap as pembuat');
        $this->select('t3.nama_lengkap as pengedit');
        $this->select('t4.nama_lengkap as penghapus');

        $this->select('surat_keluar.*');
        $this->where('tahun_surat_keluar', $tahun_surat);
        $this->orderBy('no_surat_keluar');
        return  $this->withDeleted()
            ->findAll();;
    }
    public function hapus_surat_keluar($id, $penghapus_surat_keluar)
    {
        $data = array(
            'penghapus_surat_keluar' => $penghapus_surat_keluar,
        );
        $this->where('surat_keluar_id', $id);
        $this->update($id, $data);
        $this->where('surat_keluar_id', $id);
        return $this->delete();
    }
    public function hapus_permanen_surat_keluar($id)
    {

        $this->where('surat_keluar_id', $id);
        return $this->purgeDeleted();
    }
    public function tambah_surat_keluar($data)
    {
        return $this->insert($data);
    }
    public function view_surat_keluar_by_id($id)
    {
        return $this->where(['surat_keluar_id' => $id])->withDeleted()->first();
    }
    public function simpan_edit_surat_keluar($id_surat, $data)
    {
        $this->where('surat_keluar_id', $id_surat);
        return $this->update($id_surat, $data);
    }
}
