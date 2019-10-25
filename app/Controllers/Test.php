<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;

class Test extends Controller
{

	protected $db;
	protected $cls;

	public function __construct()
	{
		// To use outside Model View Controller classes [THE SUPER OBJECT CI]
		//      $CI =& get_instance();
		//      $CI->load->helper('url');
		//      $CI->log_message('', 'message');
		$this->db = Database::connect();

		//helper('assets');
		//$this->cls = new Cls();
		//$this->cls->dd1();
	}

	public function query()
	{
		// Query generator
		$query    = $this->db->query('select * from students where id in ? and name like ?', [[1, 2], 's%']);
		$students = $query->getResult();

		// Array of objects
		foreach ($students as $student)
		{
			echo $student->name;
			echo $student->subject;
			echo $student->age;
			echo $student->date;
			echo $student->update . '<br>';
		}

		// Array of associative arrays
		$students = $query->getResultArray();
		foreach ($students as $student)
		{
			echo $student['name'];
			echo $student['subject'];
			echo $student['age'];
			echo $student['date'];
			echo $student['update'] . '<br>';
		}
	}

	public function queryBuilder()
	{
		$builder = $this->db->table('students');
		$builder->where('age', 25);
		$builder->get();

		$builder->selectAvg('age');
		$builder->countAll();
		$builder->get();
		// Get ID of last inserted row
		echo $this->db->getLastQuery() . ' ' . $this->db->insertID();
	}
}
