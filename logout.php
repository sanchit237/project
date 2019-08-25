<?php session_start();?>
<?php ob_start();?>

<?php 

$_SESSION['username']=null;
$_SESSION['password']=null;
header("location:index.php");
?>