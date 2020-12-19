<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Order extends Migration
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
			'nama_product'=> [
					'type'           => 'VARCHAR',
					'constraint'     => '255',
			],
			'alamat' => [
					'type'           => 'TEXT',
					'constraint'     => '255',
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
			$this->forge->addForeignKey('id_users','users','id');
			$this->forge->createTable('order');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('order');
	}
}
