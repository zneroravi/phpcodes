<?php

session_start();

$id = $_GET['id'];
$status = $_GET['status'];

$_SESSION['todo'][$id]['status'] = $status;

echo "Task status changed for $id to $status";