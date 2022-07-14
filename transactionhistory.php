<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Transaction History</title>
  </head>
  <body>
    <?php include 'navbar.php';?>
    <div class="container"><br>
        <center><h1><i class="bi bi-clock-history"></i> Transaction History</h1></center><hr><br>
</div>
    <?php

            include 'connection.php';
            $sql ="select * from transactionhistory";
            $result =mysqli_query($coon, $sql);
        ?>
    <div class="container">
    <?php

session_start();

if(isset($_SESSION['deletehistory_message'])) {
    $message = $_SESSION['deletehistory_message'];
    unset($_SESSION['deletehistory_message']);
    // echo $message;
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
                <th scope="col"><i class="bi bi-layout-text-sidebar-reverse"></i> S.No</th>
                <th scope="col">Sender <i class="bi bi-arrow-right-circle-fill"></i></th>
                <th scope="col"><i class="bi bi-arrow-right-circle-fill"></i> Receiver</th>
                <th scope="col"><i class="bi bi-cash-coin"></i> Amount</th>
                <th scope="col"><i class="bi bi-calendar"></i> Date & Time</th>
                <th scope="col"><i class="bi bi-tools"></i> Operation</th>
            </tr>
        </thead>
        <tbody><?php $sno = 1?>
            <?php while($rows=mysqli_fetch_assoc($result)){ ?><tr>
                <th scope="row"><?php echo  $sno++ ?></th>
                <td><?php echo $rows['sender'] ?>   </td>
                <td><?php echo $rows['receiver'] ?>  </td>
                <td><?php echo $rows['balance'] ?> </td>
                <td><?php echo $rows['datetime'] ?> </td>
                <td><a href="deletehistory.php?id= <?php echo $rows['id'] ;?>" class="btn btn-dark"><b>Delete</b></a></td>
            </tr>
            <?php } ?>           
        </tbody>
    </table><hr>
    <a href="index.php">
                
    <button class="btn btn-dark"><b>Back</b></button>
    </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>