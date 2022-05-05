<?php

// Conexão com banco de dados 
include'connect.php';

if(isset($_POST['sub'])){
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $s= "
    select * from reg as r
    INNER join profile_reg as p on p.idProfile = r.fk_idProfile 
    where username='$u' and password= '$p'
    ";   
    $qu= mysqli_query($con, $s);
    if(mysqli_num_rows($qu)>0){
        $f= mysqli_fetch_assoc($qu);
        $_SESSION['id']=$f['id'];
        $_SESSION['profile']=$f['nameProfile'];
        header ('location:home.php');
    }
   else{
       echo 'username or password does not exist';
   }
  
}
?>
<html>
      
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <table>
              <h1>Produto</h1>  
                <tr>
                    <td>
                        Nome Produto
                        <input type="text" name="user">
                    </td>
                </tr>
                <tr>
                    <td>
                        Preço Produto
                        <input type="text" name="pass">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="sub" value="submit">
                    </td>
                </tr>

                <tr>
                    <td>
                        <a href="reg.php"> Registrar</a>
                    </td>
                </tr>
                
            </table>
    </body>
</html>
