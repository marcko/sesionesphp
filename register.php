<?php
include 'connect.php';
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

 $validuser = mysql_query("SELECT email from user where email ='$email'",$connection);
 $valid = mysql_num_rows($validuser);

 if($valid!=0){

  echo "<script>alert('Este usuario ya existe'); window.location.href='index.php'</script>";
 }else{

    if($password ===$password2){
        mysql_query("INSERT INTO user(email, password, password2)values('$email','$password','$password2')") 
           or die("error al insertar datos");

              echo "<script>alert('Registrado, ya puedes iniciar sesion'); window.location.href='index.php'</script>";
        
      }else{
        echo "<script>alert('el password debe ser igual en los dos campos'); window.location.href='index.php'</script>";
      }
 }
?>