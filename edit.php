<?php
include'connect.php';
if(isset($_POST['sub'])){
    $t=$_POST['text'];
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $c=$_POST['city'];
    $g=$_POST['gen'];
    if($_FILES['f1']['name']){
    move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
    $img="image/".$_FILES['f1']['name'];
    }
    else{
        $img=$_POST['img1'];
    }
    $i="update reg set name='$t',username='$u',password='$p',city='$c',gender='$g',image='$img' where id='$_SESSION[id]'";
    mysqli_query($con, $i);
    header('location:home.php');
}
     $s="select*from reg where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);
    ?> 
<form method="POST" enctype="multipart/form-data">
            <table>
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
                        Nome do produto
                        <input type="text" name="user" value="<?php echo $f['username']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Preço do produto
                        <input type="text" name="pass" value="<?php echo $f['password']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                </tr>
            </table>
</form>