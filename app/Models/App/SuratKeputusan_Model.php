<?php

namespace App\Models\App;

use CodeIgniter\Model;

class SuratKeputusan_Model extends Model
{
    protected $table      = 'surat_keputusan';
    protected $primaryKey = 'surat_keputusan_id';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = [
        'no_surat_keputusan',
        'second_surat_keputusan',
        'no_berkas_keputusan',
        'alamat_surat_keputusan',
        'tanggal_surat_keputusan',
        'perihal_surat_keputusan',
        'tahun_surat_keputusan',
        'pembuat_surat_keputusan',
        'pengedit_surat_keputusan',
        'penghapus_surat_keputusan',
        'id_gdrive_sk',
    ];
    public function get_surat_keputusan_list($tahun_surat)
    {
        $this->join('akun', 'akun.id_unik = surat_keputusan.pembuat_surat_keputusan');
        $this->select('akun.nama_lengkap as pembuat');
        $this->select('surat_keputusan.*');
        $this->where('tahun_surat_keputusan', $tahun_surat);
        $this->orderBy('no_surat_keputusan');
        return  $this->findAll();
    }
    public function get_surat_keputusan_list_admin($tahun_surat)
    {
        //$this->from('surat_keputusan as t1');
        //  $this->join('akun', 'akun.id_unik = surat_keputusan.pembuat_surat_keputusan');
        $this->join('akun as t2', 't2.id_unik = surat_keputusan.pembuat_surat_keputusan', 'LEFT');
        $this->join('akun as t3', 't3.id_unik = surat_keputusan.pengedit_surat_keputusan', 'LEFT');
        $this->join('akun as t4', 't4.id_unik = surat_keputusan.penghapus_surat_keputusan', 'LEFT');

        $this->select('t2.nama_lengkap as pembuat');
        $this->select('t3.nama_lengkap as pengedit');
        $this->select('t4.nama_lengkap as penghapus');

        $this->select('surat_keputusan.*');
        $this->where('tahun_surat_keputusan', $tahun_surat);
        $this->orderBy('no_surat_keputusan');
        return  $this->withDeleted()
            ->findAll();;
    }
    public function hapus_surat_keputusan($id, $penghapus_surat_keputusan)
    {
        $data = array(
            'penghapus_surat_keputusan' => $penghapus_surat_keputusan,
        );
        $this->where('surat_keputusan_id', $id);
        $this->update($id, $data);
        $this->where('surat_keputusan_id', $id);
        return $this->delete();
    }
    public function hapus__permanen_surat_keputusan($id)
    {
        $this->where('surat_keputusan_id', $id);
        return $this->purgeDeleted();
    }
    public function tambah_surat_keputusan($data)
    {
        return $this->insert($data);
    }
    public function view_surat_keputusan_by_id($id)
    {
        return $this->where(['surat_keputusan_id' => $id])->withDeleted()->first();
    }
    public function simpan_edit_surat_keputusan($id_surat, $data)
    {
        $this->where('surat_keputusan_id', $id_surat);
        return $this->update($id_surat, $data);
    }
}
