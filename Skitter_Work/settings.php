<?php
	include('session.php');
	session_start();

        if($_SERVER["REQUEST_METHOD"] == "POST") {
	$myusername = mysqli_real_escape_string($db,$_POST['username']);
        $mypassword = mysqli_real_escape_string($db,$_POST['password']);

        $sql = "DELETE FROM users where username='$myusername'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];

        $count = mysqli_num_rows($result);
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
<div class = "buttons">
	<h1> <?php $login_session; ?> 's Account</h1>
	<form action="" method="post">
                        <label>New Email :</label><input type="text" name = "newEmail" class= "box" /><br /><br />
                        <label>New Password :</label><input type="password" name = "newPass" class = "box" /><br/><br />
                        <input type = "submit" value = " Submit "/><br />
        </form>
	
	<p>Update your Profile Picture</p>
	<button onclick="uploadPic()">Upload</button>
</div>	
	<script>
	function uploadPic() {
		var x = document.createElement("INPUT");
		x.setAttribute("type", "file");
		document.body.appendChild(x);
	}
	</script>	
<div class = "buttons">
	<p><a href = "delete.php" style="color: #ffffff">Delete Account</a></p>





</div>


</body>
</html>
	
