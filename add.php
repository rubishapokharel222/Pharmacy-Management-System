<!DOCTYPE html>
 <html>
 <head>
 	<title>Add</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap/css/bootstrap.min.css">
 </head>
 <body>
 	<?php
	session_start();
	$erp=$ert=$erx=$erz="";
	if(isset($_POST['btn'])){
		$image=$_POST['image'];
		$text=$_POST['text'];
		$text1=$_POST['text1'];
		$text2=$_POST['text2'];
		if(empty($image)){
			$erp ="image is not added";
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
			$sql="INSERT INTO medicine(medicine_image,description,medicine_name,medicine_price)
			VALUES('$image','$text','$text1','$text2')";
			if($conn->query($sql)==TRUE){
				$_SESSION['add']="medicine added successfully";
				header("location:shop.php");
		}
		else{
			echo "error creating table:".$conn->error;
		}
	}
	$conn->close();
}
	?>
 	<div class="col-lg-6 m-auto">
 		<form method="post" style="padding-left: 90px;">
 			<br><div class="card" style="width: 457px;">
 				<div class="card-header bg-sm">
 				<h1 class="text-black text-center">Add Medicine</h1>	
 				</div><br>
		Medicine image: <input type="file" name="image" style="height: 45px;" required><span class="error"><?php echo $erp;?></span>
		Description: <input type="text" name="text" style="height: 75px;"><span class="error"><?php echo $ert;?></span><br>
		Medicine name: <input type="text" name="text1" style="height: 40px;"><span class="error"><?php echo $erx;?></span><br>
		Medicine price: <input type="text" name="text2" style="height: 40px;"><span class="error"><?php echo $erz;?></span><br>
		<button type="submit" class="submit" name="btn" onclick="return add()" style="width: 130px; margin-left: 150px;">Add Medicine</button>
	</form>
 			</div>
 		</form>		
 	</div>
 </body>
 </html>