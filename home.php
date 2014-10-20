
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  <?php
    include 'validation.php';
    echo  $_SESSION["currently"]; ?></title>  
      <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
  </head>

  <body>

    <div class="container">
  <div class="jumbotron">
        <h1 >Hola bienvenido a tu sesión</h1>
        <p class="glyphicon glyphicon-user">
   <?php
    include 'validation.php';
    echo  $_SESSION["currently"];

     ?> </p>

      <p>
         <a class="btn btn-danger" href="destroy.php">Salir</a>

      </p>
 
    

  
    </div> 


    </div>

    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="vendor/js/jquery.min.js"></script>  
    <script src="vendor/js/bootstrap.min.js"></script> 
   
  </body>
</html>














   