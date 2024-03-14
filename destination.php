<?php
session_start();
if(isset($_SESSION['userId']) && isset($_SESSION['firstname'])){

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TourDakhla - Travel agancy</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->
  
<header class="header bg-primary" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <div class="helpline-box">

        </div>

        <a href="#" class="logo">
          <img src="./assets/images/logo.svg" alt="Tourly logo">
        </a>

        <div class="header-btn-group">

          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

      </div>
    </div>


    <div class="header-bottom">
      <div class="container">

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <a href="#" class="logo">
              <img src="./assets/images/logo-blue.svg" alt="Tourly logo">
            </a>

            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>
        <br>
          <ul class="navbar-list  ">

            <li>
             <a href="index.php" class="navbar-link text-decoration-none" data-nav-link onmouseover="this.style.color='black';" onmouseout="this.style.color='';">home</a>


            </li>

            <li>
              <a href="destination.php" class="navbar-link text-decoration-none" data-nav-link onmouseover="this.style.color='black';" onmouseout="this.style.color='';">destination</a>
            </li>

            <li>
              <a href="packages.php" class="navbar-link text-decoration-none" data-nav-link onmouseover="this.style.color='black';" onmouseout="this.style.color='';">packages</a>
            </li>

            <li>
              <a href="gallery.php" class="navbar-link text-decoration-none" data-nav-link onmouseover="this.style.color='black';" onmouseout="this.style.color='';">gallery</a>
            </li>

            <li>
              <a href="contact.php" class="navbar-link text-decoration-none" data-nav-link onmouseover="this.style.color='black';" onmouseout="this.style.color='';">contact us</a>
            </li>

          </ul>

        </nav>
        <a href="logout.php" class="navbar-link text-decoration-none" data-nav-link onmouseover="this.style.color='black';" onmouseout="this.style.color='';"> Log Out</a>

      </div>
    </div>

  </header>

<br><br>
<br>
<br>




  <main>
    <article>







      <!-- 
        - #POPULAR
      -->

      <section class="popular" id="destination">
        <div class="container">

     

          <h2 class="h2 section-title">Popular destination</h2>

          <p class="section-text">
            
          </p>

        

          <ul class="popular-list">
          <?php
          include "database.php";
          $sql = "SELECT * FROM packages";
          $result = mysqli_query($conn, $sql);
          if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
          ?>
            <li>
              <div class="popular-card">

                <figure class="card-img">
                <img src="<?php echo !empty($row['image']) ? 'data:image;base64,' . base64_encode($row['image']) : './assets/images/packege-1.jpg'; ?>"  loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="Destination/dest1.php?id=<?php echo $row['packageId'];?>" class="text-decoration-none"><?php echo $row['destination'];?></a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="Destination/dest1.php?id=<?php echo $row['packageId'];?>" class="text-decoration-none"><?php echo $row['packagename'];?></a>
                  </h3>

                  <p class="card-text">
                  <?php echo $row['description']?>
                  </p>

                </div>

              </div>
            </li>
            
            <?php
            }
          }else{
            echo '<h2 class="h2 section-title" style="margin-left: 500px;">Packages are unavailable at the moment</h2>';
          }
          ?>     
           

          </ul>


        </div>
      </section>
 

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->



        <?php
          include 'footer/footer.php';
        ?>



  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
<?php
}else{
  header("Location: ../home.php");
}
?>

