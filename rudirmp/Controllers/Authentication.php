<?php

namespace Rudi\Controllers;

use Rudi\Controllers\BaseController;
use Rudi\Models\LoginModel;
use Rudi\Models\UserModel;

class Authentication extends BaseController
{
	protected $user;
	protected $login;

	public function __construct()
	{
		$this->user = new UserModel();
		$this->login = new LoginModel();
	}

	private function view(string $name)
	{
		return view("Rudi\\Views\\auth\\$name", ['title' => $name,'valid' => $this->validation]);
	}

	//--------------------------------------------------------------------

	public function register()
	{
		return $this->view('register');
	}

	public function attRegister()
	{
		if (!$this->validate($this->user->getValidationRules()) || !$this->user->save($this->request->getPost())) {
			return \redirect()->back()->withInput()->withCookies();
		}
		return \redirect()->to('login')->withInput()->withCookies();
	}

	//--------------------------------------------------------------------

	public function login()
	{
		return $this->view('login');
	}

	public function attLogin()
	{
		$rule = [
			'email' => 'required|valid_email',
			'password' => 'required',
		];

		if (!$this->validate($rule) || !$this->user->isUser($this->request->getPost())) {
			return \redirect()->back()->withInput()->withCookies();
		}
	}

	//--------------------------------------------------------------------

	public function forgot()
	{
		return $this->view('forgot-password');
	}
	public function attForgot()
	{
		if (!$this->validate(['email' => 'required|valid_email']) || !$this->user->isUser($this->request->getPost())) {
			return \redirect()->back()->withInput()->withCookies();
		}
	}
}
