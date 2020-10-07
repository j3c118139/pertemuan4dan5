<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Agama extends Migration
{
	private $table = 'agama';
	public function up()
	{
		//buat record
		 $this->forge->addField([
                        'kode_agama'           => [
                                'type'           => 'INT',
                                'constraint'     => '11',
                                'unsigned'		 => TRUE,
                                'auto_increment' => TRUE,
                        ],
                        'Agama'       	=> [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],
                     
                ]);
                $this->forge->addKey('kode_agama', true); //primarykey
                $this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
