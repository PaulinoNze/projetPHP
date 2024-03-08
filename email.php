



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="styl.css">
    
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">


    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>


  </head>
 
  <header>
        <div class="navbar">
        <div class="logo">
        <a href="index.php"><img src="./assets/images/logo.svg" alt="Tourly logo"></a>
            
        </div>

        <ul class="links">
            <li><a href="index.php">Home</a></li>
            <li><a href="login/login.php">Sign in</a></li>
            
        </ul>
        <div class="buttons">
            <a href="packages.php" class="action-button pro">Book now</a>
            <a href="declaration.php" class="action-button">Learn more</a>
        </div>

        <div class="barger-menu-button">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
    <div class="barger-menu open">
        <ul class="links">
            <li><a href="langues">Home</a></li>
            <li><a href="connexion">Admin</a></li>
          
            <div class="divider"></div>
            <div class="buttons-barger-menu">
                <a href="#" class="action-button pro">Book now</a>
                <a href="#" class="action-button">Learn more</a>
            </div>
        </ul>
    </div>

    
    </header>



    <script>
        const bargerMenuButton = document.querySelector('.barger-menu-button')
        const bargerMenuButtonIcon = document.querySelector('.barger-menu-button i')
        const bargerMenu = document.querySelector('.barger-menu')
        
        bargerMenuButton.onclick = function(){
            bargerMenu.classList.toggle('open')
            const isOpen =  bargerMenu.classList.contains('open')
            bargerMenuButtonIcon.classList = isOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'
        }

    </script>




    <div class="container">
    


      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          
          <p class="text">
            

          <?php 
        
        include "database.php";
        $message = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Récupérer les données du formulaire
          $name = $_POST["name"];
          $email = $_POST["email"];
          $phone = $_POST["phone"];
          $message = $_POST["message"];
        
          // Préparer et exécuter la requête SQL d'insertion
          $sql = "INSERT INTO contacte (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
        
          if ($conn->query($sql) === TRUE) {
              echo "<p style='color: green;'>Votre message a été bien envoiyer on va vous contactera par email ou par numeros telephone merci !!</p>";
          } else {
              echo "Erreur lors de l'enregistrement du message : " . $conn->error;
          }
        }


        
        ?>



            
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>92 Cherry Drive Uniondale, NY 11553</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>lorem@ipsum.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>123-456-789</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
        
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="" method="POST" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" name="send" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="app.js"></script>












    




  </body>
</html>
