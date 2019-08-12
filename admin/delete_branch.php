<?php
session_start();
if(!isset($_SESSION["librarian"]))
{
	?>
	<script type="text/javascript">
	window.location="login.php";
	</script>
	<?php
	
}
include('connection.php');
$bid=$_GET['bid'];
$query = "DELETE FROM branch WHERE bid='$bid'";
$data = mysqli_query($con,$query);
if($data)
{
?>
<script>
confirm("Branch successfully deleted");
window.location="add_branch.php";	
</script>
<?php
}
else
{
	?>
	<script>
	confirm("Branch deletion unsuccessful");	
	window.location="add_branch.php";	
	</script>
<?php
}
?>