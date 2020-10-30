<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=todolist_poo', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $error){
    echo 'Erro com banco de dados '.$error ->getMessage();
    exit();
} catch(Exception $error) {
    echo 'Erro generico '.$error ->getMessage();
    exit();
}




/*
Class Connect{

    private $pdo;

    public function __construct($dbname, $host, $user, $password){
        try{
            $this->pdo = new PDO("mysql:dbname=todolist_poo;host=localhost", "root", "");
        } catch(PDOException $error){
            echo 'Erro com banco de dados '.$error ->getMessage();
            exit();
        } catch(Exception $error) {
            echo 'Erro generico '.$error ->getMessage();
            exit();
        }
    }

    public function select(){
        $result = array();
        $cmd = $this->pdo->query("SELECT * FROM user");
        $result = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
};
*/

?>