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
error_reporting(0);
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

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h1 style="color:black; text-align:center;">Add Question</h1>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form name = "form1" action="" method="post">
								<table>
								<tr>
								<td>
								<select name="sname" class="form-control selectpicker">
								<?php

								$query="select sname from assign_subject where email = '$_SESSION[username]'";
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
								<button  type="submit" name="submit1" style="border:none; display: inline-block; margin-left:40px; margin-top:5px; border-radius:30px;"> 
								<img src="images/search.png" height="33px" width="50px" style="border-radius:10px; display: block;"></button>
								</td>
								</tr>
								</table>
								
								<?php
								if(isset($_POST["submit1"]))
								{
									$query="select scode, sname, bid from assign_subject where sname='$_POST[sname]'";
									$s5=mysqli_query($con,$query);
									while($row=mysqli_fetch_array($s5))
									{
										$scode=$row["scode"];
										$sname = $row["sname"];
										$bid = $row["bid"];
										$_SESSION["scode"]=$scode;
										$_SESSION["sname"]=$sname;
										$_SESSION["bid"]=$bid;								
									}

									$q="select fid from faculty where email='$_SESSION[username]'";
									$s6=mysqli_query($con,$q);
									while($row=mysqli_fetch_array($s6))
									{
										$fid = $row["fid"];
										$_SESSION["fid"]=$fid;	

									}

								    ?>
								    <br><br><br><table class = "table table-bordered" >
										<tr>
										<td><input type="text" name="scode" class="form-control" autocomplete="off" placeholder="Subject Code" value="<?php echo $scode; ?>" style="border-radius:10px;" disabled></td>
										</tr>
										<tr>
										<td><input type="text" name="sname" class="form-control" autocomplete="off" placeholder="Subject Name" value="<?php echo $sname; ?>"  style="border-radius:10px;" disabled></td>
										</tr>
										<tr>
										<td><input type="text" name="bid" class="form-control" autocomplete="off" placeholder="Branch Id" value="<?php echo $bid; ?>"  style="border-radius:10px;" disabled></td>
										</tr>
                    					<tr>
										<td><select name="module" class="form-control selectpicker"  style="border-radius:10px;" required>
										<option value="" disabled selected>Select Module</option>
												<option value="1">Module 1</option>
                                                <option value="2">Module 2</option>
                                                <option value="3">Module 3</option>
                                                <option value="4">Module 4</option>
                                                <option value="5">Module 5</option>
                                            </select>
                                        </td>
										</tr>
										<tr>
										<td><input type="text" name="question" class="form-control" autocomplete="off" placeholder="Enter Question" value=""  style="border-radius:10px;" required=""></td>
										</tr>
										<tr>
										<td><select name="difficulty" class="form-control selectpicker"  style="border-radius:10px;" required>
												<option value=""  style="border-radius:10px;" disabled selected>Difficulty Level</option>
												<option value="L1"  style="border-radius:10px;">L1</option>
                                                <option value="L2"  style="border-radius:10px;">L2</option>
                                                <option value="L3"  style="border-radius:10px;">L3</option>
                                            </select></td>
										</tr>
										<tr>
										<td><select name="marks" class="form-control selectpicker"  style="border-radius:10px;" required>
												<option value="" disabled selected>Marks</option>
												<option value="10">10</option>
                                                <option value="8">8</option>
                                                <option value="6">6</option>
                                                <option value="5">5</option>
												<option value="4">4</option>
												<option value="3">3</option>
                                            </select>
                                        </td>
										</tr>
										<tr> 
										<td><input type="submit" value="ADD"
										           name="submit2" class="form-control btn btn-default" style="background-color:#2a3f54; color:white; border-radius:20px;"></td>
										</tr>
								</table>
								<?php
								  
                                }
						?>
						</form>
						<?php
						if(isset($_POST["submit2"]))
							{	
								$scode = mysqli_real_escape_string($con, $_REQUEST['scode']);
								$module = mysqli_real_escape_string($con, $_REQUEST['module']);
								$question = mysqli_real_escape_string($con, $_REQUEST['question']);
                                $difficulty = mysqli_real_escape_string($con, $_REQUEST['difficulty']);
								$marks = mysqli_real_escape_string($con, $_REQUEST['marks']);
								                      
								$check="SELECT * FROM question WHERE question='$question'";
								$rs = mysqli_query($con,$check);
								$data = mysqli_num_rows($rs);
								if($data > 0) 
								{
   									?>
  									<script type="text/javascript">
    								confirm("Question already exist");
   									</script>
   									<?php
								}	
								
								else
								{
								// attempt insert query execution
                                	$t="INSERT INTO question (scode, sname, bid, fid, question, module, difficultylevel, marks) VALUES ('$_SESSION[scode]', '$_SESSION[sname]', '$_SESSION[bid]', '$_SESSION[fid]', '$question' ,'$module' ,'$difficulty','$marks')";
                                	if(mysqli_query($con, $t))
                                	{
                                    ?>  
                                    <script type="text/javascript">
                                    confirm("Question successfully inserted");
                                  //  document.location.href="add_question.php";
                                    </script>
                                    <?php
                                	} 															
                                	else
                                	{
                                    	echo "ERROR: Could not able to execute $t. " . mysqli_error($con);
									}
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
<?php
include('footer.php');
?>
