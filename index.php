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
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

    <?php
     include  'header/header.php';
    ?>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">Journey to explore world</h2>

          <p class="hero-text">
            
          </p>

          <div class="btn-group">
            <button class="btn btn-primary">Learn more</button>

            <button class="btn btn-secondary">Book now</button>
          </div>

        </div>
      </section>







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
          $sql = "SELECT * FROM packages LIMIT 3";
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
          <center>
          <a href="destination.php" class="btn btn-primary " >More destintion</a>

          </center>

        </div>
      </section>
      <!-- 
        - #PACKAGE
      -->

      





      <!-- 
        - #GALLERY
      -->

      <section class="gallery" id="gallery">
        <div class="container">

          <p class="section-subtitle">Photo Gallery</p>

          <h2 class="h2 section-title">Photo's From Travellers</h2>

          <p class="section-text">
            
          </p>

          <ul class="gallery-list">

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/gallery-1.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/gallery-2.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/gallery-3.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/gallery-4.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/gallery-5.jpg" alt="Gallery image">
              </figure>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="cta" id="contact">
        <div class="container">

          <div class="cta-content">
            <p class="section-subtitle">Call To Action</p>

            <h2 class="h2 section-title">Ready For Unforgatable Travel. Remember Us!</h2>

            <p class="section-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus consequatur nisi odio dolorum reprehenderit repellat necessitatibus dicta consectetur ipsa eius magnam ea doloremque voluptatibus, earum illo reiciendis, ipsam dolore fugiat.
            </p>
          </div>

          <a class="btn btn-secondary" href="contact.php" role="button">Contact Us !</a>

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

</body>

</html>
<?php
}else{
  header("Location: ../home.php");
}
?>