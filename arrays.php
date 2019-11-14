<?php
	#Array - Variable that holds multiple values
	/*
		- Indexed
		- Associative
		- Multi-dimensional
	*/

	// Indexed
	$people = array('pranav', 'ravi', 'priyanka');
	$ids = array(17, 37, 58);
	$cars = ['Honda', 'Toyota', 'Ford'];
	$cars[3] = 'Chevy';
	$cars[] = 'BMW';

	//echo count($cars);
	//print_r($cars);
	//var_dump($cars);

	//echo $people[3];
	//echo $ids[2];
	//echo $cars[4];

	// Associative arrays
	$people = array('jay' => 35, 'raman' => 32, 'prakhar' => 37);
	$ids = [22 => 'jay', 44 => 'raman', 63 => 'prakhar'];

	//echo $people['jay'];
	//echo $ids[22];
	$people['ravi'] = 47;
	//echo $people['ravi'];
	//print_r($people);
	//var_dump($people);

	//Multi-Dimensional
	$cars = array(
		array('Honda', 20, 10),
		array('Toyota', 30, 20),
		array('Ford', 23, 12)
	);

	echo $cars[1][2];
?>