
<header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">
            <div class="wrapper">
            
                <p class="helpline-title" ><a href="bookPackage/reservation/profile.php" style="text-decoration: none; color: white;"> 
                <div class="icon-box">
              
              <ion-icon name="person-circle-outline"></ion-icon>
          </div></a>
                <p class="helpline-number"><a href="bookPackage/reservation/profile.php" style="text-decoration: none; color: white;" class="helpline-number"><?php echo $_SESSION['firstname']; ?></a></p>
            </div>

        <a href="#" class="logo">
          <img src="./assets/images/logo.svg" alt="Tourly logo">


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

          <ul class="navbar-list">

            <li>
              <a href="index.php" class="navbar-link" data-nav-link>home</a>
            </li>

            <li>
              <a href="destination.php" class="navbar-link" data-nav-link>destination</a>
            </li>

            <li>
              <a href="packages.php" class="navbar-link" data-nav-link>packages</a>
            </li>

            <li>
              <a href="gallery.php" class="navbar-link" data-nav-link>gallery</a>
            </li>

            <li>
              <a href="contact.php" class="navbar-link" data-nav-link>contact us</a>
            </li>

          </ul>

        </nav>

      <a href="logout.php" class="btn btn-primary"> Log Out</a>

      </div>
    </div>

  </header>
