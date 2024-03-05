<?php
include "../../database.php";

if(isset($_GET['Rid'])) {
    $userId = $_GET['id'];
    $reservationId = $_GET['Rid'];
    $sql = "DELETE FROM reservation WHERE reservationId = '$reservationId'";
    if(mysqli_query($conn, $sql)) {
        header("Location: profile.php?id=$userId");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
