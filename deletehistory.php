<?php
    include 'connection.php';
    $id=$_GET['id'];
    $sql = "DELETE FROM `transactionhistory` WHERE `transactionhistory`.`id` = $id";
    $result=mysqli_query($coon,$sql);
    if(!$result){
        echo "Error : ".$sql."<br>".mysqli_error($coon);
        header("Location: transactionhistory.php");
    }
    else{
        session_start();
        $_SESSION['deletehistory_message'] = "History is Successfully Delete  : ".$sender." to ".$receiver;
        header("Location: transactionhistory.php");
    }
        
?>