<?php
session_start();
if(isset($_SESSION['userId']) && isset($_SESSION['firstname'])){

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>TourDakhla - Travel agancy</title>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<link rel="shortcut icon" href="../../favicon.svg" type="image/svg+xml">
</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<?php
							include "../../database.php";
							if(isset($_GET['id'])){
								$packageId = $_GET['id'];
								$sql = "SELECT destination FROM packages WHERE packageId = $packageId";
								$result = mysqli_query($conn, $sql);
								$row = mysqli_fetch_assoc($result);
							?>
							<form action="reservation.php" method="POST">
								<div class="form-group">
									<span class="form-label">Your Destination</span>
									<input class="form-control" type="text" value="<?php echo (!empty($row['destination'])) ? $row['destination'] : "Enter a destination or hotel name"; ?>" placeholder="Enter a destination or hotel name" name="destination" required>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Check In</span>
											<input class="form-control" type="date" name="checkInDate" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Check out</span>
											<input class="form-control" type="date" name="checkOutDate" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Rooms</span>
											<input type="number" class="form-control" name="rooms" min="1" max="100" required>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Adults</span>
											<input type="number" class="form-control" name="adults" min="0" max="100">
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Children</span>
											<input type="number" class="form-control" name="children" min="0" max="100">
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<input type="hidden" name="packageId" value="<?php echo $_GET['id']; ?>">
									<input type="hidden" name="userId" value="<?php echo $_SESSION['userId']; ?>">
									<button type="submit" class="submit-btn" name="submit">Book</button>
								</div>
							</form>
							<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
<?php
}else{
  header("Location: ../home.php");
}
?>