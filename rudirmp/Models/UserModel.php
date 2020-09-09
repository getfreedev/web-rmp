<?php

namespace Rudi\Models;

use CodeIgniter\Model;
use phpDocumentor\Reflection\Types\Boolean;

class UserModel extends Model
{
	protected $table      = 'users';
	protected $primaryKey = 'id';
	protected $useAutoIncrement = true;

	protected $insertID = 0;
	protected $DBGroup  = 'default';

	protected $returnType     = 'array';
	protected $useSoftDeletes = true;
	protected $allowedFields  = ['username','email','password'];

	// Dates
	protected $useTimestamps = true;
	protected $dateFormat    = 'datetime';
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $protectFields = true;

	// Validation
	protected $validationRules      = [
		'username' 	=> 'required|min_length[3]',
		'emai' 		=> 'required|valid_email',
		'password' 	=> 'required|min_length[6]',
		'repassword'=> 'required|matches[password]',
	];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks = true;
	protected $beforeInsert   = ['hashPassword'];
	protected $afterInsert    = [];
	protected $beforeUpdate   = ['hashPassword'];
	protected $afterUpdate    = [];
	protected $beforeFind     = [];
	protected $afterFind      = [];
	protected $beforeDelete   = [];
	protected $afterDelete    = [];

	private function hashPassword(array $data)
	{
		if(!isset($data['data']['password'])) return $data;
		$data['data']['password_hash'] = \password_hash($data['data']['password'], \PASSWORD_DEFAULT);
		unset($data['data']['password']);

		return $data;
	}

	public function isUser(array $data)
	{
		if(!isset($data['email']) || !isset($data['password'])) return false;

		return \password_verify($data['password'],$this->where('email',$data['email'])->first()['password_hash']);
	}
}
