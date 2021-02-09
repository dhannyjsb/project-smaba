<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DbPengaturan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'login_google'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'google_client_id'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'google_client_secret' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'nama_sekolah' => [
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
			]
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('settings');

		$data_role = [
			[
				'id' => '1',
				'login_google'    => '0',
				'nama_sekolah' => 'SMA BERSAMA'
			]
		];
		$this->db->table('settings')->insertBatch($data_role);
	}

	public function down()
	{
		$this->forge->dropTable('settings');
	}
}
