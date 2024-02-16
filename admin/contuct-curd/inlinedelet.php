<?php
include 'demo.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $delete = "DELETE FROM `curd` WHERE srno = $id";
    $result1 = mysqli_query($con, $delete) or die("<script>alert('server down')</script>");
    
    echo "<script> alert('data delete success fulley')</script>";

     echo "<script>window.location.href='index.php'</script>";
}
?>