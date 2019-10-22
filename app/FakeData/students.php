<?php

use App\Models\StudentModel;

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('fr_FR');

$student  = new StudentModel();
$students = [];
for ($i = 0; $i < 9; $i++)
{
	$faker->firstName;
}
