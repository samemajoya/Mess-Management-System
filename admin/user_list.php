<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="project.css">
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="tex/javascript" src="js/bootstratp.min.js"></script>

	<title> User List </title>
</head>
<style>
  body{
  	background: url(img/bg3.jpg);
	background-repeat: no-repeat;
	background-position: center;
	background-attachment: fixed;
	background-size: cover;
	height: 80vh;
  } 
</style>
<body>
	<div>
		<header>
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand text-warning">F P&nbsp; &nbsp;Z O N E</a>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link text-light" href="#">Home</a>
					</li>
					<li class="nav-item disable">
						<a class="nav-link text-light" href="">About Us</a>
					</li>
					<li class="nav-item disable">
						<a class="nav-link text-light" href="#">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light" href="logout.php">Logout</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<main>
	<div>
		<div class="row mb-5 mt-5">
        <div class="col-md-2"></div>
          	<div class="col-md-9">
            	<div>
            		<a href="user_list.php" class="btn btn-primary"> Member List </a>
            		<a href="deposite.php" class="btn btn-warning"> Deposit </a>
            		<a href="bazar_cost.php" class="btn btn-secondary"> Bazar Cost </a>
            		<a href="bazar_expense_list.php" class="btn btn-success"> Bazar Expense List </a>
            		<a href="others_cost.php" class="btn btn-primary"> Others Expense </a>
            		<a href="others_cost_list.php" class="btn btn-danger"> Others Expense List</a>
            		<a href="meal_entry.php" class="btn btn-warning"> Meal Entry </a>
            	</div>		
        </div>
        <div class="col-md-1"></div>
    </div>

	
	<section id="list">
		<div class="text-center bg-warning mt-4">
			<h4><strong> Mess Member List </strong></h4>
			<hr class="hr-style">
		</div>
		<div class="container table-responsive-md">
			<table class="table table-striped">
				<thead>
					<tr class="bg-info">
						<th scope="col">ID</th>
						<th scope="col">Name</th>
						<th scope="col">Phone Number</th>
						<th scope="col">Area/Village</th>
						<th scope="col">Sub-District</th>
						<th scope="col">District</th>
						<th scope="col">Educational Institution</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"management");
					$query = "select * from user ORDER BY `ID` ASC ";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						?>
						<tr>
							<td><?php echo $row['ID'] ?></td>
							<td><?php echo $row['name'] ?></td>
							<td><?php echo $row['phone_num'] ?></td>
							<td><?php echo $row['area'] ?></td>
							<td><?php echo $row['sub_dist'] ?></td>
							<td><?php echo $row['home_dist'] ?></td>
							<td><?php echo $row['eud_inst'] ?></td>
							<td>
								<button class="btn"> <a class="text-success" href="edit_user.php?id=<?php echo $row['ID'];?>"> Edit</a> </button>

								<button class="btn" onclick='return checkdelete()'> <a class="text-danger" href="delete_user.php?id=<?php echo $row['ID'];?>">Remove User </button>
							</td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>	
	</section>
</main>

	<footer class="mb-5">
			<div class="row mt-5 mb-5">
				<div class="col-lg-6 text-light text-center text-lg-left">
					<p class="mb-0 font-weight-bolder">&copy; Copyright: Avilash Saha</p>
					<p class="font-weight-light"> All source have been taken from Bootstrap4</p>
				</div>
				<div class="col-lg-6 text-success text-center text-lg-right">
					<button class="btn btn-light">
						<a class="text-dark" href="#">Back To Top</a>
						<i class="fas fa-angle-double-up"></i>
					</button>
					<a href="https://www.facebook.com/avilashsaha.akash"><i class="fab fa-facebook fa-2x"></i></a>
					<a href="https://twitter.com/Avilash_aks"><i class="fab fa-twitter fa-2x"></i></a>
					<a href="https://www.youtube.com/channel/UCSCsB242VFK4tfKKTrGOcCA"><i class="fab fa-youtube fa-2x"></i><a>
					<a href="https://www.pinterest.com/business/hub/"><i class="fab fa-pinterest fa-2x"></i></a>
				</div>
			</div>
		</footer>
	</div>

	<script>
		function checkdelete()
		{
			return confirm('Are you sure you want to delete this record?');
		}
	</script>
</body>
</html>