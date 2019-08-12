<?php

if(!isset($_SESSION["librarian"]))
{
	?>
	<script type="text/javascript">
	window.location="login.php";
	</script>
	<?php
	
}

$link = mysqli_connect("localhost", "root", "", "qpgs");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$scode = mysqli_real_escape_string($link, $_REQUEST['scode']);
$sname = mysqli_real_escape_string($link, $_REQUEST['sname']);
$bid = mysqli_real_escape_string($link, $_REQUEST['bid']);

// attempt insert query execution
$sql = "INSERT INTO add_subject (scode, sname, bid) VALUES ('$scode', '$sname', '$bid')"; 
if(mysqli_query($link, $sql)){
 ?>   
 <script type="text/javascript">
  confirm("Subject Insertion Successful");
 </script>
<?php
} 
else{
    ?>
	<script type="text/javascript">
  confirm("Subject already exist");
 </script>
<?php
}
?>
