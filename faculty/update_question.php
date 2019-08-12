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
error_reporting(0);
$_GET['m'];  
$_GET['qid'];
$_GET['q'];
$_GET['ma'];
$_GET['d'];
?>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div>
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div style="min-height:250px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            <form  action="" method="GET">
								<table style="width:100%;">
                                <tr> 
                                <td><input type="hidden" name="qid" class="form-control" value="<?php echo $_GET['qid']; ?>"></td>
                                </tr>
								<tr> 
                                <td><b>Module </b></td> <td> <input type="text" name="module" style="height:35px; width:100%; border-radius:10px;" class="form-control" value="<?php echo $_GET['m']; ?>"></td>
                                </tr>
                                <tr> 
                                <td><b>Question </b></td> <td>  <input type="text" name="question" style="height:35px; width:100%; border-radius:10px;" class="form-control" value="<?php echo $_GET['q']; ?>"></td>
                                </tr>
                                <tr> 
                                <td><b> Marks </b></td> <td>  <input type="text" name="marks" style="height:35px; width:100%; border-radius:10px;" class="form-control" value="<?php echo $_GET['ma']; ?>"></td>
                                </tr>
                                <tr> 
                                <td><b> Difficulty level </b></td> <td>  <input type="text" style="height:35px; width:100%; border-radius:10px;" name="difficultylevel" class="form-control" value="<?php echo $_GET['d']; ?>"></td>
                                </tr>
                                <tr>
								<td colspan="2"> <input  type="submit" value="Update" name="submit" style="height:35px; width:100%; border-radius:10px; margin-top:30px; background:#2A3F54; color:white;" class="form-control btn btn-default">
								</td>
								</tr>
                                </table>
                            </form>
							<?php
							if(isset($_GET['submit']))
							{     
                                $module = $_GET['module'];
                                $qid = $_GET['qid'];
                                $question = $_GET['question'];
                                $marks = $_GET['marks'];
                                $difficulty = $_GET['difficultylevel'];
                                $que = "UPDATE question SET module='$module', question='$question', marks='$marks', difficultylevel='$difficulty' where qid='$qid'";
                                $data = mysqli_query($con, $que);
                                if($data)
                                {
                                    ?>
                                    <script>
                                        confirm("Record successfully updated");
                                        window.location="update_question.php";
                                    </script>
                                    <?php
                                }
                                else
                                {
                                    echo "Record Not Updated";
                                }
                            }
							?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
 

