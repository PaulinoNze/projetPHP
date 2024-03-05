<?php
session_start();
include "../../database.php";

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function totalPrice() {
    include "../../database.php";
    $packageId = $GLOBALS["package"];
    $numPeople = $GLOBALS["numPeople"];
    $sql = "SELECT price FROM packages WHERE packageId = $packageId";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $tax = 0.2;
        $subTotal = $numPeople * $row['price'];
        $totalPrice = $subTotal + ($tax * $subTotal);
        return $totalPrice;
    } else {
        return 0;
    }
}

$userId = $_POST['userId'];
$package = $_POST['packageId'];
$destination = $_POST['destination'];
$checkInDate = $_POST['checkInDate'];
$checkOutDate = $_POST['checkOutDate'];
$rooms = $_POST['rooms'];
$adults = $_POST['adults'];
$children = $_POST['children'];
$numPeople = intval($adults) + intval($children);
$price = totalPrice();
if(isset($_POST['submit'])){
    $sql = "INSERT INTO reservation(destination, checkInDate, checkOutDate, rooms, numAdult, numChildren, totalPeople, price, packageId, userId) VALUES ('$destination', '$checkInDate', '$checkOutDate', '$rooms', '$adults', '$children', '$numPeople', '$price', '$package', '$userId')";
    if(mysqli_query($conn, $sql)){
        $reservationId = mysqli_insert_id($conn);
        header("Location: payment.php?reservation=$reservationId");
        exit();
    }else{
        echo "Error: " . mysqli_error($conn);
        exit();
    }
}
?>