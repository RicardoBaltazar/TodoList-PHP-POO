<?php

require_once './class/Class_db_connect.php';
session_start();

if(isset($_POST['action'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $name = ucfirst($name);
    $email = strtolower($email);

    $confirm = new UserConnect();
    $confirmLogin =  $confirm->login($name, $email, $password);
    
    if(count($confirmLogin) == 1){
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('location:todolist.php');
    }else{
        echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Usuário não encontrado.</p></div>';
    }
}

?>