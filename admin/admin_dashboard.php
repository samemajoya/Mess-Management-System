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
	<title> Admin Dashboard </title>

	<Style>
		body{
			background: url(img/bg3.jpg);
			background-repeat: no-repeat;
      		background-position: center;
      		background-attachment: fixed;
      		background-size: cover;
      		height: 100px;
      	}
		.avi{
			border-radius: 25px;
			padding: 15px 15px;
		}
	</Style>
</head>
<body>
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
	<div class="row mt-5">
        <div class="col-md-12">
            <center><h3> Dashboard </h3></center>
        </div>
     </div>

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

    
  
    	<div class="avi bg-dark mt-3">
			<center><h4><p class="text-warning"><a href="estimation.php" class="text-light">Click here </a>to view total estimation</p></h4></center>
		</div>

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
</body>
</html>