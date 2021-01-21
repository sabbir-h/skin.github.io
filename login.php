<!Doctype html>
<html>
<head>
<link rel="stylesheet"  href="css/login.css?v=<?php echo time(); ?>">
<link rel="stylesheet"  href="css/all.css?v=<?php echo time(); ?>">

<title>Log In</title>
</head>
<body>
<form method="post" action="">
	<div class="login-box">
		<h1>Please Log In</h1>
	
		<div class="text-box"> 
			<i class="fas fa-users" aria-hidden="true"></i>
			<input type="text" placeholder="Enter Username" name="uname" required id="un"></br>
		</div>
	
		<div class="text-box">
			<i class="fas fa-unlock-alt" aria-hidden="true"></i>
			<input type="password" placeholder="Enter Password" name="psw" required id="pss">
		</div>
		<br>
		<label>
			<input type="checkbox" name="remember"> Remember me
		</label></br>

		<button type="submit" class="btn" value="login">Login</button>
		<button type="button" class="btn" value="cancle" onclick="myFunction()">Cancel</button>
	
		<div>
			<a href="http://localhost/project/register.php"> Register?</a> Or
			<span>Forgot<a href="#"> password?</a></span>
		</div>
  </div>
  
  </form>
  </body>
  
  	<script>
		function myFunction() {
			document.getElementById("un").value="";
			document.getElementById("pss").value="";
	}
	</script>
  </html>
  
 <?php
	
	session_start();
	
	if(isset($_POST['uname'])&&isset($_POST['psw'])){
		$name = $_POST['uname'];
		$pass = $_POST['psw'];

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "sdd";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
			$sql = "SELECT * FROM registration where Name = '$name' and Password = '$pass'";
			$result = mysqli_query($conn,$sql);

			$count = mysqli_num_rows($result);
	
		if ($count == 1){
			echo "log in successfull";
			header("location:main.php");
		}
		else{
	
			echo"Log in faild. Check username or password.";
		}
    }
?>