<?php

require_once 'Db_connect.php';
require_once 'todolist.php';

if(isset($_POST['action-todolist'])){
    $item = $_POST['item-description'];
    $item = strtolower($item);

    try {
        $stmt = $pdo->prepare("INSERT INTO list(user, item) VALUES(:user, :item)");
        $stmt -> bindParam(":user", $name);
        $stmt -> bindParam(":item", $item);
        $stmt->execute();
        header("location:todolist.php");
    } catch(PDOException $error){
        echo 'Erro com banco de dados'.$error ->getMessage();
    } catch(Exception $error) {
        echo 'Erro genérico'.$error ->getMessage();
    }

}

?>