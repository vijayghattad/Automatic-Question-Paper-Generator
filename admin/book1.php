<?php

$con=mysqli_connect("localhost","root","","qpgs") or die("error creating database");

?>
<?php

$name=$_POST['username'];
$pass=$_POST['password'];
$hashed = hash('sha512', $pass);
$query=mysqli_query($con,"select * from admin where username='$name' and password='$hashed'");
//$s=mysqli_query($con,$query);
$res=mysqli_num_rows($query);
$count=$res;
if($count==1)
{
	$_SESSION["librarian"]=$_POST["username"];
?>
<script>
document.location.href="display_faculty_info.php";
</script>
<?php
}

else
{

?>
<script>
confirm("invalid username/password");

</script>
<?php
}
?>