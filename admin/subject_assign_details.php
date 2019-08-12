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
                                <h2 style="color:black;">Assigned Subject Details</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<?php
                                $i=0;
							$res=mysqli_query($con,"select * from add_subject");
							echo "<table class='table table-bordered'>";
							echo "<tr  style='color:black;'>";
							while($row=mysqli_fetch_array($res))
							{   
								$i=$i+1;
								echo "<td>";
								echo "<b>"."Subject Name:&nbsp" .$row["sname"]. "</b>";
								echo "<br>";
								echo "<b>"."Subject Code:&nbsp" .$row["scode"]. "</b>";
								echo "<br><br>";
								?> <a href="faculty_record.php?scode=<?php echo $row["scode"];?>" style="color:red"><b><u>Faculty Record</u></b><?php
								echo "</td>";
								if($i==5)
								{
									echo "</tr>";
								 	echo "<tr>";
									$i=0;
								}		
							}
							echo "</tr>";
                            echo "</table>";							
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
