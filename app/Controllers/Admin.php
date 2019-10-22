<?php
namespace App\Controllers;

use App\Models\StudentModel;
use CodeIgniter\Controller;
use Config\Database;
use Config\Services;

class Admin extends Controller
{

	protected $homeModel;
	protected $session;
	protected $db;

	public function __construct()
	{
		helper(['url', 'forms', 'security']);
		$this->db        = Database::connect('default');
		$this->session   = Services::session();
		$this->homeModel = new StudentModel();
		//      trace();
	}
}
