
<?php
session_start();
include 'connect.php';
if($con)
{
    echo "CONNECTED";
}
else
{
    echo " Not connected";
}
echo"1";
if(isset($_POST['request']))
{
    echo"2";
    $id=$_SESSION['sess_user'];
    $pname=$_POST['pname'];
    $bgroup=$_POST['bgroup'];
    $qty=$_POST['qty'];  
    echo "3";
    
    
       $query="INSERT INTO `request`(`id`, `pname`, `dname`, `req_bgroup`, `req_qty`, `status`) VALUES ('$id','$pname','','$bgroup','$qty','No')";
       $query_run=mysqli_query($con,$query);
        if($query_run)
        {

            echo "Data Saved";
           header("Location: patient.php");
      
        }
        else
        {
            echo "Data Not Saved";
        }
    
}
?>