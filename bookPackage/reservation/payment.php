<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="shortcut icon" href="../../favicon.svg" type="image/svg+xml">

</head>

<body>

    <div class="container d-flex justify-content-center mt-5 mb-5">



        <div class="row g-3">

            <div class="col-md-6">

                <span>Payment Method</span>
                <div class="card">

                    <div class="accordion" id="accordionExample">



                        <div class="card">
                            <div class="card-header p-0">
                                <h2 class="mb-0">
                                    <button class="btn btn-light btn-block text-left p-3 rounded-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="d-flex align-items-center justify-content-between">

                                            <span>Credit card</span>
                                            <div class="icons">
                                                <img src="https://i.imgur.com/2ISgYja.png" width="30">
                                                <img src="https://i.imgur.com/W1vtnOV.png" width="30">
                                                <img src="https://i.imgur.com/35tC99g.png" width="30">
                                                <img src="https://i.imgur.com/2ISgYja.png" width="30">
                                            </div>

                                        </div>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body payment-card-body">

                                    <span class="font-weight-normal card-text">Card Number</span>
                                    <div class="input">

                                        <i class="fa fa-credit-card"></i>
                                        <input type="text" class="form-control" placeholder="0000 0000 0000 0000">

                                    </div>

                                    <div class="row mt-3 mb-3">

                                        <div class="col-md-6">

                                            <span class="font-weight-normal card-text">Expiry Date</span>
                                            <div class="input">

                                                <i class="fa fa-calendar"></i>
                                                <input type="text" class="form-control" placeholder="MM/YY">

                                            </div>

                                        </div>


                                        <div class="col-md-6">

                                            <span class="font-weight-normal card-text">CVC/CVV</span>
                                            <div class="input">

                                                <i class="fa fa-lock"></i>
                                                <input type="text" class="form-control" placeholder="000">

                                            </div>

                                        </div>


                                    </div>

                                    <span class="text-muted certificate-text"><i class="fa fa-lock"></i> Your transaction is secured with ssl certificate</span>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <?php
            include "../../database.php";
            if (isset($_GET['reservation'])) {
                $reservationId = $_GET['reservation'];
                $sql = "SELECT r.reservationId, r.destination, r.checkInDate, r.checkOutDate, r.numAdult, r.numChildren, r.rooms, r.price, u.email, u.userId FROM reservation r JOIN users u ON r.userId = u.userId WHERE r.reservationId = $reservationId";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_array($result);
            ?>

                    <div class="col-md-6">
                        <span>Summary</span>

                        <div class="card">

                            <div class="d-flex justify-content-between p-3">

                                <div class="d-flex flex-column">

                                    <span>Destination: <i class="fa fa-caret-down"></i></span>

                                </div>

                                <div class="mt-1">
                                    <span class="super-month"><?php echo $row['destination']; ?></span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between p-3">
                                <div class="d-flex flex-column">
                                    <span>Check In Date: <i class="fa fa-caret-down"></i></span>
                                </div>
                                <div class="mt-1">
                                    <span class="super-month"><?php echo $row['checkInDate']; ?></span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between p-3">
                                <div class="d-flex flex-column">
                                    <span>Check Out Date: <i class="fa fa-caret-down"></i></span>
                                </div>
                                <div class="mt-1">
                                    <span class="super-month"><?php echo $row['checkOutDate']; ?></span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between p-3">
                                <div class="d-flex flex-column">
                                    <span>Rooms: <i class="fa fa-caret-down"></i></span>
                                </div>
                                <div class="mt-1">
                                    <span class="super-month"><?php echo $row['rooms']; ?></span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between p-3">
                                <div class="d-flex flex-column">
                                    <span>Adults: <i class="fa fa-caret-down"></i></span>
                                </div>
                                <div class="mt-1">
                                    <span class="super-month"><?php echo $row['numAdult']; ?></span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between p-3">
                                <div class="d-flex flex-column">
                                    <span>Children: <i class="fa fa-caret-down"></i></span>
                                </div>
                                <div class="mt-1">
                                    <span class="super-month"><?php echo $row['numChildren']; ?></span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between p-3">
                                <div class="d-flex flex-column">
                                    <span>reservation email: <i class="fa fa-caret-down"></i></span>
                                </div>
                                <div class="mt-1">
                                    <span class="super-month"><?php echo $row['email']; ?></span>
                                </div>
                            </div>

                            <hr class="mt-0 line">

                            <div class="p-3">

                                <div class="d-flex justify-content-between mb-2">
                                    <span>Vat</span>
                                    <span>20%</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>SubTotal<i class="fa fa-clock-o"></i></span>
                                    <span>
                                        $<?php
                                        $tax = 0.2;
                                        $total = $row['price'];
                                        $subtotal = $total / (1 + $tax);
                                        echo round($subtotal, 2);
                                        ?>
                                    </span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Total</span>
                                    <span>$<?php echo $row['price']; ?></span>
                                </div>
                            </div>
                                <a href="profile.php?note=1&id=<?php echo $row['userId']?>&res=<?php echo $row['reservationId'];?>" class="btn btn-primary " style="width: auto; margin-left: 100px; margin-right: 100px;">Pay Now</a>
                                <br>
                                <a href="profile.php?note=0&id=<?php echo $row['userId']?>&res=<?php echo $row['reservationId'];?>" class="btn btn-primary " style="width: auto; margin-left: 100px; margin-right: 100px;">Pay At Reception</a>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
<?php
                }
            }
?>
</body>

</html>