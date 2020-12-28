<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'  => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'total_harga' => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'metode_pembayaran' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'bukti_pembayaran' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'status_pembayaran' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'id_order' => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
			],
			'id_users' => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => true,
			],
			'created_at' => [
				'type'           	=> 'DATETIME',
				'null'     		 	=> true,
			],
			'updated_at' => [
				'type'           	=> 'DATETIME',
				'null'     		 	=> true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('id_order', 'order', 'id');
		$this->forge->addForeignKey('id_users','users','id');
		$this->forge->createTable('pembayaran');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('pembayaran');
	}
}
