<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"management");


if (isset($_POST['register'])){
	$query = "INSERT INTO admin 
	values(null,'$_POST[name]','$_POST[email]','$_POST[password]')";
	$query_run = mysqli_query($connection,$query);
	if($query_run){
		echo "<script> alert('Registration Successfull.......You may login'); 
		window.location.href = 'index.php';
		</script>";
	}
	else{
		echo "<script> alert('Please Enter Correct Password'); </script>";
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="project.css">
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="tex/javascript" src="js/bootstratp.min.js"></script>

	<!-- font awesome link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous"/>
	<title> Registration Page </title>
	<Style>
		body{
			background: url(img/bg6.jpg);
			background-repeat: no-repeat;
			background-position: center;
			background-attachment: fixed;
			background-size: cover;
			height: 100px;
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
        </ul>
      </div>
    </nav>
  </header>	
	<section id="register">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 m-auto-block">
				<center> <h3 class="text-light"> Registration Page </h3> </center>
				<form action="" method="post" class="shadow-lg p-5">
					<div class="form-group">
						<label> Name: </label>
						<input type="text" name="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label> Email: </label>
						<input type="text" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label> Password: </label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" name="register" class="btn btn-success"> Register </button>
					<a href="index.php" style="color: #f7e707"> If You Are Registered, Please Login Here </a> 
				</form>
				<div class="col-md-4"></div>
			</div>
		</div>
	</section>

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
	</body>
	</html>