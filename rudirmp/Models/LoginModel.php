<?php

namespace Rudi\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
	protected $table      = 'logins';
	protected $primaryKey = 'id';
	protected $useAutoIncrement = true;

	protected $insertID = 0;
	protected $DBGroup  = 'default';

	protected $returnType     = 'array';
	protected $useSoftDeletes = false;
	protected $allowedFields  = [];

	// Dates
	protected $useTimestamps = true;
	protected $dateFormat    = 'datetime';
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $protectFields = true;

	// Validation
	protected $validationRules      = ['email'=>'required|valid_email','password'=>'required'];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks = true;
	protected $beforeInsert   = [];
	protected $afterInsert    = [];
	protected $beforeUpdate   = [];
	protected $afterUpdate    = [];
	protected $beforeFind     = [];
	protected $afterFind      = [];
	protected $beforeDelete   = [];
	protected $afterDelete    = [];

	public function rememberUser(array $data):bool
	{
		if(!isset($data['email'])||!isset($data['password'])) return false;
		
		$user = new UserModel();

	}
}
