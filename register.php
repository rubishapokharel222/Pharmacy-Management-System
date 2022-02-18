
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>

	<?php
	session_start();
	$err=$error="";

	if(isset($_POST['submit'])){
	if(empty($_POST['name']) || empty($_POST['address']) || empty($_POST['contact']) || empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password'])){
		$err = "Error Occurs: Cannot be empty.";
	}
	else{
		$name = $_POST['name'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$con = new mysqli('localhost','root','','productdb');
		$sql = "INSERT INTO customer(name,address,contact,email,username,password)
		VALUES('$name','$address','$contact','$email','$username','$password')";

		if($con->query($sql)===TRUE) {
			$_SESSION['register']="Account Registered Successfully";
			header("location:login.php");
		}
		else{
			$error = "Invalid Input.";
		}
			$con->close();
		}
	} 

	 ?>

<?php require"header.php" ?>
<div id="Mydiv"></div>
	<h1 style="color: white;"> Register Now</h1>
  <br>
	<form class="point" method="post" style="padding: 50px;">
	Name: <input type="text" name="name" id="name">
	Address: <input type="text" name="address" id="address">
	Contact: <input type="text" name="contact" id="contact" min=0 max=10>
    Email: <input type="text" name="email" id="email">
    Username: <input type="text" name="username">
    Password: <input type="Password" name="password">
    <p style="color: red;"><?php echo "$err"; ?></p>
	<p style="color: red;"><?php echo "$error"; ?></p>
		<input type="submit" name="submit" value="Signup" class="submit">
     <h6>Already have an account?<a href="login.php" style="color: white; text-decoration: underline;">Login</h6>

	</form>

</body>
</html>
