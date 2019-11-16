<?php

session_start();

$todo = array(
			1 => ['id' => 1, 'task' => 'Wake Up', 'status' => 0],
			2 => ['id' => 2, 'task' => 'Eat', 'status' => 0],
			3 => ['id' => 3, 'task' => 'Code', 'status' => 0],
			4 => ['id' => 4, 'task' => 'Sleep', 'status' => 0],
			5 => ['id' => 5, 'task' => 'Repeat', 'status' => 0],
		);

$_SESSION['todo'] = $todo;

echo "Data inserted";