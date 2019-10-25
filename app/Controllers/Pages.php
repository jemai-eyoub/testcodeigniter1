<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Files\Exceptions\FileNotFoundException;

class Pages extends Controller
{

	public function index($page = 'posts')
	{
		if (! file_exists(APPPATH . 'Views/pages/' . $page . '.php'))
		{
			throw new FileNotFoundException();
		}
		echo view('pages/' . $page . '.php');
	}

	public function buildLoginForm()
	{
		helper('form');
		echo form_open('/home/login', 'method = "POST"');
		echo form_hidden('hidden_1', '', true);
		echo form_input('name[]', 'dd', 'placeholder = "dd"');
		echo form_input(['name' => 'dd', 'id' => 'dd', 'class' => '', 'value' => 'dd']);
		echo form_checkbox('chk_1', 'val_1', true);
		echo form_dropdown('', '', 'default');

		echo form_upload('file[]', '', '');
		echo form_multiselect('', '', '', '');
		echo form_close();
	}

	/*public function _output($output)
	{

	}

	public function _remap($method)
	{
		if (method_exists(Home::class, $method)) {
			$this->$method();
		} else {
			show404();
		}
	}*/

}
