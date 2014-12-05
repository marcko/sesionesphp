<!DOCTYPE html>
<html lang="en">
  <head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  <?php
    include 'validationadmin.php';
    echo  $_SESSION["currently"]; ?></title> 

         <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/css/style.css">
  </head>

  <body>

   <div class="container-fluid">


    <div class="row">

     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 navleft">
    <!-- Button trigger modal -->

<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#oracle">
  Registro de usuarios
</button>

<!-- Modal -->


<div class="modal fade" id="oracle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Register</h4>
 </div>

  <div class="modal-body">
   <form action="register.php" method="POST" role="form" name"forma">

  <div class="form-group">

      <input type="email" class="form-control" id="" placeholder="email" name="email" required>
      <input type="password" class="form-control" id="password" placeholder="password" name="password"  required>
      <div class="btn-group" data-toggle="buttons">

       <legend>Acceso a aplicaciones</legend>

  <label class="btn btn-warning">
    <input type="checkbox" name="omega" value="omega"> Omega
  </label>
  <label class="btn btn-warning">
    <input type="checkbox" autocomplete="off" name="sap" value="sap"> Sap
  </label>
  <label class="btn btn-warning">
    <input type="checkbox" autocomplete="off" name="oracle" value="oracle"> Oracle
  </label>




      </div>
      </div>





      
   </div>

 
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Submit</button>
      </div>
    </div>
  </div>
</div>
</form>
    
      </div>


  <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">  
    <div class="jumbotron">
      <div class="container">
       <h1 >Hola bienvenido a tu sesión</h1>
        <p class="glyphicon glyphicon-user">
   <?php
    include 'validationadmin.php';
    echo  $_SESSION["currently"];


     ?> </p>

      <p>
         <a class="btn btn-danger" href="destroy.php">Salir</a>

      </p>
      </div>
    </div>
 

  
    </div> 
      </div>

  </div>



    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="vendor/js/jquery.min.js"></script>  
    <script src="vendor/js/bootstrap.min.js"></script> 
   
  </body>
</html>














   