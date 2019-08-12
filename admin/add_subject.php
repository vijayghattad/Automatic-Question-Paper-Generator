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
include('header.php');
include('connection.php');
?>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        
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
							<h3  style="color:black; text-align:center;">Add Subject</h3>
								<div class="clearfix" >
							    </div>
                            </div>
                            <div class="x_content">
							<form name = "form1" action="" method="post" class="col-lg-6">
                             <table class = "table table-bordered"  style="margin-left:50%;">
								<tr>
								<td><input type="text" name="scode" class="form-control" autocomplete="off" placeholder="Subject Code" required="" style="border-radius:10px;"/></td>
								</tr>
								<tr>
								<td><input type="text" name="sname" class="form-control" autocomplete="off" placeholder="Subject Name" required="" style="border-radius:10px;"/></td>
								</tr>
                                <tr>
										<td>
										<select name="bid" class="form-control selectpicker" style="border-radius:10px;">
										<?php
										 $query1="select bid from branch";
										 $t=mysqli_query($con,$query1);

											while($row=mysqli_fetch_array($t))
                                        {
											echo "<option>";
											echo $row["bid"];
											echo "</option>";
										}
										?>
										</select>
										</td>
										</tr>               
                                <tr>
								<td><input type="submit" name="submit3" class="btn btn-default submit" value="Add Subject" style="background-color:#2a3f54; color:white; border-radius:20px; margin-left:40%;"></td>
								</tr>
							</table>
							</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
		<?php
	if(isset($_POST["submit3"]))
   {
		include('book3.php');
   }
   ?>
<?php
include('footer.php');
?>


   
