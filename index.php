<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <title>Spark Bank</title>
    <style>
        .mydiv:hover {

            background-color: rgb(220, 220, 205);
            border: 5px solid black;

        }

        mydiv {
            height: 200px;
        }
    </style>
</head>

<body>
<?php include 'navbar.php';?>
    <center>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBG5dh5-4XFuKNgz6N78x4B6J0jH6OK5Msp4SWAxwZN6_iQc7WvD2R_IR3OdkjxaWoZlY&usqp=CAU"
            alt="">
        <h1>
            Sparks Foundation Bank
        </h1>
    </center>
    <hr><br>
    <center>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-4 my-2">
                    <a href="newUser.php" class="btn">
                        <div class="card mydiv" style="width: 18rem;">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/7/70/User_icon_BLACK-01.png"
                                width="100" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="btn btn-dark" style="width: 100%;"><b>New Account</b></h3>
                                <p class="card-text">You can create a new Customers</p>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-12 col-md-6 col-xl-4  my-2">
                    <a href="transferMony.php" class="btn">
                        <div class="card mydiv" style="width: 18rem;">
                            <img src="https://icon-library.com/images/x-12-512_11016.png" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h3 class="btn btn-dark" style="width: 100%;"><b>View All Customers and Transfer Mony</b></h3>
                                <p class="card-text">You can View all customers and Transfer mony</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-xl-4 my-2">
                    <a href="transactionhistory.php" class="btn">
                        <div class="card mydiv" style="width: 18rem;">
                            <img src="https://cdn-icons-png.flaticon.com/512/32/32223.png" width="100"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="btn btn-dark" style="width: 100%;"><b>Transfer History</b></h3>
                                <p class="card-text">Show all transfer history</p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </center> <hr> <br>
    <div>
        <div style="background-color:rgb(27, 35, 35);"><center><h5 style="color:beige; padding-top: 10px;">Create by - Vineet Krishna Gupta</h5><p style="color:beige; padding-bottom: 10px;">vineetkrishnagupta@gmail.com</p></center></div>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>