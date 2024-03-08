<?php
session_start();
include "../database.php";

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['email']) && isset($_POST['password'])){
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if(empty($email) || empty($password)){
        header("Location: login.php?id=$packageId&error=Email and password are required");
        exit();
    }
    try{
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            if(password_verify($password, $row['password'])){
                $_SESSION['email'] = $row['email'];
                $_SESSION['userId'] = $row['userId'];
                $user = $row['userId'];
                if($email === 'admin@gmail.com' && $password === 'admin'){
                    header("Location: ../Admine.php");
                    exit();
                }else{
                    header("Location: ../bookPackage/reservation/profile.php");
                    exit();
                }
            }else {
                header("Location: login.php?error=Incorrect Email or Password");
                exit();
            }
        }else {
            throw new Exception("Email does not exist");
        }
    }catch (Exception $e) {
        header("Location: login.php?error=" . "L'utilisateur n'existe pas");
        exit();
    }
}else {
    header("Location: ../index.php");
    exit();
}
?>
