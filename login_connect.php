<?php

require_once 'Db_connect.php';
session_start();

if(isset($_POST['action'])){
    //$name = mysqli_escape_string($pdo, $_POST['name']);
    //$email = mysqli_escape_string($pdo, $_POST['email']);
    //$password = mysqli_escape_string($connect, md5($_POST['password']));
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //$name = strtolower($name);
    //$name = 'ricardo';
    $name = ucfirst($name);
    $email = strtolower($email);


    $stmt = $pdo->prepare("SELECT * FROM user WHERE name = :name");
    //$stmt->bindParam(":name", $name);
    $stmt->bindParam(':name', $name);
    $stmt->execute();
    //$stmt->execute(['password' => $password]);
    if($stmt->rowCount() == 1){
        $info = $stmt->fetch(); 
        echo $info['name']."<br>";
        echo $info['email']."<br>";
        echo $info['password'];

        /*
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('location:todolist.php');
        */
    }else{
        echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Usuário não encontrado.</p></div>';
    }
}

    


    //if($sql->rowCount() == 1){}

    /*
    $sql = "select * from client where name = '$name' and email = '$email' and password = '$password'";
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('location:todolist.php');
    } else {
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('location:index.php');
    }
    */

?>