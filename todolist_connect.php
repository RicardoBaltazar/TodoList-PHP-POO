<?php

require_once 'Db_connect.php';
require_once 'todolist.php';

if(isset($_POST['action-todolist'])){
    if(isset($_POST['item-description'])){
        $item = $_POST['item-description'];
        $item = strtolower($item);
        
        $newItem = new UserConnect();
        $insertItem = $newItem->insertItem($name, $item);
        header('location:todolist.php');
    }
}

?>