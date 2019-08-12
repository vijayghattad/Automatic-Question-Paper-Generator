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
$id=$_GET['id'];
$query = "DELETE FROM add_subject WHERE scode='$id'";
$data = mysqli_query($con,$query);
if($data)
{
?>
<script>
confirm("Subject successfully deleted");
window.location="display_subjects.php";	
</script>
<?php
}
else
{
	?>
	<script>
	confirm("Subject deletion unsuccessful");	
	window.location="display_subjects.php";	
	</script>
<?php
}
?>