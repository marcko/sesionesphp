<?php
include 'connect.php';
$email = $_POST['email'];
$password = $_POST['password'];
/*$password2 = $_POST['password2'];*/
$omega = $_POST['omega'];
$sap = $_POST['sap'];
$oracle = $_POST['oracle'];
 $validuser = mysql_query("SELECT email from user where email ='$email'",$connection);
 $valid = mysql_num_rows($validuser);
 if($valid!=0){
  echo "<script>alert('Este usuario ya existe'); window.location.href='index.html'</script>";
 }else{
  mysql_query("INSERT INTO user(email, password,omega,sap,oracle)values('$email','$password','$omega','$sap','$oracle')") 
           or die("error al insertar datos");
              echo "<script>alert('Registro correcto de usuario'); window.location.href='home.php'</script>";

 }
?>