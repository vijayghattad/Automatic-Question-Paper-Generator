<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Question paper generator</title>
<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Meta tag Keywords -->
<link href="css/reg_style.css" rel="stylesheet" type="text/css" media="all">
<style>
	select, option {
    width: 445px;
	 height: 35px;
}

option {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}
	</style>
</head>
<body>
<div class="form">
	<div class="form-content">
		<form  name="form1" action="" method="post">
			<div class="form-info">
				<h2>SIGN UP</h2>
			</div>
			<div class="name">
				<input class="input1" type="text" name="fname" placeholder="Fullname" required="">
            </div>
            <div class="name">
				<input class="input1" type="name" name="contact" placeholder="Phone Number" required="">
            </div>
			<div class="email">
				<input class="input1" type="email" name="email" placeholder="Email" required="">
            </div>
			<div class="name">
				<select name="bid" class="form-control selectpicker" style="border-style:hidden; color:grey; font-size:16px;">
					<?php
						echo "<option> Select Department </option>";
						$query1="select bid from branch";
					    $t=mysqli_query($con,$query1);
						while($row=mysqli_fetch_array($t))
                        {
							echo "<option>";
							echo $row["bid"];
							echo "</option>";
						}
					?>
				</select>
            </div>
			<div class="pass1">
			<input class="input1" type="password" name="password" placeholder="Password" required="">
			</div>
			<div class="pass2">
			<input class="input1" type="password" name="confirm_password" placeholder="confirm password" required="">
			</div>
			<div class="signup"> <br>
				<input type="submit" name="submit1" value="SIGN UP" style="border-radius:30px">
			</div>
			<br> <br>
			<p align="center" style="color:white;">Already have an account? <a href="login.php" >&nbsp&nbsp Login</a></p> <br>
			<p align="center" style="color:white;">Go to Home page<a href="../index.php" >&nbsp&nbsp&nbsp Home</a></p> 
		</form>
	</div>
	<?php
		if(isset($_POST["submit1"]))
		{
			if($_POST["password"] == $_POST["confirm_password"])
			{
				include('book.php');
			}
			else
			{
				?>
				<script>
				confirm("Password Mismatch");
				</script>
				<?php
			}
		}
		?>
</div>
</body>
</html>