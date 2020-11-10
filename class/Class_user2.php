<?php

require_once './class/Class_db_connect.php';

$name = 'ricardo';
$email = 'email@email.com';
$password = '123';

$users = new UserConnect();
$dados =  $users->insert($name, $email, $password);

$user = 'ricardo';
$item = 'estudar';

//$list = new UserConnect();
//$item = $list->insertList($user, $item);


?>