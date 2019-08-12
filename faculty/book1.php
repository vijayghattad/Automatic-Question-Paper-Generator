<?php

$con=mysqli_connect("localhost","root","","qpgs") or die("error creating database");

?>
<?php

$email=$_POST['email'];
$pass=$_POST['password'];

$hashed = hash('sha512', $pass);
$query="select * from faculty where email='$email' and password='$hashed' and status='yes'";
$s=mysqli_query($con,$query);
$res=mysqli_num_rows($s);
$count=$res;
if($count==1)
{
?>
<script>
document.location.href="add_question.php";
</script>
<?php
}

else
{

?>
<script>
confirm("Invalid username/password");
</script>
<?php
}
?>