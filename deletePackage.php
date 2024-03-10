<?php
include "database.php";

if(isset($_GET['id'])) {
    $packageId = $_GET['id'];
    $sql = "DELETE FROM packages WHERE packageId = '$packageId'";
    if(mysqli_query($conn, $sql)) {
        header("Location: viewPackage.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
