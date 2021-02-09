<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SuratEskul extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'surat_eskul_id'    => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'no_surat_eskul' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'second_surat_eskul' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'no_berkas_eskul' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'alamat_surat_eskul' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'tanggal_surat_eskul' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'perihal_surat_eskul' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'tahun_surat_eskul' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'pembuat_surat_eskul' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'pengedit_surat_eskul' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'penghapus_surat_eskul' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'id_gdrive_sk' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'created_at' => [
				'type'           => 'DATETIME',
			],
			'updated_at' => [
				'type'           => 'DATETIME',
			],
			'deleted_at' => [
				'type'           => 'DATETIME',
			],
		]);
		$this->forge->addKey('surat_eskul_id', TRUE);
		$this->forge->createTable('surat_eskul');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('surat_eskul');
	}
}
