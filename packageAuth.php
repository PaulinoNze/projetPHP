<?php
    session_start();

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    include("database.php");

    if(isset($_POST['submit'])) {
        $packagename = validate(mysqli_real_escape_string($conn, $_POST['packagename']));
        $destination = validate(mysqli_real_escape_string($conn, $_POST['destination']));
        $price = validate(mysqli_real_escape_string($conn, $_POST['price']));
        $numPerson = validate(mysqli_real_escape_string($conn, $_POST['numPerson']));
        $description = validate(mysqli_real_escape_string($conn, $_POST['description']));
        if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK){
            $imgData = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                $sql = "INSERT INTO packages (packagename, description, price, numPerson, image, destination) VALUES ('$packagename', '$description', '$price', '$numPerson', '$imgData', '$destination')";
                if(mysqli_query($conn, $sql)) {
                    header("Location: viewPackage.php");
                    exit();
                } else {
                    echo "Error: " . mysqli_error($conn);
                    exit();
                }
            } 
        }
?>
