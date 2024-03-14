<?php
session_start();
if(isset($_SESSION['userId']) && isset($_SESSION['firstname'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Descripción de Destinación Turística</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Estilos adicionales */
    body {
      font-family: Arial, sans-serif;
    }
    .jumbotron {
      background-color: #f8f9fa;
      padding: 2rem;
      text-align: center;
    }
    .container {
      margin-top: 2rem;
    }
    .card {
      margin-bottom: 1rem;
    }


  </style>


</head>
<body>

  <!-- Encabezado -->
<header>
    <nav class="navbar navbar-dark bg-primary">
        <ul class="navbar-nav mx-auto d-flex flex-row"> <!-- Centrado horizontalmente y flexbox -->

            <li class="nav-item" style="margin-left: 10px;"> <!-- Agregar margen izquierdo -->
                <a href="../destination.php" class="nav-link text-white text-decoration-none">DESTINATION</a>
            </li>

        </ul>
    </nav>
</header>


  <!-- Contenido principal -->
  <main class="container">
    <!-- Encabezado con imagen -->
    <?php
          include "../database.php";
          $packageId = $_GET['id'];
          $sql = "SELECT * FROM packages WHERE packageId = $packageId";
          $result = mysqli_query($conn, $sql);
          if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
          ?>
    <div class="jumbotron">
      <img src="<?php echo !empty($row['image']) ? 'data:image;base64,' . base64_encode($row['image']) : './assets/images/packege-1.jpg'; ?>" alt="Imagen de Destinación" class="img-fluid"  style="height: 400px;">
      <h1 class="display-4">Bienvenue à <?php echo $row['packagename']?></h1>
      <p class="lead"><?php echo $row['description']?>.</p>
      <hr class="my-4">
      <!-- Botón "Book Now" -->
<!-- Botón "Book Now" -->
<a href="../bookPackage/reservation/book.php?id=<?php echo $row['packageId']?>"  class="btn btn-primary"> Book Now</a>   
     </div>



    <!-- Formulario de reserva oculto -->



<?php
            }
          }else{
            echo '<h2 class="h2 section-title">Packages are unavailable at the moment</h2>';
          }
          ?> 

  </main>
  <!-- Pie de página -->
  <footer class="footer bg-primary text-white mt-5 py-3 text-center">
    <div class="container">
      <span>&copy; 2024 Destinación Turística</span>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Mostrar el formulario cuando se hace clic en el botón "Book Now"
    document.getElementById('book-now-btn').addEventListener('click', function() {
      document.getElementById('reservation-form').style.display = 'block';
    });
  </script>
</body>
</html>
<?php
}else{
  header("Location: ../home.php");
}
?>