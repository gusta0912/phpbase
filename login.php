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
       echo 'username or password does not exist';
   }
  
}
if (isset($_POST['reg'])) {
  header('location: reg.php');
  exit();
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
                
                <tr>
                    <td>
                        Username
                        <input type="text" name="user">
                    </td>
                </tr>
                <tr>
                    <td>
                        password
                        <input type="password" name="pass">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="sub" value="submit">
                    </td>
                </tr>
               <tr>
                    <td>
                        <input type="submit" name="reg" value="registrar">
                    </td>
                </tr>
            </table>
    </body>
</html>
