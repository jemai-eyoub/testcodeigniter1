<?php

function cssUrl()
{
	$db      = \Config\Database::connect();
	$builder = $db->table('students');
	$builder->get();
	echo $db->getLastQuery();
}

/*function getArrayHelepr()
{
	$CI =& get_instance();
	$CI->load->helper('array');
	$ci = $CI->load->library('Cls');

	$ci->dd1();
}*/
