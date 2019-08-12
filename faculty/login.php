<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Question paper generator</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
    <link href="css/login_style.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <h1>Faculty Login Form</h1>
    <div class=" w3l-login-form">
        <h2>Login Here</h2>
        <form name="form1" action="" method="POST">
            <div class=" w3l-form-group">
                <div class="group" style="border-radius:15px">
                    <i class="fas fa-user"></i>
                    <input type="text" name="email" class="form-control" placeholder="Email" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <div class="group" style="border-radius:15px">
                    <i class="fas fa-unlock"></i>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="required" />
                </div>
            </div>
            <div class="forgot">
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" name="submit1" style="border-radius:30px">Login</button>
        </form>
        <p class=" w3l-register-p">For admin login click here<a href="../admin/login.php" class="register"> Admin</a></p>
        <p class=" w3l-register-p">Don't have an account?<a href="registration.php" class="register"> Register</a></p>
    </div>
    
    <?php
	if(isset($_POST["submit1"]))
   {
	$_SESSION["username"]=$_POST["email"];
    include('book1.php');
   }
  ?>

</body>
</html>