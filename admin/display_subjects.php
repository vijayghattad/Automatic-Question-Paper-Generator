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

<style>
input::placeholder {
  font-size:15px;
}
</style>
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
                                <h2 style="color:black; text-align:center;">Display Subjects</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<form name = "form1" action="" method="post">
                            <table> <tr> <th>
							<input type="text" name="subname" autocomplete="on" placeholder="Subject" style="border-radius:10px; font-size:20px; margin-right:10px;"> </th>
							<th><button  type="submit" name="submit1" style="border:none; display: inline-block; margin-left:15px; border-radius:30px;"> <img src="images/search.png" height="30px" width="50px" style="border-radius:10px; display: block;"></button>
							</th> </tr> </table> </form>
							<?php
							if(isset($_POST["submit1"]))
							{     
								include('search_subjects.php');
							}
							else
							{
								include('subject_details.php');
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
