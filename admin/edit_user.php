<?php
    session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"management");
	$name = "";
	$phone_num = "";
	$home_dist = "";
	$eud_inst = "";

	$query =  "select * from user where ID = $_GET[id]";
	$query_run = mysqli_query($connection,$query);
	While($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$phone_num = $row['phone_num'];
		$home_dist = $row['home_dist'];
		$eud_inst = $row['eud_inst'];		
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
	<title> Edit User</title>
</head>
<body>
	<section id="register">
    	<div class="row">
      	<div class="col-md-4"></div>
      	<div class="col-md-4 m-auto-block">
        	<center> <h3> Edit Your Details </h3> </center>
        	<form action="" method="post">
          	<div class="form-group">
            	<label> Name: </label>
            	<input type="text" name="name" value="<?php echo $name; ?>" class="form-control" required>
          	</div>
          	<div class="form-group">
            	<label> Phone Number: </label>
            	<input type="text" name="phone_num" value="<?php echo $phone_num; ?>" class="form-control" required>
          	</div>
          	<div class="form-group">
            	<label> Home District: </label>
            	<input type="text" name="home_dist" value="<?php echo $home_dist; ?>" class="form-control" required>
          	</div>
            <div class="form-group">
              <label> Educational Institution: </label>
              <input type="text" name="eud_inst" value="<?php echo $eud_inst; ?>" class="form-control" required>
            </div>
          	<button type="submit" name="update" class="btn btn-success"> Update </button> 
        	</form>
    	</div>
      <div class="col-md-4"></div>
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

<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"management"); 
	 if(isset($_POST['update'])){
	 	$query = "UPDATE user SET name = '$_POST[name]',phone_num = '$_POST[phone_num]',home_dist = '$_POST[home_dist]',eud_inst = '$_POST[eud_inst]'
	 	where ID = $_GET[id]";
	 	$query_run = mysqli_query($connection,$query);
	 	header("location:user_list.php");
	 }
?>
