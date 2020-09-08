<?php
namespace Rudi\Controllers;

use CodeIgniter\Controller;

class BaseController extends Controller
{
	protected $helpers = ['cookie','date','html', 'form'];
	public $session;
	public $validation;

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		
		helper($this->helpers);

		$this->session = \Config\Services::session();
		$this->validation = \Config\Services::validation();
	}

}
