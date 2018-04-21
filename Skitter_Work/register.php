<?php
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 

   	$myusername = mysqli_real_escape_string($db,$_POST['username']);
   	$mypassword = mysqli_real_escape_string($db,$_POST['password']);
        //$sql = "SELECT UserID FROM users WHERE username = '$myusername' and pass = '$mypassword'";
	$sql = "INSERT INTO users (username, pass) values ('$myusername', '$mypassword')";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];

        $count = mysqli_num_rows($result);

                                                               // If result matched $myusername and $mypassword, table row must be 1 row
	header("Location: success.php");
                 }
?>


<html>
<link rel="stylesheet" href="styles.css">
<head>
        <title>Account Creation</title>
</head>

<body>
<div class="topnav">
	<img src="skitter_small.png">
        <div class="topnav-right">
        <a href = "index.php">Sign In</a>
        </div>
</div>
	<div>
	<form action="" method="post">
                        <label>UserName :</label><input type="text" name = "username" class= "box" /><br /><br />
                        <label>Password :</label><input type="password" name = "password" class = "box" /><br/><br />
                        <input type = "submit" value = " Submit "/><br />

        </form>
	</div>
<div>
</div?>
</body>
</html>

