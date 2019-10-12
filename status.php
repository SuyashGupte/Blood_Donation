<?php
include 'connect.php';
session_start();

$query="UPDATE `request` SET `status`='Done' WHERE `id`='{$_SESSION['sess_user']}'";
$result=mysqli_query($con,$query);
   if($result)
   {
    
   header("Location: patient.php");
    echo "updated";
   }
   else
   {
    echo "not updated";
   }
?>