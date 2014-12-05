<!DOCTYPE html>
<html lang="en">
  <head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  <?php
    include 'validation.php';
    echo  $_SESSION["currently"]; ?></title> 

         <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/css/style.css">
  </head>

  <body>

   <div class="container-fluid">


    <div class="row">

     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 navleft">

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">

        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
           <?php
    include 'validation.php';
    echo  $_SESSION["oracle"];
     
     ?>
    
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
       Analisis de BD
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <?php
    include 'validation.php';
    echo   $_SESSION['sap'];
     
     ?>
    
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
       Herramientas ABAP
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
           <?php
    include 'validation.php';
    echo   $_SESSION['omega'];
     
     ?>

        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
           Gestión de cambios
      </div>
    </div>
  </div>
</div>
      </div>


  <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">  
    <div class="jumbotron">
      <div class="container">
       <h1 >Hola bienvenido a tu sesión</h1>
        <p class="glyphicon glyphicon-user">
   <?php
    include 'validation.php';
    echo  $_SESSION["actual"];
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

