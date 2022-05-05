<?php
include 'connect.php';
if(isset($_POST['sub'])){
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $i="insert into reg(username,password)value('$u','$p')";
    mysqli_query($con, $i);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <h1> Cadastre o Produto </h1>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Nome do produto
                        <input type="text" name="user">
                    </td>
                </tr>
                <tr>
                    <td>
                        Preço do produto
                        <input type="text" name="pass">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                </tr>
            </table>
    </body>
</html>
