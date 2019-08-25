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
       
       <h1 class="text-center"> PROJECTS</h1>
       <br>
       <div class="row">
           
          <div class="col-3">
            <h2> WELCOME </h2> 
             
             <h2> &nbsp;<?php echo $_SESSION['username']?> </h2>
             
          
              
              
               <div class="logout">
       
                 <a class ="btn btn-primary"href ="logout.php">logout</a>       
               </div>
          </div> 
           
           <div class="col-9">
               
    
            
            <table class="table table-hover table-bordered">
                <thead class="thead-light">
                    <tr>
                        
                        <th>PROJECT ID</th>
                        <th>PROJECT NAME</th>
                        <th>PROJECT OWNER</th>
                         <th>PROJECT DATE</th>
                         <th>ACTION 1</th>
                         <th>ACTION 2</th>
                          
                    </tr>   
                </thead>
                <tbody>
                    
                        
                 <?php
                        
                  $query = "select * from project";
                        
                  $pro = mysqli_query($connection , $query); 
                        
                    while( $row = mysqli_fetch_assoc($pro)){
                        
                        
                          $projectid = $row['id'];
                         $projectname = $row['projectname'];                        
                         $projectowner = $row['projectowner'];
                        $projectdate = $row['date'];
                    echo "<tr>";
                      echo "<td> $projectid </td>" ;  
                       echo "<td> $projectname </td>";  
                        echo "<td> $projectowner </td>"; 
                         echo "<td> $projectdate </td>"; 
                        echo "<td><a href='editprojects.php?edit={$projectid}'>EDIT</a></td>";
                        echo "<td><a href='projects.php?delete= {$projectid}'>DELETE</a></td>";
                        echo "</tr>";
                     }    
                        
                        ?>       
                                                   
                
                
                </tbody>
                
                
            </table>
               
               <?php 
               if (isset($_GET['delete'])){
                   
                 $delete = $_GET['delete'];
                $dquery = "delete from project where id = $delete ";   
                $result = mysqli_query($connection , $dquery);
                   header('location:projects.php');
                        
                   
               }  
               ?>
          
           
               
            <div class="button">
                
                
                <a class="btn btn-primary" href="addprojects.php" > ADD NEW </a>
                
            </div>   
               
        
           
           
       </div>
       
       
   </div>
    
</body>
</html>


