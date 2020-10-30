<?php

require_once 'Db_connect.php';

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$name = $firstName.' '.$lastName;


try {
    $stmt = $pdo->prepare("INSERT INTO user(name, email, password) VALUES(:name, :email, :password)");
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();

} catch (PDOException $error) {
    echo 'Erro com banco de dados '.$error ->getMessage();
} catch(Exception $error) {
    echo 'Erro generico '.$error ->getMessage();
}



/*
try {
    $connect_db = new PDO("mysl:dbname=todolist_poo;host=localhost", "root", "");    //code...
} catch(PDOException $error) {
    echo 'Erro com banco de dados '.$error ->getMessage();
} catch(Exception $error) {
    echo 'Erro generico '.$error ->getMessage();
}


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

*/
?>