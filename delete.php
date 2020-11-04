<?php

require_once 'Db_connect.php';

$id = $_GET['id'];

try{
    $stmt = $pdo->prepare('DELETE FROM list WHERE id = :id');
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header('location:todolist.php');

} catch (PDOException $error) {
    echo 'Erro com banco de dados '.$error ->getMessage();
} catch(Exception $error) {
    echo 'Erro generico '.$error ->getMessage();
}


?>