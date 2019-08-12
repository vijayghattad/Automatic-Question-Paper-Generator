<?php
session_start();
if(!isset($_SESSION["username"]))
{
	?>
	<script type="text/javascript">
	window.location="login.php";
	</script>
	<?php
	
}
include('connection.php');
$qid=$_GET['qid'];
$query = "DELETE FROM question WHERE qid='$qid'";
$data = mysqli_query($con,$query);
if($data)
{
?>
<script>
confirm("Question successfully deleted");
window.location="display_questions.php";	
</script>
<?php
}
else
{
	?>
	<script>
	confirm("Question deletion unsuccessful");	
	window.location="display_questions.php";	
	</script>
<?php
}
?>