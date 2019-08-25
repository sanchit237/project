<?php include "includes/db.php"?>
<?php session_start();?>
<?php ob_start();?>

<?php
if (isset($_POST['login'])){
 
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "select * from users where username = '{$username}' && password = '{$password}' ";
    $login = mysqli_query($connection ,$query);
    
    while ( $row = mysqli_fetch_assoc($login)){
        
        $db_userid =$row['id'];
        $db_username = $row['username'];
        $db_password = $row['password'];    
    }
    if ($username !== $db_username && $password !== $db_password){
         header("location:index.php");
    }
    
    else if 
        ($username == $db_username && $password == $db_password){
            
            $_SESSION['username']=$db_username;
            $_SESSION['password']=$db_password;
            header("location:projects.php");
        }
    
}

?>