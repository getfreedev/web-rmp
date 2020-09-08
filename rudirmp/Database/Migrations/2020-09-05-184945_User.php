<?php

namespace Rudi\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'			=>[ 'type'=>'integer','constraint'=>11,'unsigned'=>true,'auto_increment'=>true],
			'username'		=>[ 'type'=>'varchar','constraint'=>64],
			'email'			=>[ 'type'=>'varchar','constraint'=>64],
			'password_hash'	=>[ 'type'=>'varchar','constraint'=>255],

			'created_at'	=>[ 'type'=>'datetime','null'=>true],
			'updated_at'	=>[ 'type'=>'datetime','null'=>true],
			'deleted_at'	=>[ 'type'=>'datetime','null'=>true],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->addUniqueKey('email');
		$this->forge->createTable('userstest',true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('userstest', true);
	}
}
