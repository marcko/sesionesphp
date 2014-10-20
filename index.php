  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Users php</title>
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
     <link rel="stylesheet" href="vendor/css/style.css">
  </head>
  <body>
   

  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Login de usuarios</a>
        </div>
        <div class="navbar-collapse collapse">
          <form action="login.php" method="POST" class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="email" class="form-control" id="" placeholder="email" name="email" required>
            </div>
            <div class="form-group">
             <input type="password" class="form-control" id="password" placeholder="password" name="password"  required>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

 <div class="container top">
      
<div class="row">
  
  <div class="col-md-6 col-md-offset-3">
    



<form action="register.php" method="POST" role="form" name"forma">
  <legend>Register</legend>

  <div class="form-group">

      <input type="email" class="form-control" id="" placeholder="email" name="email" required>
      <input type="password" class="form-control" id="password" placeholder="password" name="password"  required>
      <input type="password" class="form-control" id="password2" placeholder="retype password" name="password2" required>
  </div>

  <button type="submit" class="btn btn-primary" >Submit</button>

</form>
    
  </div>
</div>
</div>


    </div> 

    <script src="vendor/js/jquery.min.js"></script>  
    <script src="vendor/js/bootstrap.min.js"></script> 
   
  </body>
  </html>