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
if(isset($_GET["fid"])) {
$fid=$_GET["fid"];
mysqli_query($con,"delete from faculty where fid=$fid");
?>

<script type="text/javascript">
window.location="display_faculty_info.php";
</script>
<?php
}
else
{
	?>
	<script type="text/javascript">
window.location="display_faculty_info.php";
</script>
<?php
}