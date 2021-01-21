<!Doctype html>
<html>
	<head>
	<link rel="stylesheet"  href="css/register.css?v=<?php echo time(); ?>">
	</head>
	<body>
		<form class="reg-box" method="post" action="">
			<h1>Register</h1>
			<div>
				<div class="text-box">
					<label for="Name"><b>Name:</b></label>
					<input type="text" placeholder="Enter Your Name" name="Name" id="n" required>
				</div>
				<div class="text-box">
					<label for="email"><b>Email:</b></label>
					<input type="email" placeholder="Enter Email" name="email" id="e"required>
				</div>
				<div class="text-box">
					<label for="psw"><b>Password:</b></label>
					<input type="password" placeholder="Enter Password" name="psw" id="p" required>
				</div>
				
				<button type="submit"  id="reg" class="btn">Register</button>
				<button type="button" class="btn" id ="cancle" onclick="myFunction()"> Cancle </button>
				
			</div>
		</form>
	</body>
	
	<script>
		function myFunction() {
			document.getElementById("n").value="";
			document.getElementById("e").value="";
			document.getElementById("p").value="";
	}
	</script>
</html>

<?php
if(isset($_POST['Name'])&&isset($_POST['email'])&&isset($_POST['psw'])){
	
	$name = $_POST['Name'];
	$email = $_POST['email'];
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
	else{
		$stmt = $conn->prepare("INSERT INTO registration (Name, Email, Password) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $pass);
		
		$stmt->execute();
		echo"Registration Successfull";
		$stmt->close();
		$conn->close();
		header("location:login.php");
	}
}
?> 