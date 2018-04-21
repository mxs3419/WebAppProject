<?php
    include('session.php');
?>

<html>
<link rel="stylesheet" href="styles.css">
<head>
	<title>Welcome</title>
</head>

<body>
<div class="topnav">
	<!--<img src="skitter_small.png" align="top">--!>
	<a href = "welcome.php"><img src="skitter_small.png"></a>
	<div class="topnav-right">	
	<a href = "settings.php">Profile</a>	
	<a href = "logout.php">Sign out</a>
	</div>
</div>	
<div>
<h1>Welcome <?php echo $login_session; ?></h1>
</div?>
</body>
</html>
