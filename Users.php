<?php

	include './Assets/Php/Connection.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMARESA - Views</title>
	<!-- CUSTOM CSS  -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Admin.css">
	<!-- WEBSITE ICON -->
	<link rel="website icon" type="png" href="./Assets/Images/Icon.png">	
</head>
<body>

	<main>
	<!-- SIDEBAR -->
	<aside class="sidebar" id="sidebar"> 
		<figure>
			<img src="./Assets/Images/Amaresa-logo.png">
		</figure>

		<div class="dashboard">
			<h3 class="h2 dashboard-title">DASHBOARD</h3>

			<ul class="dashboard-list">

				<li>
					<a href="./Account.html" class="dashboard-list-item">
						<i class="fa-solid fa-id-card-clip"></i>
						<span>Account</span>
					</a>
				</li>				

				<li>
					<a href="./Pending.html" class="dashboard-list-item">
						<i class="fa-solid fa-chalkboard-user"></i>
						<span>Pendings</span>
					</a>
				</li>				

				<li>
					<a href="./Users.php" class="dashboard-list-item active">
						<i class="fa-solid fa-users"></i>
						<span>Users</span>
					</a>
				</li>				

				<li>
					<a href="./Management.html" class="dashboard-list-item">
						<i class="fa-solid fa-users"></i>
						<span>Management</span>
					</a>
				</li>				

				<li>
					<a href="./Properties.html" class="dashboard-list-item">
						<i class="fa-solid fa-bars-progress"></i>
						<span>Properties</span>
					</a>
				</li>				

				<li>
					<a href="Archieve.html" class="dashboard-list-item">
						<i class="fa-solid fa-envelope"></i>
						<span>Messages</span>
					</a>
				</li>
				<li>
					<a href="#" class="dashboard-list-item">
						<i class="fa-solid fa-box-archive"></i>
						<span>Archieve</span>
					</a>
				</li>		
						
				<li>
					<a href="SoldProperties.html" class="dashboard-list-item">
						<i class="fa-solid fa-rectangle-list"></i>
						<span>Sales Log</span>
					</a>
				</li>		

				<li>
					<a href="#" class="dashboard-list-item">
						<i class="fa-solid fa-right-from-bracket"></i>
						<span>Logout</span>
					</a>
				</li>

			</ul>
		</div>
	</aside>

	<!-- TOP SECTION -->
	<section class="displaylist" id="displaylist">
		<div class="container">

			<div class="container-item">

				<div class="container-title">
					<span>Users</span>
					<i class="fa-solid fa-users"></i>
				</div>

				<span>Total of users</span>
			</div>			

			<div class="container-item">

				<div class="container-title">
					<span>Properties</span>
					<i class="fa-solid fa-house"></i>
				</div>

				<span>Total of properties</span>
			</div>			

			<div class="container-item">

				<div class="container-title">
					<span>Pendings</span>
					<i class="fa-solid fa-chalkboard-user"></i>
				</div>

				<span>Total Pendings</span>
			</div>

			<div class="container-item">

				<div class="container-title">
					<span>Archieve</span>
					<i class="fa-solid fa-box-archive"></i>
				</div>

				<span>Total Archieves</span>
			</div>

		</div>
	</section>
	<!-- Main Section -->
		<section class="Table-section" id="Table-Section">
			<div class="container">
				<table class="table" id="table">
					<tr>	
						<th>User ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Address</th>
						<th>Start Date</th>
						<th class="action-center">Action</th>
					</tr>		
					<?php

						$sql = "SELECT * FROM user";
						$rs = mysqli_query($conn, $sql);

						if($rs){
							while ($row = mysqli_fetch_assoc($rs)) {
								// code...
								$UserID = $row['UserID'];
								$Firstname = $row['Firstname'];
								$Lastname = $row['Lastname'];
								$Email = $row['Email'];
								$Phone = $row['Phone'];
								$Address = $row['Address'];
								$Date = $row['Date_Joined'];


								echo "

								<tr>
									<td>".$UserID."</td>
									<td>".$Firstname."</td>
									<td>".$Lastname."</td>
									<td>".$Email."</td>
									<td>".$Phone."</td>
									<td>".$Address."</td>
									<td>".$Date."</td>

									<td class='td-action'>
									
										<a href='#'><i class='fa-solid fa-eye'></i></a>

									</td>
								</tr>

								";
							}
						}
					?>

				</table>
			</div>	
		</section>
		
			<div class="float-diagram">
				<button><i class="fa-solid fa-plus"></i> add</button>
			</div>		
	</main>



	<!-- Custom JS & JQUERY -->
	<script src="./Assets/Js/Admin.js"></script>
	<!-- Fontawesome Link -->
	<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>	
</body>
</html>