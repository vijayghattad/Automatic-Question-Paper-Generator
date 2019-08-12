<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "qpgs");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
$contact = mysqli_real_escape_string($link, $_REQUEST['contact']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$bid = mysqli_real_escape_string($link, $_REQUEST['bid']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);

$hashed = hash('sha512', $password);

$check="SELECT * FROM faculty WHERE email='$email' and contact='$contact' and fname='$fname'";
$rs = mysqli_query($con,$check);
$data = mysqli_num_rows($rs);
if($data > 0) 
{
    ?>
    <script type="text/javascript">
    confirm("User already exist");
    </script>
    <?php
}

else
{
    $sql = "INSERT INTO faculty (fname, contact, email, bid, status, password) VALUES ('$fname', '$contact', '$email', '$bid', 'No', '$hashed')";
    if(mysqli_query($link, $sql)){
    ?>  
    <script type="text/javascript">
    confirm("Data is inserted. You need admin permission to login");
    document.location.href="login.php";
    </script>
    <?php
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}
?>