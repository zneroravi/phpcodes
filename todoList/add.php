<?php

session_start();

$task = $_GET['task'];

$keys = array_keys($_SESSION['todo']);
sort($keys);

$id = end($keys) + 1;

$temp = array('id' => $id, 'task' => $task, 'status' => 0);

$_SESSION['todo'][$id] = $temp;

echo "New task created";