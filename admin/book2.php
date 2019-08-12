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
$bid = mysqli_real_escape_string($link, $_REQUEST['bid']);
$bname = mysqli_real_escape_string($link, $_REQUEST['bname']);
 
// attempt insert query execution
$sql = "INSERT INTO branch (bid, bname) VALUES ('$bid', '$bname')"; 
if(mysqli_query($link, $sql))
{
 ?>   
 <script type="text/javascript">
  confirm("Branch Insertion Successful");
  document.location = "add_branch.php";
   </script>
<?php
} 

else
{
    ?>
	<script type="text/javascript">
  confirm("Branch already exist");
 </script>
<?php
}
?>
