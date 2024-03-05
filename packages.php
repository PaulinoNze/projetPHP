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
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

<header class="header bg-primary" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <a href="tel:+01123456790" class="helpline-box">

          <div class="icon-box">
            <ion-icon name="call-outline"></ion-icon>
          </div>

          <div class="wrapper">
            <p class="helpline-title">For Further Inquires :</p>

            <p class="helpline-number">+212 642 866 131</p>
          </div>

        </a>

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

          </div><br>

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

        <button class="btn btn-primary">Book Now</button>

      </div>
    </div>

  </header>

<br><br><br><br>
  <main>
    <article>






      <!-- 
        - #PACKAGE
      -->

      <section class="package" id="package">
        <div class="container">
         
          <p class="section-subtitle">Popular Packeges</p>

          <h2 class="h2 section-title">Checkout Our Packeges</h2>

          <p class="section-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ducimus magnam asperiores hic aspernatur possimus iste consequuntur, cum autem repudiandae! Corporis iure, magni, laudantium odit fugit dolore libero et laboriosam?
          </p>

          <?php
          include "database.php";
          $sql = "SELECT * FROM packages";
          $result = mysqli_query($conn, $sql);
          if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
          ?>
          <ul class="package-list">

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="<?php echo !empty($row['image']) ? 'data:image;base64,' . base64_encode($row['image']) : './assets/images/packege-1.jpg'; ?>"  loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title"><?php echo $row['packagename']?></h3>

                  <p class="card-text">
                    <?php echo $row['description']?>
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">Max: <?php echo $row['numPerson']?></p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text"><?php echo $row['destination']?></p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(25 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                  $<?php echo $row['price']?>
                    <span>/ per person</span>
                  </p>

                  <a href="bookPackage/login.php?id=<?php echo $row['packageId']?>"><button class="btn btn-secondary">Book Now</button></a>

                </div>

              </div>
            </li>

          </ul>
          <?php
            }
          }else{
            echo '<h2 class="h2 section-title">Packages are unavailable at the moment</h2>';
          }
          ?>
          <button class="btn btn-primary">View All Packages</button>
         
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