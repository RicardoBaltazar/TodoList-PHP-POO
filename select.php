<?php

require_once 'Db_connect.php';

/*
$select = $pdo->query("SELECT * FROM user");
faço um laço while para enquanto tiver registros no banco ele vai pegando um a um até acabar
while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
    echo $linha['name'];
    echo "<br>";
    echo $linha['email'];
    print_r($linha);
}
*/



/*
$obj_Connect = new Connect("todolist_poo", "localhost", "root", "");
$select = $obj_Connect->select();
print_r($select);
echo "<br>";
echo "<br>";
echo $select['name'];
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <td style="font-weight: bold;">Nº</td>
            <td style="font-weight: bold;">Nome</td>
            <td style="font-weight: bold;">Descrição</td>
        </tr>

        <?php
        //$item = mysqli_query($connect, "SELECT * FROM list");
        $select = $pdo->query("SELECT * FROM user");
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>" . $linha['id'] . "</td>
                                <td style='margin-left:25px;'>" . $linha['name'] . "</td>
                                <td>" .$linha['email']. "</td>
                                <td>
                                    <a href='delete.php?id=" . $linha['id'] . "'' class='btn-floating red'>
                                        <i class='material-icons'>delete</i>
                                    </a>
                                </td>
                                </tr>";
        }
        ?>


    </table>
</body>

</html>