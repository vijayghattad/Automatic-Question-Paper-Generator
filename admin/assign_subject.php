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

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2 style="color:black;">Assign Subject</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form name = "form1" action="" method="post">
								<table>
								<tr>
								<td>
								<select name="fname" class="form-control selectpicker">
								<?php

								$query="select fname from faculty";
								$s=mysqli_query($con,$query);

								while($row=mysqli_fetch_array($s))
								{
									echo "<option>";
									echo $row["fname"];
									echo "</option>";
								}
								?>
								
								</select>
								</td>
								<td>
								<button  type="submit" name="submit1" style="border:none; display: inline-block; margin-left:30px; margin-top:5px;  border-radius:30px;"> 
								<img src="images/search.png" height="33px" width="50px" style="border-radius:10px; display: block;"></button>
								</td>
								</tr>
								</table>
								
								<?php
								if(isset($_POST["submit1"]))
								{
									$query="select * from faculty where fname='$_POST[fname]'";
									$s5=mysqli_query($con,$query);
									while($row=mysqli_fetch_array($s5))
									{
										$fid=$row["fid"];
										$fname=$row["fname"];
									    $email=$row["email"];
										$contact=$row["contact"];
										$bid=$row["bid"];
                                        $_SESSION["fid"]=$fid;									
									}

								    ?>
								    <table class = "table table-bordered" style="margin-top:30px;">
										<tr>
										<td><input type="text" name="fid" class="form-control" autocomplete="off" placeholder="faculty id" value="<?php echo $fid; ?>" disabled style="border-radius:10px;"></td>
										</tr>
										<input type="hidden" name="fname" class="form-control" autocomplete="off" placeholder="fname" value="<?php echo $fname; ?>" required="" style="border-radius:10px;">										<input type="hidden" name="email" class="form-control" autocomplete="off" placeholder="email" value="<?php echo $email; ?>" required="" style="border-radius:10px;">
										<input type="hidden" name="contact" class="form-control" autocomplete="off" placeholder="contact" value="<?php echo $contact; ?>" required="" style="border-radius:10px;">
										<input type="hidden" name="bid" class="form-control" autocomplete="off" placeholder="branch id" value="<?php echo $bid; ?>" required="" style="border-radius:10px;">
										<tr>
										<td>
										<select name="sname" class="form-control selectpicker" style="border-radius:10px;">
										<?php
										 //include('issue_details1.php');
										 $query1="select sname from add_subject";
										 $t=mysqli_query($con,$query1);

											while($row=mysqli_fetch_array($t))
                                            {
											    echo "<option>";
											    echo $row["sname"];
                                                echo "</option>";
								            }
										?>
										</select>
										</td>
										</tr>
										<tr> 
										<td><input type="submit" value="Assign"
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
								$fname = mysqli_real_escape_string($con, $_REQUEST['fname']);
								$email = mysqli_real_escape_string($con, $_REQUEST['email']);
								$contact = mysqli_real_escape_string($con, $_REQUEST['contact']);
								$bid = mysqli_real_escape_string($con, $_REQUEST['bid']);
                                $sname = mysqli_real_escape_string($con, $_REQUEST['sname']);
                                $q="select scode from add_subject where sname='$sname'";
                                $r=mysqli_query($con,$q);
                                $res=mysqli_fetch_assoc($r);
                                $scode=$res['scode'];

								
								$check="SELECT * FROM assign_subject WHERE fname='$fname' and scode='$scode'";
								$rs = mysqli_query($con,$check);
								$data = mysqli_num_rows($rs);
								if($data > 0) 
								{
   									?>
  									<script type="text/javascript">
    								confirm("User already existed");
   									</script>
   									<?php
								}	
								
								else
								{
                                // attempt insert query execution
                                	$t="INSERT INTO assign_subject (fid, fname, contact, email ,bid, sname,scode) VALUES ('$_SESSION[fid]', '$fname', '$contact', '$email' ,'$bid' ,'$sname','$scode')";
                                	if(mysqli_query($con, $t))
                                	{
                                    ?>  
                                    <script type="text/javascript">
                                    confirm("Subject assigned successfully");
                                    //document.location.href="login.php";
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
