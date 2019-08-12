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
include('header.php');
?>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
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
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h1 style="color:black; text-align:center;">Questions</h1>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<form name = "form1" action="" method="post">
								<table>
								<tr>
								<td>
								<select name="sname" class="form-control selectpicker">
								<?php

								$query="SELECT sname from assign_subject where email = '$_SESSION[username]'";
								$s=mysqli_query($con,$query);

								while($row=mysqli_fetch_array($s))
								{
									echo "<option>";
									echo $row["sname"];
									echo "</option>";
								}
								?>
								
								</select>
								</td>
								<td> 
								<input  type="submit" value="All Questions" name="submit1" class="form-control btn btn-default" style="margin-top:5px; margin-left:5px; background-color:#2a3f54; color:white; border-radius:20px;">
								</td>
								<td> <input  type="submit" value="My Questions" name="submit2" class="form-control btn btn-default" style="margin-top: 5px; margin-left:10px; background-color:#2a3f54; color:white; border-radius:20px;">
								</td>
								<td> <input  type="submit" value="Difficulty Level" name="submit3" class="form-control btn btn-default" style="margin-top: 5px; margin-left:15px; background-color:#2a3f54; color:white; border-radius:20px;">
								</td>
								</tr>
								</table><br><br>
							<?php
							if(isset($_POST["submit1"]))
							{    $_SESSION["sname"]=$_POST["sname"]; 
								?>
								<iframe src="search_subject.php" height="440px" width="100%" frameborder="0">
								</iframe>
								<?php	
							}
							if(isset($_POST["submit2"]))
							{
								$_SESSION["sname"]=$_POST["sname"]; 
								?>
								<iframe src="my_question.php" height="440px" width="100%" frameborder="0">
								</iframe>
								<?php
							}
							if(isset($_POST["submit3"]))
							{
								$_SESSION["sname"]=$_POST["sname"]; 
								?>
								<iframe src="difficulty.php" height="440px" width="100%" frameborder="0">
								</iframe>
								<?php
							}
							?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

<?php
include('footer.php');
?>