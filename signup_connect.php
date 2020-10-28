<?php

$connect_db = new PDO("mysql:dbname=todolist_poo;host=localhost", "root", "");

$stmt = $connect_db->prepare("INSERT INTO user(name, email, password)values(:NAME, :EMAIL, :PASSWORD)");

$fistName = $_POST['first_name'];
$lastName = $_POST['last'];
$email = $_POST['email'];
$password = $_POST['password'];
$name = $fistName.' '.$lastName;

$stmt->bindParam(":NAME", $name);
$stmt->bindParam(":EMAIL", $email);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo 'ok';


?>