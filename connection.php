<?php
$con=new mysqli('localhost','root','','Employee');
if($con){
    // echo "connection successfull <br>";
}else{
    die(mysqli_error($con));
}
?>