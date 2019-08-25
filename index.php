<?php include "includes/db.php";?>
<?php ob_start();?>
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</head>
<body>
<br>
    <div class="container">
        
        <h1 class="text-center font-italic"> PROJECT MANAGEMENT </h1>
        <br>
    <div class="row">
            <div class="col-3">
                <h2>LOGIN</h2>
            <form action="login.php" method="post" class="was-validated">
                
                <div class="form-group">
                <label for="username"> Username</label>    
                <input type="text" name="username" class="form-control" placeholder="Enter Username" required>    
                 <div class="valid-feedback">Valid.</div>
                 <div class="invalid-feedback">Please fill out this field.</div>  
                </div>
                <div class="form-group">
                <label for="username"> Password</label>    
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>       
                </div>
                <div class="form-group">    
                <input type="submit" name="login" class="btn btn-primary" value="Login">       
                </div>   
            </form>
        </div>
        
        
        <div class="col-9">
      <!--    <img src="img.jpg" width="900" height="500" alt="img"> -->
    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img.jpg" alt="Los Angeles" width="1000" height="500">
    </div>
    <div class="carousel-item">
      <img src="img1.jpg" alt="Chicago" width="1000" height="500">
    </div>
    <div class="carousel-item">
      <img src="img2.jpg" alt="New York" width="1000" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
       
       
        </div>
    </div>
    </div>
   
</body>
</html>