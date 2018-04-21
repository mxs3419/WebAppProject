<?php
   include("config.php");
      session_start();

         if($_SERVER["REQUEST_METHOD"] == "POST") {
	       // username and password sent from form 

	             $myusername = mysqli_real_escape_string($db,$_POST['username']);
		           $mypassword = mysqli_real_escape_string($db,$_POST['password']);

			         $sql = "SELECT UserID FROM users WHERE username = '$myusername' and pass = '$mypassword'";
				       $result = mysqli_query($db,$sql);
				             $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
					           $active = $row['active'];

						         $count = mysqli_num_rows($result);

							       // If result matched $myusername and $mypassword, table row must be 1 row

							             if($count == 1) {
								              //session_register("myusername");
									               $_SESSION['login_user'] = $myusername;

										                header("Location: welcome.php");
												      }else {
												               $error = "Your Login Name or Password is invalid";
													             }
														        }
														?>

<html>
<link rel="stylesheet" href="styles.css">
<body link="white">
	<div class="skitter">
		<img src="skitter.png" alt="skitter">
	</div>
	<div class="buttons">	
		<form action="" method="post">
			<label>UserName :</label><input type="text" name = "username" class= "box" /><br /><br />
			<label>Password :</label><input type="password" name = "password" class = "box" /><br/><br />
			<input type = "submit" value = " Submit "/><br />
	
		</form>
			<p><a href = "register.php" style="color: #ffffff">Create an Account</a></p>
	</div>
</body>
</html>

