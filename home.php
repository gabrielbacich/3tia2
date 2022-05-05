<?php
    include 'connect.php';
    include 'checkLogin.php';
    $s="select*from reg where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);
    
?>
<html>
    <head>
        
    </head>
    <body>
<table>
    <tr>
        <td>
            Name
        </td><td>
            
<?php
echo $f['username'];?>
        </td></tr>
<tr><td> Nome do produto</td>
    <td>
<?php
echo $f['password']."<br>";?>
    </td></tr>
    <tr><td> Nome do produto</td>
</table>
<a href="edit.php">Editar</a>
<a href="delete.php">Deletar</a>
<a href="logout.php">Sair</a>
</body>
</html>