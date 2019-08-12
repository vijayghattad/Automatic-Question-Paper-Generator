<?php
session_start();
include('header.php');
include('connection.php');
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
                                <h2 style="color:black;">Faculty List</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<?php
							$res=mysqli_query($con,"select * from assign_subject where scode='$_GET[scode]'");
							echo "<table class='table table-bordered'>";
                            echo "<tr style='color:black; font-size:15px; background-color:#ff9966'>";
                            echo "<th>"; echo "Faculty Id"; echo "</th>";
							echo "<th>"; echo "Faculty Name"; echo "</th>";
							echo "<th>"; echo "Email"; echo "</th>";
							echo "<th>"; echo "Branch Id"; echo "</th>";
                            echo "<th>"; echo "Subject"; echo "</th>";
                            echo "<th>"; echo "Delete"; echo "</th>";
                            
                            
                            echo "</tr>";
							while($row=mysqli_fetch_array($res))
							{
                                echo "<tr style='color:black;'>";
                                echo "<td>"; echo $row["fid"]; echo "</td>";
								echo "<td>"; echo $row["fname"]; echo "</td>";
								echo "<td>"; echo $row["email"]; echo "</td>";
                                echo "<td>"; echo $row["bid"]; echo "</td>";
                                echo "<td>"; echo $row["sname"]; echo "</td>";
	                            echo "<td>"; ?><a href="delete_as.php?fid=<?php echo $row["fid"];?>&sname=<?php echo $row["sname"]; ?> " style="color:red">
                                <img src="images/delete.jpg" height="5%" style="margin-left:30%; border-radius: 30%;"></a><?php echo "</td>";
								echo "</tr>";
							}
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
