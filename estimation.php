<?php
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"management");
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="admin/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="project.css">
  <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
  <script type="tex/javascript" src="js/bootstratp.min.js"></script>

  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous"/>
  <title> Estimation </title>
  <Style>
    body{
      background: url(admin/img/bg3.jpg);
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
          <!-- <li class="nav-item active">
            <a class="nav-link"><i class="fas fa-user-shield fa-2x pr-2 text-light"></i><b class="text-light">Admin</b></a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link text-light" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
      </nav>
    </header>
    <main>
  <section>
     <div class="row mt-5">
      <div class="col-md-4"></div>
      <div class="col-md-4 m-auto-block">
      <center> <strong><h3 class="text-primary"> Estimation </h3></strong> </center>
    <table class="table table-bordered">
    <tbody>
    <tr>
      <th scope="row">Total Deposit:</th>
      <td colspan="2"> 
        <?php
        $query1="SELECT sum(amount) as amount from deposit
        where MONTH(date)=MONTH(NOW()) and YEAR(date)=YEAR(NOW())";
        $query_run=mysqli_query($connection,$query1);
        while($row=mysqli_fetch_assoc($query_run)){
          $total_deposite=$row['amount'];
          echo "".$total_deposite;
        }
        ?>
      </td>  
    </tr>
    <tr>
      <th scope="row">Bazar Cost:</th>
      <td colspan="2"> 
        <?php
        $query2="SELECT sum(amount1) as amount1 from bazar_expense
        where MONTH(date)=MONTH(NOW()) and YEAR(date)=YEAR(NOW())";
        $query_run=mysqli_query($connection,$query2);
        while($row=mysqli_fetch_assoc($query_run)){
          $bazar_cost=$row['amount1'];
          echo "".$bazar_cost;
          } 
        ?>
      </td>  
    </tr>
    <tr>
      <th scope="row">Total Meal:</th>
      <td colspan="2">
        <?php
          $query3="SELECT sum(breakfast+lunch+dinner) as total from meal_entry
          where MONTH(date)=MONTH(NOW()) and YEAR(date)=YEAR(NOW())";
          $query_run=mysqli_query($connection,$query3);
          while($row=mysqli_fetch_assoc($query_run)){
            $total_meal=$row['total'];

            if($total_meal==0){
            echo("There is no meal record");
          }else
            echo "".$total_meal;
          } 
        ?>
      </td>
    </tr>
    <tr>
      <th scope="row">Meal Rate:</th>
      <td colspan="2">
        <?php
          if($total_meal==0){
            echo("There is no meal record");
          }else
            //$meal_rate=$bazar_cost/$total_meal;
            echo "".$bazar_cost/$total_meal;
        ?>
      </td>
    </tr>
    <tr>
      <th scope="row">Fixed Cost:</th>
      <td colspan="2">
        <?php
          $query4="SELECT sum(amount2) as amount2 from others_expense
          where MONTH(date)=MONTH(NOW()) and YEAR(date)=YEAR(NOW())";
          $query_run=mysqli_query($connection,$query4);
          while($row=mysqli_fetch_assoc($query_run)){
            $fixed_cost=$row['amount2'];
            echo "".$fixed_cost;
          } 
        ?>
      </td>
    </tr>
  </tbody>
</table>
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