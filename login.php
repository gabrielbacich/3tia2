<?php

include'connect.php';

if(isset($_POST['sub'])){
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $s= "select * from reg where username='$u' and password= '$p'";   
   $qu= mysqli_query($con, $s);
   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);
      $_SESSION['id']=$f['id'];
      header ('location:home.php');
   }
   else{
       echo 'Nome ou preço do produto não existe';
   }
  
}
?>
<html>
      
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1> Produto Login </h1>
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
                <form action="form-action.php" method="post">
            <p>
                <select name="cidades">
                    <option value=""></option>
                    <option value="scs">Frutas</option>
                    <option value="sa">Doces</option>
                    <option value="sbc">Salgado</option>
                </select>
            </p>
        </form>
                <tr>
                    <td>
                        <input type="submit" name="sub" value="submit">
                    </td>
                </tr>
            </table>
    </body>
</html>
