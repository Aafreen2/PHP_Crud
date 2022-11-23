<?php
$con = new mysqli('localhost','root','root','php_crud');

if(!$con){
    die(mysqli_error($con));
}
?>