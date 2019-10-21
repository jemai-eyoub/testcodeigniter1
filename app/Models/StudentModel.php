<?php namespace App\Models;

use CodeIgniter\Model;


class StudentModel extends Model
{
	protected $table = 'students';

	public function index()
	{
		$this->db->table('students');

	}
}
