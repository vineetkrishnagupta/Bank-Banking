<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <title>Hello, world!</title>
</head>

<body>
<?php include 'navbar.php';?>
<?php
    include 'connection.php';
    $sql = "SELECT * FROM user";
    $result = mysqli_query($coon,$sql);
?>
    <div class="container"><br>
        <center><h1>Transfer Mony</h1></center><hr><br>
    <?php

session_start();

if(isset($_SESSION['flash_message'])) {
    $message = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
    //echo $message;
    echo'
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            
            <strong>'.$message.'</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

         ';
}?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><i class="bi bi-layers"></i> ID</th>
                <th scope="col"><i class="bi bi-person-fill"></i> Name</th>
                <th scope="col"><i class="bi bi-envelope-paper"></i> Email</th>
                <th scope="col"><i class="bi bi-cash-coin"></i> Balance</th>
                <th scope="col"> <i class="bi bi-tools"></i> Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php while($rows=mysqli_fetch_assoc($result)){ ?><tr>
                <th scope="row"><?php echo $rows['id'] ?></th>
                <td><?php echo $rows['Name'] ?>   </td>
                <td><?php echo $rows['Email'] ?>  </td>
                <td><?php echo $rows['Amount'] ?> </td>
                <td><a href="selectCustomer.php?id= <?php echo $rows['id'] ;?>" class="btn btn-outline-dark"><b>Transaction</b></a> 
                <a href="deleteCustomer.php?id= <?php echo $rows['id'] ;?>" class="btn btn-outline-danger my-1"><b>Delete</b></a></td>
            </tr>
            <?php } ?>           
        </tbody>
         
        
    </table>
    <a href="index.php" class="btn btn-dark"><b>Back</b></a>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>