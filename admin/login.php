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
    <h1>Admin Login Form</h1>
    <div class=" w3l-login-form">
        <h2>Login Here</h2>
        <form name="form1" action="" method="POST">
            <div class=" w3l-form-group">
                <div class="group" style="border-radius:15px">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" class="form-control" placeholder="Username" required="required" />
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
        <p class=" w3l-register-p"><p style="size:25px; color:white; margin-left:20%;">Faculty login click here <a href="../faculty/login.php" class="register">Login</a></p>
        </div>
    
    <?php
	if(isset($_POST["submit1"]))
   {     
        $_SESSION["librarian"]=$_POST["username"];
		include('book1.php');
   }
   ?>

</body>
</html>