<?php

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	require("database.php");
	$sql="INSERT INTO customer(name,address,contact,email,username,password) VALUES('$name','$address','$contact','$email','$username','$password')";
	if($con->query($sql)===TRUE){
		header("location:login.php");
	}
	else{
		echo "Error";
	}

} 
?>
<?php require"header.php" ?>

<form method="post">
	Name:<input type="text" name="name"><br><br>
	Address:<input type="text" name="address"><br><br>
	Contact <input type="text" name="contact"><br><br>
	email:<input type="text" name="email"><br><br>
	username:<input type="text" name="username"><br><br>
	password: <input type="password" name="password"><br><br>
	<input type="submit" name="submit" value="signup">
</form>
