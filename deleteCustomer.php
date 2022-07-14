<?php

    include 'connection.php';
    $id=$_GET['id'];
    echo $id;
    $sql = "DELETE FROM `user` WHERE `user`.`id` = $id";
    $result=mysqli_query($coon,$sql);
    if(!$result)
    {
        echo "Error : ".$sql."<br>".mysqli_error($coon);
        header("Location: transactionhistory.php");
    }
    else{
        session_start();
        $_SESSION['flash_message'] = "Account is Successfully Deleted   ";
        header("Location: transferMony.php");
    }  
?>