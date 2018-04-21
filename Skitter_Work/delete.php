<?php
	include('session.php');
	session_start();

        if($_SERVER["REQUEST_METHOD"] == "POST") {
	$myusername = mysqli_real_escape_string($db,$_POST['username']);
        $mypassword = mysqli_real_escape_string($db,$_POST['password']);

        $sql = mysqli_query("DELETE FROM users where username='$myusername'");
	
	
	if($sql){
		echo "Deleted";
	}
	
	header("Location: index.php");
	}
?>

<html>
<link rel="stylesheet" href="styles.css">
<head>

</head>
<body>
<div class="topnav">

	<a href = "welcome.php"><img src="skitter_small.png"></a>
	<div class = "topnav-right">
	<a class="active" href="profile">Profile</a>
	<a href = "logout.php">Sign Out</a>
	</div>

</div>




	<form action="" method="post">
		<label>UserName :</label><input type="text" name = "username" class = "box" /><br /><br />
		<label>Password :</label><input type="password" name = "password" class = "box" /><br /><br />
		<input type = "submit" value = "DELETE"/><br />
	</form>

</body>
</html>
