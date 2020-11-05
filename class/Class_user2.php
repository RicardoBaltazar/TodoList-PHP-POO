<?php

require_once './class/Class_db_connect.php';

$name = 'Gabrielle';
$email = 'email@email.com';
$password = '123';

$users2 = new UserConnect();
$dados2 =  $users2->insert($name, $email, $password);


?>