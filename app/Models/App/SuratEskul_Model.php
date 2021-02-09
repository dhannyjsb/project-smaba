<?php

namespace App\Models\App;

use CodeIgniter\Model;

class SuratEskul_Model extends Model
{
    protected $table      = 'surat_eskul';
    protected $primaryKey = 'surat_eskul_id';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = [
        'no_surat_eskul',
        'second_surat_eskul',
        'no_berkas_eskul',
        'alamat_surat_eskul',
        'tanggal_surat_eskul',
        'perihal_surat_eskul',
        'tahun_surat_eskul',
        'pembuat_surat_eskul',
        'pengedit_surat_eskul',
        'penghapus_surat_eskul',
        'id_gdrive_sk',
    ];

    public function get_surat_eskul_list($tahun_surat)
    {
        $this->join('akun', 'akun.id_unik = surat_eskul.pembuat_surat_eskul');
        $this->select('akun.nama_lengkap as pembuat');
        $this->select('surat_eskul.*');
        $this->where('tahun_surat_eskul', $tahun_surat);
        $this->orderBy('no_surat_eskul');
        return  $this->findAll();
    }
    public function get_surat_eskul_list_admin($tahun_surat)
    {
        //  $this->from('surat_eskul as t1');
        //  $this->join('akun', 'akun.id_unik = surat_eskul.pembuat_surat_eskul');
        $this->join('akun as t2', 't2.id_unik = surat_eskul.pembuat_surat_eskul', 'LEFT');
        $this->join('akun as t3', 't3.id_unik = surat_eskul.pengedit_surat_eskul', 'LEFT');
        $this->join('akun as t4', 't4.id_unik = surat_eskul.penghapus_surat_eskul', 'LEFT');

        $this->select('t2.nama_lengkap as pembuat');
        $this->select('t3.nama_lengkap as pengedit');
        $this->select('t4.nama_lengkap as penghapus');

        $this->select('surat_eskul.*');
        $this->where('tahun_surat_eskul', $tahun_surat);
        $this->orderBy('no_surat_eskul');
        return  $this->withDeleted()
            ->findAll();
    }
    public function hapus_surat_eskul($id, $penghapus_surat_eskul)
    {
        $data = array(
            'penghapus_surat_eskul' => $penghapus_surat_eskul,
        );
        $this->where('surat_eskul_id', $id);
        $this->update($id, $data);
        $this->where('surat_eskul_id', $id);
        return $this->delete();
    }
    public function hapus_permanen_surat_eskul($id)
    {

        $this->where('surat_eskul_id', $id);
        return $this->purgeDeleted();
    }
    public function tambah_surat_eskul($data)
    {
        return $this->insert($data);
    }
    public function view_surat_eskul_by_id($id)
    {
        return $this->where(['surat_eskul_id' => $id])->withDeleted()->first();
    }
    public function simpan_edit_surat_eskul($id_surat, $data)
    {
        $this->where('surat_eskul_id', $id_surat);
        return $this->update($id_surat, $data);
    }
}
