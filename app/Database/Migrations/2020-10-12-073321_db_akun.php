<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DbAkun extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'user_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'id_unik' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'user_role_id'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'username' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'nama_lengkap' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'email' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'mobile_no' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'image' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'background_image' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'facebook' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'instagram' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'password' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'last_login' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'is_active' => [
				'type'           => 'INT',
				'constraint'     => 4,
			],
			'is_admin' => [
				'type'           => 'INT',
				'constraint'     => 4,
			],
			'is_admin_kepegawaian' => [
				'type'           => 'INT',
				'constraint'     => 4,
			],
			'is_sync' => [
				'type'           => 'INT',
				'constraint'     => 4,
			],
			'token' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'password_reset_code' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'last_ip' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'created_at' => [
				'type'           => 'datetime',
			],
			'updated_at' => [
				'type'           => 'datetime',
			],
			'deleted_at' => [
				'type'           => 'datetime',
			],
		]);
		$this->forge->addKey('user_id', TRUE);
		$this->forge->createTable('akun');
		$data_admin = [
			'nama_lengkap' => 'Super Admin',
			'id_unik' => '8II326II7231512SBHAD',
			'email' => 'admin@mail.com',
			'mobile_no' => '080989999',
			'user_role_id' => '1',
			'is_active' => '1',
			'is_admin' => '1',
			'image' => 'default.jpg',
			'background_image' => 'default.jpg',
			'password'    => '$2y$10$/mGG9bQbl0j5UBBKUDmwOu9xHkHyj0TKO6jtb.RubA9jW2zRRIa82'
		];
		$this->db->table('akun')->insert($data_admin);
	}

	public function down()
	{
		$this->forge->dropTable('akun');
	}
}
