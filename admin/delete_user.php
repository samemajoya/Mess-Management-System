<?php
	$connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"management");
    $query = "delete from user where ID = $_GET[id]";
    $query_run = mysqli_query($connection,$query);

 if($query_run)
 {
 	echo "Record Deleted Successfully";
 	?>
 	<meta http-equiv="refresh" content="1; url=http://localhost/3-2/admin/user_list.php" />
 	<?php
 }
 else
 {
 	echo "Failed to Delete";
 }
 ?>