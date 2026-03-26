<?php 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "html_pages";

 $con = new mysqli($servername, $username, $password, $dbname);

 if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
 }

session_start();

if(isset($_POST['signin']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql="SELECT * FROM `login` WHERE `username`='$username' AND `password`='$password' ";

	$result=mysqli_query($con,$sql);

	if(mysqli_num_rows($result)>0){
	   $_SESSION['AdminLogin']='admin';
	   header("location:company_particular.php");
	}
	else{
	    echo"incorrect";
	}
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
.login-container {
	margin: auto;
	width: 50%;
	padding: 20px;
	border: 1px solid #ccc;
	border-radius: 10px;
}

h1 {
	text-align: center;
}

form {
	display: flex;
	flex-direction: column;
}

label {
	margin-bottom: 5px;
}

input[type=text], input[type=password] {
	padding: 10px;
	margin-bottom: 10px;
	border: 1px solid #ccc;
	border-radius: 5px;
}

input[type=submit] {
	background-color: #4CAF50;
	color: white;
	padding: 10px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}

input[type=submit]:hover {
	background-color: #45a049;
}
</style>


<body>
	<div class="login-container" style="margin-top:150px">
		<h1>Login</h1>
		<form method="post" >
			<label for="username">Username:</label>
			<input type="text" name="username" placeholder="username" autocomplete="nope">
			<label for="password">Password:</label>
			<input type="password" name="password" placeholder="password" autocomplete="nope">
			<button type="submit" name="signin">log in</button>
		</form>
	</div>
    <script>
  // Disable autofill
  window.onload = function() {
    document.getElementById('username').setAttribute('autocomplete', 'off');
    document.getElementById('password').setAttribute('autocomplete', 'off');
  };
</script>

</body>
</html>
