<?php
$host= "localhost";
$user = "root";
$pass = '';
$database ="furniture";
$con=mysqli_connect($host,$user,$pass,$database);
// $con=mysqli_connect("localhost", "root", " ", "furniture");
if(!$con){
    die("Connection not established").mysqli_connect_error($con);
}
// else{
//     echo "connection successfully";
// }