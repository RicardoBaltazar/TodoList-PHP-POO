<?php

Class UserConnect {

    private $pdo;

    //conexão com o banco de dados
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

    public function insertList($user, $item){
        $insertList = $this->pdo->prepare('INSERT INTO list(user, item) VALUES(:user, :item)');
        $insertList->bindParam(':user', $user);
        $insertList->bindParam(':item', $item);
        $insertList->execute(); 
    }

    public function login($name, $email, $password){
        $login = $this->pdo->prepare("SELECT * FROM user WHERE name = :name AND email = :email AND password = :password");
        //$stmt->bindParam(":name", $name);
        $login->bindParam(':name', $name);
        $login->bindParam(':email', $email);
        $login->bindParam(':password', $password);
        $login->execute();
        $loginConfirm = $login->fetchAll(PDO::FETCH_ASSOC);
        return $loginConfirm;
    }

    public function select(){
        $result = array();
        //$select = $this->pdo->prepare('SELECT * FROM user WHERE name = :name');
        $select = $this->pdo->prepare('SELECT * FROM user');
        //$select->bindParam(':name', $name);
        $select->execute();
        $result = $select->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function selectList($name){
        $result = array();
        //$select = $this->pdo->prepare('SELECT * FROM user WHERE name = :name');
        $select = $this->pdo->prepare("SELECT * FROM list WHERE list.user = :user");
        $select->bindParam(':user', $name);
        //$select->bindParam(':name', $name);
        $select->execute();
        $result = $select->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function deleteItem($id){
        try{
            $delete = $this->pdo->prepare('DELETE FROM list WHERE id = :id');
            $delete->bindParam(":id", $id);
            $delete->execute();
            header('location:todolist.php');
        
        } catch (PDOException $error) {
            echo 'Erro com banco de dados '.$error ->getMessage();
        } catch(Exception $error) {
            echo 'Erro generico '.$error ->getMessage();
        }
    }

    public function insertItem($name, $item){
        try {
            $insertItem = $this->pdo->prepare("INSERT INTO list(user, item) VALUES(:user, :item)");
            $insertItem -> bindParam(":user", $name);
            $insertItem -> bindParam(":item", $item);
            $insertItem->execute();
            header("location:todolist.php");
        } catch(PDOException $error){
            echo 'Erro com banco de dados'.$error ->getMessage();
        } catch(Exception $error) {
            echo 'Erro genérico'.$error ->getMessage();
        }
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