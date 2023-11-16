<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="tex/javascript" src="js/bootstratp.min.js"></script>

	<!-- font awesome link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous"/>
	<title> Others Expense </title>

	<Style>
		body{
			background: url(img/bg3.jpg);
			background-repeat: no-repeat;
			background-position: center;
			background-attachment: fixed;
			background-size: cover;
			height: 100px;
		}
	</Style>
</head>
<body>
	<div>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand text-warning">F P&nbsp; &nbsp;Z O N E</a>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link"><i class="fas fa-user-shield fa-2x pr-2 text-light"></i><b class="text-light">Admin</b></a>
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
            		<a href="deposite.php" class="btn btn-warning"> Deposite </a>
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
			<h4><strong> Others Expense </strong></h4>
			<hr class="hr-style">
		</div>
		<div class="container table-responsive-md">
			<table class="table table-striped">
				<thead>
					<tr class="bg-info">
						<th scope="col">Name</th>
						<th scope="col">Date</th>
						<th scope="col">Purchase</th>
						<th scope="col">Amount</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"management");
					$query = "select sl_no, user.name as name, date, purchase, amount2
					from others_expense 
					left join user on user.ID = others_expense.user_id
					where MONTH(date)=MONTH(NOW()) and YEAR(date)=YEAR(NOW())
					ORDER BY `sl_no` ASC ";;
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						?>
						<tr>
							<td><?php echo $row['name'] ?></td>
							<td><?php echo $row['date'] ?></td>
							<td><?php echo $row['purchase'] ?></td>
							<td><?php echo $row['amount2'] ?></td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>	
		</section>
		</main>


		<footer>
			<div class="row">
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
</body>
</html>