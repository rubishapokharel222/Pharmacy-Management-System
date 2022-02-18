<!DOCTYPE html>
 <html>
 <head>
 	<title>Update</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap/css/bootstrap.min.css">
 </head>
 <body>
 	<?php
	session_start();
	$erp=$_GET['erp'];
	$ert=$_GET['ert'];
	$erx=$_GET['erx'];
	$erz=$_GET['erz'];
	?>
 	<div class="col-lg-6 m-auto">
 		<form method="post" style="padding-left: 90px;">
 			<br><div class="card" style="width: 457px;">
 				<div class="card-header bg-sm">
 				<h1 class="text-black text-center">Update Medicine</h1>	
 				</div><br>

		Medicine image: <input type="file" name="image" style="height: 45px;" value="<?php echo $erp;?>" required ><br>
		Description: <input type="text" name="text" style="height: 75px;" value="<?php echo $ert;?>" required><br>
		Medicine name: <input type="text" name="text1" style="height: 40px;" value="<?php echo $erx;?>" required><br>
		Medicine price: <input type="number"  name="text2" style="height: 40px;" value="<?php echo $erz;?>" required><br>
		<button type="submit" class="submit" name="btn" onclick="return add()" style="width: 130px; margin-left: 150px;">Update Medicine</button>
	    </form>
 	</div>
	<?php
	if(isset($_POST['btn'])){
		$id=$_GET['id'];
		$image=$_POST['image'];
		$text=$_POST['text'];
		$text1=$_POST['text1'];
		$text2=intval($_POST['text2']);

		if(empty($image)){
			$erp ="medicine image is not added";
		}
		if(empty($text)){
			$ert ="description is not added";
		}
		if(empty($text1)){
			$erx ="medicine name is not added";
		}
		if(empty($text2)){
			$erz ="medicine price is not added";
		}

		$conn = new mysqli("localhost","root","","productdb");
		if($image && $text && $text1 && $text2){
			$sql="update medicine set medicine_id=$id, medicine_image='$image', description='$text', medicine_name='$text1', medicine_price='$text2' where medicine_id=$id";
			if($conn->query($sql)==TRUE){
				$_SESSION['update']="medicine successfully updated";
				header("location:dashboard.php");
		}
		else{
			echo "error creating table:".$conn->error;
		}
	}
	$conn->close();
   }
	?>
 </body>
 </html>