<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/dashb.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>	
	<input type="checkbox" id="check">
	<header class="navbar navbar-dark bg-dark flex-md-nowrap p-0 shadow" style="height: 64px;">	
    <a class="nav-link" href="#" style="font-size: 25px; color: white;">E-Pharmacy <small><small><small>Admin Area</small></small></small></a>
    <label for="check">
			<i class="fa fa-bars" id="sidebar_btn"></i>
		</label>
     <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     </button>
  
     <ul class="navbar-nav px-3">
     <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php" style="font-size: 25px;">Logout</a>
     </li> 
   	</ul>
	</header>
	<div class="sidebar">
		<center>
			<img src="images/set.jpg" class="image" style="width: 119px;"><h4 style="margin-top: -36px; font-size: 20px;">Wellness</h4>
		</center>
		<a href="#"><span style="font-size: 22px;">Dashboard</span></a>
		<a href="add.php"><span style="font-size: 22px;">Add Medicine</span></a>
	</div>
	<div class="container" style="max-width: 780px;">
	<div class="col-lg-12" style="margin-top: -27px;">
	<br><br><h1 class="text-center">All Records</h1><br>
	<?php
		if(isset($_SESSION['update']))
		{
			echo $_SESSION['update'];
			unset($_SESSION['update']);
		}
		if(isset($_SESSION['delete']))
		{
			echo $_SESSION['delete'];
			unset($_SESSION['delete']);
		}
		if(isset($_SESSION['admin']))
		{
			echo $_SESSION['admin'];
			unset($_SESSION['admin']);
		}
    ?>
		<table class="table table-hover table-bordered" >
		<tr class="bg-sm text-black text-center">
			<th>Id</th>
			<th>Medicine_image</th>
			<th>Description</th>
			<th>Medicine_name</th>
			<th>Medicine_price</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
		<?php 
		include "database.php";
		$sql = "SELECT * FROM medicine";
		$res = mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($res)){
		 ?>

		<tr class="text-center">
			<td> <?php echo $row['medicine_id']; ?> </td>
			<td> <?php echo $row['medicine_image']; ?> </td>
			<td> <?php echo $row['description']; ?> </td>
			<td> <?php echo $row['medicine_name']; ?> </td>
			<td> <?php echo $row['medicine_price']; ?> </td>
			<td> <a href="update.php?id=<?php echo $row['medicine_id']; ?>&erp=<?php echo $row['medicine_image']; ?>&ert=<?php echo $row['description']; ?>&erx=<?php echo $row['medicine_name']; ?>&erz=<?php echo $row['medicine_price']; ?>"><i class="fa fa-edit"></i></a></td>
			<td> <a href="delete.php?id=<?php echo $row['medicine_id']; ?>"><i class="fa fa-trash" onclick="return confirm('Are you sure want to delete')"></i></a></td>
		</tr>
		<?php 
			}
		 ?>
		</table>
	</div>
</body>
	</div>	
</html>
 