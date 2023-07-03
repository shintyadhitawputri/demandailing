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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

	<!-- Call File style.css -->
	<link rel="stylesheet" href="styledata.css" />
</head>

<body>
	<div class="bgback">
		<!-- Navbar Start -->
		<nav class="navbar">
			<a href="#home" class="navbar-logo" style="text-decoration: none;">Demandailing<span>.</span></a>
			<div class="navbar-cen">
				<a href="usermember.php" style="text-decoration: none;">Home</a>
				<a href="bookingform.php" style="text-decoration: none;">Booking</a>
			</div>

			<div class="navbar-right">
				<a href="logout.php" id="logout"><i data-feather="log-out"></i></a>
				<a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
			</div>
		</nav>
		<!-- Navbar End -->

		<div id="tabledata">
			<table class="table-custom">
				<thead>
					<tr>
						<th scope="col">ID Reservation</th>
						<th scope="col">Name</th>
						<th scope="col">Date & Time</th>
						<th scope="col">Status</th>
					</tr>
				</thead>
				<tbody class="table-group-divider">
					<?php
					include_once 'connectDB.php';
					$query = "SELECT * from reservtable order by submission_time desc";
					$result = $connection->query($query);
					if ($result->num_rows > 0) {
						$rows = $result->fetch_all(MYSQLI_ASSOC);
						// Reverse array biar yg muncul yg submit form pertama
						$rows = array_reverse($rows);
						foreach ($rows as $data) {
							?>
							<tr>
								<th scope="row">
									<?php echo $data['unique_code']; ?>
								</th>
								<td>
									<?php echo ucwords($data['nameC']); ?>
								</td>
								<td>
									<?php echo $data['date_time']; ?>
								</td>
								<td>
									<span class="<?php echo ($data['status'] == 'on queue') ? 'status1' : 'status2'; ?>">
										<?php echo ucwords($data['status']); ?>
									</span>
								</td>
							</tr>
						<?php }
					}
					?>
				</tbody>
			</table>
		</div>


		<script>
			feather.replace();
		</script>
		<script src="script.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
			crossorigin="anonymous"></script>
</body>

</html>