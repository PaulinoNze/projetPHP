<!DOCTYPE html>
<html lang="en">
<head>
  <title>Footer Design</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>



<header>

<tbody>
	<style>
		


*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;

}

body{
  height: 100vh;
  background-color: white;
  background-image: url();
  background-size: cover;
  background-position: center;
}



li{
  list-style: none;
}
a{
  text-decoration: none;
  color: #fff;
  font-size: 1rem;
}

a:hover {
  color: aqua;
}

header{
  position: relative;
  padding: 0 2rem;
  background-color: blue;
}

.navbar{
  width: 100%;
  max-width: 1200%;
  height: 60px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;

}

.navbar .logo a{
  font-size: 1.5rem;
  font-weight: bold;
}

.navbar .links{
  display: flex;
  gap:2rem;
}

.navbar .barger-menu-button{
  color: #fff;
  font-size: 1.5rem;
  cursor: pointer;
  display: none;
}

.buttons{
  display: flex;
  gap: 10px;
}

.action-button{
  background-color: blue;
  color: black;
  border: 1px solid #63C7B2;
  padding: 0.5rem 1.2rem;
  border-radius: 5px;
  outline: none;
  font-size: 0.9rem;
  font-weight: bold;
  cursor: pointer;
}

.action-button:hover{
  color: #fff;
  border: 1px solid #fff;
}

.pro{
  background-color: transparent;
  color: #fff;
  border: 1px solid #fff;
}

.pro:hover{
  background-color: #fff;
  color: black;

}


.barger-menu{
  display: none; 
  height: 0;
  position: absolute;
  right: 2rem;
  top: 60px;
  width: 200px;
  background: rgba(0,0,0,0.2);  
  backdrop-filter: blur(15px);
  border-radius: 10px;
  overflow: hidden;
  transition: height 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.barger-menu.open{
 height: 290px;
}

.barger-menu li {
  padding: 0.7rem;
  display: flex;
  align-items: center;
  justify-content: center;
}
.divider{
  height: 1px;
  background-color: #fff;
  width: 80%;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 1rem;
}

.barger-menu .action-button{
  width: 80%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.buttons-barger-menu{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 10px;
}







@media (max-width: 990px){
  header{
      background: none;
  }

  .navbar .links,
  .navbar .action-button{
      display: none;
  }
   .navbar .barger-menu-button{
      display: block;
   }

   .barger-menu{
      display: block;
   }
}

@media (max-width: 576px){
  

   .barger-menu{
     left: 2rem;
     width: unset;
   }
}




.liste-produits {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.produit {
  width: 300px;
  margin: 10px;
}

.image-prod {
  text-align: center;
  height: 250px; /* Ajustez cette valeur selon vos besoins */
  overflow: hidden; /* Masquer tout débordement */
}

.annonce-image {
  width: 100%; /* La largeur doit être de 100% pour s'assurer qu'elle est proportionnelle à la hauteur fixe */
  height: 100%;
  object-fit: cover;
}

.titre {
  margin-top: 10px;
  font-weight: bold;
}

.description {
  margin-top: 5px;
}


.liste-produits {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between; /* Ou une autre valeur pour l'espacement entre les catégories */
}

.liste-produits.evenemen,
.liste-produits.emploi,
.liste-produits.imobilier {
  width: calc(33.33% - 20px); /* Ajustez la largeur en fonction de vos besoins */
  margin-bottom: 20px;
}











	</style>
<div class="navbar">
<div class="logo">
<a href="index.php"><img src="./assets/images/logo.svg" alt="Tourly logo"></a>
	
</div>

<ul class="links">
	<li><a href="index.php">HOME</a></li>
	
	
</ul>


<div class="barger-menu-button">
	<i class="fa-solid fa-bars"></i>
</div>
</div>
<div class="barger-menu open">
<ul class="links">
	<li><a href="langues">HOME</a></li>
	
  
	<div class="divider"></div>
	
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

<style>
table.full-width {
	width: 100%;
	border-collapse: collapse;
}

table.full-width th, table.full-width td {
	border: 1px solid black;
	padding: 8px;
	text-align: left;
}
</style>



<table border="2"  class="full-width">
<thead>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Message</th>
	</tr>
</thead>
<tbody>

	<?php

include "database.php";
	// Récupérer les messages depuis la base de données
	$result = $conn->query("SELECT * FROM contacte  ORDER BY id DESC");

	// Afficher les messages dans le tableau
	while ($row = $result->fetch_assoc()) {
		echo "<tr>
				<td>{$row['name']}</td>
				<td><a style='text-decoration: none;  color: black;
        ' href='mailto:{$row['email']}'>{$row['email']}</a></td>
				<td><a   style='text-decoration: none;  color: black;
        ' href='tel:{$row['phone']}'>{$row['phone']}</a></td>
				<td>{$row['message']}</td>
			  </tr>";
	}

	// Fermer la connexion
	$conn->close();
	?>

</tbody>
</table>







</body>
</html>

<?php

?>