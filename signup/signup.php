<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../bookPackage/css/style.css">

    <link rel="shortcut icon" href="../favicon.svg" type="image/svg+xml">
</head>

<body class="img js-fullheight" style="background-image: url(../bookPackage/images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section"></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Sign Up!</h3>
                        <form action="signupauth.php" method="POST" class="signin-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Lastname" name="lastname" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Firstname" name="firstname" required>
                            </div>
                            <span id="emailError" style="color: red;"></span>
                            <div class="form-group">
                                <input type="text" id="emailInput" class="form-control" placeholder="Email" name="email" required>
                                
                            </div>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    const emailInput = document.getElementById("emailInput");
                                    const emailError = document.getElementById("emailError");
                                    const submitButton = document.getElementById("submitButton");

                                    emailInput.addEventListener("input", function() {
                                        const email = emailInput.value.trim();
                                        if (email === "") {
                                            emailError.textContent = "";
                                            return;
                                        }

                                        // AJAX request to check if email exists
                                        const xhr = new XMLHttpRequest();
                                        xhr.open("POST", "check_email.php", true);
                                        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                        xhr.onreadystatechange = function() {
                                            if (xhr.readyState === 4 && xhr.status === 200) {
                                                const response = JSON.parse(xhr.responseText);
                                                if (response.exists) {
                                                    emailError.textContent = "Email already registered";
                                                    submitButton.disabled = true;
                                                } else {
                                                    emailError.textContent = "";
                                                    submitButton.disabled = false;
                                                }
                                            }
                                        };
                                        xhr.send("email=" + encodeURIComponent(email));
                                    });
                                });
                            </script>


                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" placeholder="Password" name="password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3" id="submitButton" name="submit">Sign Up</button>
                            </div>

                        </form>
                        <p class="w-100 text-center">&mdash; Or Sign Up With &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Google</a>
                            <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>