<?php

Class UserConnect {

    private $pdo;

    //conexão com o banoc de dados
    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=todolist_poo;charset=utf8', 'root', '');
        } catch (PDOException $error) {
            echo "Erro com banco de dados: ".$error->getMessage();
            exit();
        } catch (Exception $error){
            echo "Erro Genérico: ".$error->getMessage();
            exit();
        }
    }

    public function insert($name, $email, $password){
        $insert = $this->pdo->prepare('INSERT INTO user(name, email, password) VALUES(:name, :email, :password)');
        $insert->bindParam(":name", $name);
        $insert->bindParam(":email", $email);
        $insert->bindParam(":password", $password);
        $insert->execute();
    }

    public function select($name){
        $result = array();
        $select = $this->pdo->prepare('SELECT * FROM user WHERE name = :name');
        $select->bindParam(':name', $name);
        $select->execute();
        $result = $select->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}


/*
//classe responsável por estabelecer a conexõ com o bd
class Connect {

    private static $instance;

    //metodo para verificar se já existe instancia para chamar apenas uma vez.
    public static function getConnect(){
        if(!isset(self::$instance)){
            self::$instance = new \PDO('mysql:host=localhost;dbname=todolist_poo;charset=utf8', 'root', '');
        }
        return self::$instance;
    }
}
*/

?>