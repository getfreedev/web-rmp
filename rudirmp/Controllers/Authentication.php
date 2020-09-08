<?php

namespace Rudi\Controllers;

use Rudi\Controllers\BaseController;

class Authentication extends BaseController
{
	protected $user;

	public function __construct()
	{
		$this->user = new \Rudi\Models\UserModel();
	}

	private function view(string $name, array $data = [], array $option = [])
	{
		$data = [
			'title' => $name,
			'valid' => $this->validation,
		];
		return view("Rudi\\Views\\auth\\$name", $data, $option);
	}
	
	//--------------------------------------------------------------------

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
	
	//--------------------------------------------------------------------

	public function login()
	{
		return $this->view('login');
	}

	public function attLogin()
	{
		$rule = [
			'emai' => 'required|valid_email',
			'password' => 'required',
		];
		if (!$this->validate($rule || !$this->user->save($this->request->getPost()))) {
			return \redirect()->back()->withInput()->withCookies();
		}
	}
	
	//--------------------------------------------------------------------

}