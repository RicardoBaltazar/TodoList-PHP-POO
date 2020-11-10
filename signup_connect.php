<?php

require_once './class/Class_db_connect.php';

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$name = ucfirst($firstName).' '.ucfirst($lastName);

$email = strtolower($email);

$sign = new UserConnect();
$signup = $sign->insert($name, $email, $password);

?>