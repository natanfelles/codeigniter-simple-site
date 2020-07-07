<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContactsTable extends Migration
{
	protected $table = 'contacts';

	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 64,
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'subject' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'message' => [
				'type' => 'VARCHAR',
				'constraint' => 2048,
			],
			'created_at' => [
				'type' => 'DATETIME',
			],
			'updated_at' => [
				'type' => 'DATETIME',
			],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable($this->table);
	}

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
