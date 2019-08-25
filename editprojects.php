<?php include "includes/db.php";?>
<?php ob_start();?>
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</head>
<body>
    <!-- A grey horizontal navbar that becomes vertical on small screens -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" >

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#"> PROJECTS </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"> USERS </a>
    </li>
  
  </ul>

</nav>
   <br>
    <div class="container">
         
         <h1 class="text-center"> EDIT PROJECTS </h1>
         
        <div class="row">
            
            <div class="col-3">
                 
                 <h1> WELCOME </h1>
                <h2> &nbsp; <?php echo $_SESSION['username']?> </h2>
              <br>
               <div class="logout">
       
                 <a class ="btn btn-primary"href ="logout.php">logout</a>       
               </div>
            </div>
            <div class="col-9">
                <br>
                             <?php 
                     
if (isset($_POST['update'])){
    
    $getid = $_GET['edit']; 
    $projectname = $_POST['projectname'];
    $projectowner = $_POST['projectowner'];
    $projectdate = $_POST['date'];
    
    $query = "UPDATE project SET projectname = '$projectname' , projectowner = '$projectowner', date = '$projectdate' where id = $getid";
   // $query = "UPDATE project SET";
    //$query .= "projectname = $projectname, ";
    //$query .= "projectowner = $projectowner, ";
    //$query .= "date = $projectdate ";
    //$query .= "Where id = $getid ";
    $result = mysqli_query($connection,$query);
    if(!$result){
        
        
        die("query failed".mysqli_error($connection));
    }
  
        header("location:projects.php");
   
}

?> 
                
                
              <form action="" method="post" class="was-validated">
                    <?php
                   if (isset($_GET['edit'])){ 
                     $getid = $_GET['edit'];  
                 
                  $query = "select * from project where id = $getid ";
                        
                  $pro = mysqli_query($connection , $query); 
                        
                    while ($row = mysqli_fetch_assoc($pro)){
                        
                        
                         $projectid = $row['id'];
                         $projectname = $row['projectname'];                        
                         $projectowner = $row['projectowner'];
                        $projectdate = $row['date'];
                    }}
        
                ?>

                 <div class="form-group">
                    
                    <label class="font-weight-bold" for="project">PROJECT NAME</label>
                    <input type="text" class="form-control" name="projectname" placeholder="Enter Project Name" value="<?php echo $projectname ?>" required>
                       
                </div>
                    <div class="form-group">
                    
                    <label  class="font-weight-bold" for="owner">PROJECT OWNER</label>
                    <input type="text" class="form-control" name="projectowner" placeholder="Enter Project Owner" value="<?php echo $projectowner ?>" required>
                       
                </div> 
                    <div class="form-group">
                    
                    <label class="font-weight-bold" for="owner">Project DATE</label>
                    <input type="date" class="form-control" name="date" value="<?php echo $projectdate?>" required>
                       
                </div> 
                    <div class="form-group">
                    
                    <input type="submit" class="btn btn-success" name="update" value="Update project" >
                       
                </div>   
              </form>  


            </div>
            
            
        </div>
            
    </div>  
</body>
</html>