<?php

require_once './class/Class_db_connect.php';
session_start();


$name = 'Ricardo Baltazar';
$email = 'email@email.com';
$password = 123;

$confirm = new UserConnect();
$confirmLogin =  $confirm->login($name, $email, $password);

if(count($confirmLogin) == 1){
    
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header('location:index.php');
    /*
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    */
}else{
    echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Usuário não encontrado.</p></div>';
}





/*
if(count($dados) > 0){
    echo 'ok'."<br>";
    print_r($dados);
    echo "<br>";
    echo $dados['name'];
    echo "<br>";
    echo $dados['email'];
    echo "<br>";
    echo $dados['password'];
} else {
    echo 'eita';
}
*/

?>