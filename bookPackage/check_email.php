<?php
session_start();
include("../database.php");
if(isset($_POST['email'])) {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    if (!$email) {
        echo json_encode(['error' => 'Invalid email format']);
        exit();
    }

    $sqlAdmin = "SELECT COUNT(*) AS count FROM users WHERE email = ?";
    $stmtAdmin = mysqli_prepare($conn, $sqlAdmin);
    mysqli_stmt_bind_param($stmtAdmin, "s", $email);
    mysqli_stmt_execute($stmtAdmin);
    $resultAdmin = mysqli_stmt_get_result($stmtAdmin);
    $rowAdmin = mysqli_fetch_assoc($resultAdmin);
    $countAdmin = $rowAdmin['count'];

    echo json_encode(['exists' => ($countAdmin)]);
} else {
    echo json_encode(['error' => 'Email parameter is missing']);
}
?>
