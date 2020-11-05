<?php

require_once './class/Class_db_connect.php';

$name = 'Ricardo Baltazar';

$name2 = 'gabrielle';
$email2 = 'email@email.com';
$password2 = '123';

$users = new UserConnect();
$dados =  $users->select($name);
$dados2 = $users->select($name2);


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