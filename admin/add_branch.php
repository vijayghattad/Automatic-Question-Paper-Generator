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
								<div class="clearfix" >
                                <h2 style="color:black; text-align:center;">Add Branch</h2>
							    </div>
                            </div>
                            <div class="x_content">
							<form name = "form1" action="" method="post" class="col-lg-6">
                             <table class = "table table-bordered" style="margin-left:50%;">
								<tr>
								<td><input type="text" name="bid" class="form-control" autocomplete="off" placeholder="Branch Id" required="" style="border-radius:10px;"/></td>
								</tr>
								<tr>
								<td><input type="text" name="bname" class="form-control" autocomplete="off" placeholder="Branch Name" required="" style="border-radius:10px;"/></td>
								</tr>
								<tr>
								<td><input type="submit" name="submit1" class="btn btn-default submit" value="Add Branch" style="background-color:#2a3f54; color:white; margin-left:40%; border-radius:20px;"></td>
								</tr>
							</table>
							</form>
                            </div>  <br> <br>
                            <div class="x_title" style="margin-top:200px;">
								<div class="clearfix" >
                                <h2 style="color:black; text-align:center;">Branch Details</h2>
							    </div>
                            </div>
                            <div class="x_content">
                                <?php

								include('branch_details.php');
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
		<?php
	if(isset($_POST["submit1"]))
   {
        include('book2.php');
   }
   ?>
<?php
include('footer.php');
?>