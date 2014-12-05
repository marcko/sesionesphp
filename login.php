<?php
include 'connect.php';
$email = $_POST['email'];
$password = $_POST['password'];
/*$password2 = $_POST['password2'];*/

 $validuser = mysql_query("SELECT email from admin where email ='$email'",$connection);
 $valid = mysql_num_rows($validuser);

 if($valid != 0)
{ 
  $query = mysql_query("SELECT email from admin where email ='$email' and password='$password'",$connection);
  $rowclave = mysql_num_rows($query); 

  if($rowclave != 0)
  { 
      session_start(); 
      $_SESSION['auth'] = 'session'; 
      $_SESSION['currently'] = mysql_result($query,0,0);
      header ("Location: home.php"); 
   }
   else{ 
      echo"<script>alert('password incorrecto'); window.location.href='entrar.html'</script>"; 
   } 
}
else
{ 
    echo"<script>alert('acceso denegado contacta al administrador del sistema'); window.location.href='entrar.html'</script>"; 
} 



?>