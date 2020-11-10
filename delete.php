<?php

require_once './class/Class_db_connect.php';

$id = $_GET['id'];

$delete = new UserConnect();
$itemDelete = $delete->deleteItem($id);

header('location:todolist.php')

?>