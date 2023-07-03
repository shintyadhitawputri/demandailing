<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Demandailing</title>

	<!-- Fonts From Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,100&display=swap"
		rel="stylesheet">

	<!-- Feather Icons -->
	<script src="https://unpkg.com/feather-icons"></script>

	<!-- Call File style.css -->
	<link rel="stylesheet" href="style2.css" />
</head>

<body>
	<div class="bgback">
		<!-- Navbar Start -->
		<nav class="navbar">
			<a href="#home" class="navbar-logo">Demandailing<span>.</span></a>
			<div class="navbar-cen">
				<a href="usermember.php">Home</a>
				<a href="guestlist.php">Reservation</a>
			</div>

			<div class="navbar-right">
				<a href="logout.php" id="logout"><i data-feather="log-out"></i></a>
				<a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
			</div>
		</nav>
		<!-- Navbar End -->


		<div id="booking" class="section">
			<div class="section-center">
				<div class="container">
					<div class="row">
						<div class="booking-form">
							<div class="form-header">
								<h1>Make your reservation</h1>
							</div>
							<form action="action.php" method="post">
								<div class="form-group">
									<input class="form-control" type="text" name="nameC" placeholder="Enter your Name"
										required>
									<span class="form-label">Name</span>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="datetime-local" name="date_time" required>
											<span class="form-label">Date & Time</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="tel" name="phone_number"
												placeholder="Enter you Phone Number" required>
											<span class="form-label">Phone</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="number" name="people_num"
												placeholder="Number of People" required>
											<span class="form-label">Guest Number</span>
										</div>
									</div>
								</div>
								<button type="submit" name="submit" class="submit-btn" onclick="clickme()">Book Now</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<script>
		feather.replace();
	</script>
	<script language="Javascript">
		function clickme(){
			alert("Your reservation has been confirmed");
		}
	</script>
	<script src="script.js"></script>

</body>

</html>