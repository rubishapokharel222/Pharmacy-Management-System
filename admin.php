<link rel="stylesheet" type="text/css" href="css/admiin.css">
<?php 
session_start();



 ?> 
<script type="text/javascript">
  function userinput(){
    username = document.point.username.value;
    password = document.point.password.value;
    if(username == ""){
      document.getElementById("user").innerHTML = "Please enter your Username!";
      return false;
    }
    if(password==""){
      document.getElementById("pass").innerHTML = "Please enter your Password!";
      return false;
    }
  }
</script>

<?php require"header.php"; ?>

<!--------------------------------------------Admin page------------------------------------------->

	<div class="Mydiv">
		<h1 style="color: white;">Admin Login</h1>
    <br>
    <?php
    $err=$errors="";
if(isset($_POST['submit'])){
  if(empty($_POST['username'])|| empty($_POST['password'])){
    $err="cannot be empty";
  }
  else{
    require"database.php";
     $username = $_POST['username'];
      $password = $_POST['password'];               
                  
          $sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";
            $result= $con->query($sql);

              if($rows=mysqli_num_rows($result)>0){
                $_SESSION['user']=$_POST['username'];
                $_SESSION['admin']="Successfully login.Welcome Admin";
                 header("location: dashboard.php");
                  }
                else{
                $errors = "username or password is invalid.";
                }
  }
}
?>
    <form class="point" method="POST">
      Username: <input type="text" name="username" id="user" required>
      <p id="username_err"><?php echo "$err";?></p>
      Password: <input type="password" name="password" id="pass" required>
      <p style="color: red;"><?php echo "$err"; ?></p>
      <p style="color: red;"><?php echo "$errors"; ?></p>
      <button type="submit" name="submit" onclick="return userinput()">Login</button>
    </form>

