<?php
    session_start();
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    include("../database.php");

    if(isset($_POST['submit'])) {
        $firstname = validate(mysqli_real_escape_string($conn, $_POST['firstname']));
        $lastname = validate(mysqli_real_escape_string($conn, $_POST['lastname']));
        $email = validate(mysqli_real_escape_string($conn, $_POST['email']));
        $password = validate(mysqli_real_escape_string($conn, $_POST['password']));
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $packageId = $_POST['submit'];
        $sql = "INSERT INTO users(firstname, lastname, email, password) VALUES ('$firstname','$lastname','$email','$hash')";
        if(mysqli_query($conn, $sql)){
        $userId = mysqli_insert_id($conn);
            header("Location: reservation/book.php?id=$packageId&user=$userId");
            exit();
        }else{
            echo "Error: " . mysqli_error($conn);
            exit();
        }
    }
?>
