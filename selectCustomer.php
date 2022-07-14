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

    <title>Transaction</title>
</head>

<body>
<?php include 'navbar.php';?>
    <?php
        include 'connection.php';
        $id=$_GET['id'];
        //echo $id;
        $sql = "SELECT * FROM  user where id=$id";
        $result=mysqli_query($coon,$sql);
        if(!$result)
        {
            echo "Error : ".$sql."<br>".mysqli_error($coon);
        }
        $rows=mysqli_fetch_assoc($result);

        
    ?>
    <div class="container">
    <br>
        <center><h1>Transfer To</h1></center><hr><br>
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col"><i class="bi bi-layers"></i> ID</th>
                <th scope="col"><i class="bi bi-person-fill"></i> Name</th>
                <th scope="col"><i class="bi bi-envelope-paper"></i> Email</th>
                <th scope="col"><i class="bi bi-cash-coin"></i> Balance</th>
                     
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $rows['id'] ?></th>
                    <td><?php echo $rows['Name'] ?>   </td>
                    <td><?php echo $rows['Email'] ?>  </td>
                    <td><?php echo $rows['Amount'] ?> </td> 
                </tr>    
            </tbody>
        </table>
    </div><br>
    <div class="container">
    <?php
if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    echo $from;
    echo $to;
    echo $amount;

    include 'connection.php';
    $sql = "SELECT * from user where id=$from";
    $result = mysqli_query($coon,$sql);
    $fromUser = mysqli_fetch_array($result);

    $sql = "SELECT * from user where id=$to";
    $query = mysqli_query($coon,$sql);
    $toUser = mysqli_fetch_array($query);

    if($amount == 0){
        echo'
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            
            <strong>Sorry!</strong> Please Enter Amount , Thankyou
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

         ';
    }
    else if($amount > $fromUser['Amount']) 
    {
        
        echo'
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            
            <strong>Sorry!</strong> customer have not <b>₹'.$amount.' </b>in account , Thankyou
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

         ';
    }
    else{
        $amount = abs($amount);
        $newBablance = $fromUser['Amount'] - $amount;
        echo $newBablance;
        $sql = "UPDATE user set Amount = $newBablance where id=$from";
        mysqli_query($coon,$sql);

        $newBablance = $toUser['Amount'] + $amount;
        echo $newBablance;
        $sql = "UPDATE user set Amount = $newBablance where id=$to";
        mysqli_query($coon,$sql);

        $sender = $fromUser['Name'];
        $receiver = $toUser['Name'];
        $sql = "INSERT INTO transactionhistory(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($coon,$sql);

                if($query){
                    echo "ok";
                    

                    session_start();

                    $_SESSION['flash_message'] = "Transaction is Successfully Completed  : ".$sender." to ".$receiver;
                    header("Location: transferMony.php");


                   
               }

    }


}
?>
        <form method="post">
            <label for=""><b>Transfer To</b></label>
             
            <!-- <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
             
            </select> -->
                <select name="to" class="form-control" required>
                    <option value="" disabled selected>Choose Person Transfer to Money</option>
               

                    <?php
                        include 'connection.php';
                        $id=$_GET['id'];
                        //echo $id;
                        $sql = "SELECT * FROM  user where id != $id";
                        $result=mysqli_query($coon,$sql);
                        if(!$result)
                        {
                            echo "Error : ".$sql."<br>".mysqli_error($coon);
                        }
                        
                    ?>
                    <?php
                        while($rows=mysqli_fetch_assoc($result)){
                    ?>
                    <option value="<?php echo $rows['id'];?>">
                    <?php echo $rows['Name'] ;?> <b>(Balance: 
                    <?php echo $rows['Amount'] ;?> )</b>
                    </option>
                    <?php }?>
                    
            </select><br>
            <label for=""><b>Amount</b></label>
            <input class="form-control" name="amount" type="text" placeholder="Default input" aria-label="Enter Amount to transfer" required><hr>
            <button type="submit" name="submit" class="btn btn-success"><b>Transfer</b></button>
            <a href="transferMony.php" class="btn btn-dark">
            <b>Back</b>
            </a>
        </form>
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