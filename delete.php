<?php
    include 'connect.php';

    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        //delete query
        $sql = "delete from `crud` where id = $id";

        $result = mysqli_query($con, $sql);

        if($result){
            //echo "Deleted Successfull";
            header('location:display.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>