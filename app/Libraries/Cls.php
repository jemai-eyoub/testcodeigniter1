<?php

namespace App\Libraries;

defined('BASEPATH') || exit('No direct script access allowed');

class Cls
{
	protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
	}

	public function dd1()
	{
		$this->ci->$this->load->helper('assets');
		$this->assets->getArrayHelepr();
	}

}
