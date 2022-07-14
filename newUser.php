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
    <?php include 'navbar.php'?><br>

    <div class="container">
        <div class="row" style="margin: 1% 1% 1% 1%;">
            <center>
                <div class="col-12 col-xl-6 col-md-12 "
                    style="height:  auto; border-radius: 10px; border-bottom-right-radius: 10px; background-color: rgb(184, 184, 184);">
                    <br>

                    <div class="container">
                        <h3 align=left><i class="bi bi-person-plus-fill"></i> New Account</h3>

                        <hr>
                        <img src="http://simpleicon.com/wp-content/uploads/user1.png"
                            style="padding: 5px; border-radius: 50%; border: 3px solid black; height: 40%; width: 30%"
                            alt="#">

                        <hr>

                        <?php
                            include 'connection.php';
                            if(isset($_POST['submit'])){
                                $name=$_POST['name'];
                                $email=$_POST['email'];
                                $balance=$_POST['balance'];
                                
                                $sql= "INSERT INTO `user` (`id`, `Name`, `Email`, `Amount`) VALUES (NULL, '$name', '$email', '$balance')";
                                $result=mysqli_query($coon,$sql);
                                if($result){
                                    echo'
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Account is successfully created. Customer name is '.$name.'</strong>  
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>

                                    ';               
                                }
                            }
                        ?>


                        <form class="row g-3" method="post" align=left>
                            <div class="col-md-12">
                                <input type="text" name = "name" class="form-control form-control-lg" id="Email" value=''
                                    placeholder="Enter Name"required>
                            </div>
                            <div class="col-md-12">
                                <input type="email" name = "email" class="form-control form-control-lg" id="Email" value=''
                                    placeholder="Enter Email" required>
                            </div>
                            <div class="col-md-12">
                                <input type="number" name = "balance" class="form-control form-control-lg" id="Email" value=''
                                    placeholder="Balance" required>
                            </div>
                            <div class="col-md-12">
                                <label for="Email" class="form-label "><i class="fa fa-envelope"
                                        style="font-size:18px;"></i> <button name="submit" type="submit"
                                        class="btn btn-success"><b>Submit</b></button> <button type="reset"
                                        class="btn btn-primary"><b>Reset</b></button></label>

                            </div>
                            <a href="index.php" style="width:100%;">
                                <button type="button" style="width:100%;" class="btn btn-secondary btn-lg"
                                    data-bs-dismiss="modal"><b>Back</b></button>
                            </a>
                            <hr>
                            <br>

                        </form>

                    </div>
                </div>
            </center>

        </div>

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