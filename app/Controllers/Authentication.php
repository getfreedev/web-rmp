<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Authentication extends BaseController
{
	protected $user;

	public function __construct()
	{
		$this->user = new UserModel();
	}

	private function view(string $name, array $data = [], array $option = [])
	{
		$data = [
			'title' => $name,
			'valid' => $this->validation,
		];
		return view("auth\\$name", $data, $option);
	}

	public function register()
	{
		return $this->view('register');
	}

	public function attRegister()
	{
		$rule = [
			'username' => 'required|min_length[3]',
			'emai' => 'required|valid_email',
			'password' => 'required|min_length[6]',
			'repassword' => 'required|matches[password]',
		];
		if (!$this->validate($rule || !$this->user->save($this->request->getPost()))) {
			return \redirect()->back()->withInput()->withCookies();
		}
	}
}