//<?php
//
//namespace App\Controllers;
//
//use CodeIgniter\Controller;
//use Config\Database;
//
//class Test extends Controller
//{
//
//	protected $db;
//
//	public function __construct()
//	{
//		$this->db = Database::connect();
//		//       To use outside Model View Controller classes [THE SUPER OBJECT CI]
//		//            $CI =& get_instance();
//		//            $CI->load->helper('url');
//		//            $CI->log_message('', 'message');
//		//      $cls = new \Cls();
//		//      $cls->cls1();
//		//      helper('assets');
//		//      cssUrl();
//		//      getArrayHelepr();
//
//}
//
//	public function query() : void
//	{
//		cssUrl();
//		// Query generator
//		$query    = $this->db->query('select * from students where id in ? and name like ?', [[1, 2], 's%']);
//		$students = $query->getResult();
//
//		// Array of objects
//		foreach ($students as $student)
//		{
//			echo $student->name;
//			echo $student->subject;
//			echo $student->age;
//			echo $student->date;
//			echo $student->update . '<br>';
//		}
//
//		// Array of associative arrays
//		$students = $query->getResultArray();
//		foreach ($students as $student)
//		{
//			echo $student['name'];
//			echo $student['subject'];
//			echo $student['age'];
//			echo $student['date'];
//			echo $student['update'] . '<br>';
//		}
//		$this->db->close();
//	}
//
//	public function queryBuilder() : void
//	{
//		$builder = $this->db->table('students');
//		$builder->select(['id', 'name', 'subject'])
//			->where(['name' => 'adel', 'id' => 1])  // AND
//			->orWhere('id', 12)
//			->orWhere('name', 'dd dd');
//		$res = $builder->get()->getResult();
//		d($this->db->getLastQuery());
//		d($res);
//
//		$builder1 = $this->db->table('students');
//		//      $res1 = $builder->select('age');
//		$res1 = $builder1->selectAvg('age');
//		//      $builder->countAll();
//		//      $res = $builder->get()->getResult();
//		 // Get ID of last inserted row
//		//      $this->db->insertID();
//		d($this->db->getLastQuery());
//		d($res1);
//	}
//}
