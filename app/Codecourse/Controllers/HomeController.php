<?php
namespace Codecourse\Controllers;

use Codecourse\Library\Controller;

class HomeController extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->loadView('home/index');
	}
}