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
if(isset($_GET["fid"]) && isset($_GET['sname'])) {
$fid=$_GET["fid"];
$sname=$_GET["sname"];
mysqli_query($con,"DELETE from assign_subject where fid='$fid' and sname='$sname'");
?>

<script type="text/javascript">
window.location="subject_assign_details.php";
</script>
<?php
}
else
{
	?>
	<script type="text/javascript">
window.location="faculty_record.php";
</script>
<?php
}