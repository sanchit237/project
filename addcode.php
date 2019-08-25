<?php include "includes/db.php";?>
<?php ob_start();?>
<?php session_start();?>
<?php 


if (isset($_POST['add'])){
    
    
    $projectname = $_POST['projectname'];
    $projectowner = $_POST['projectowner'];
    $projectdate = $_POST['date'];
    
    $query = "insert into project(projectname,projectowner,date)";
    $query .= "VALUES('$projectname','$projectowner','$projectdate')";
    $result = mysqli_query($connection,$query);
    
        
        header("location:projects.php");
     
}








?>